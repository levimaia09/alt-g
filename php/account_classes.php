<?php 

class Login {

    var $username;
    var $email;
    var $password;
    var $imagem;
    var $url_img;

    function log_in(){

        $urlphp = "../php/";
        $urluser = "../user/";

        include("connection.php");
        session_start();

        $username = mysqli_real_escape_string($mysqli, $this->username);
        $password = mysqli_real_escape_string($mysqli, $this->password);
        $url_img = $this->url_img;

        if($username == "" || $password == "") {
            $_SESSION['failed'] = "Todos os campos são obrigatórios!";
            $_SESSION['username'] = "";
            header("Location: ../login/index_login.php");
            exit();
        } 
        else {
            $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$username' AND password=sha1('$password')")
            or die("Could not execute the select query.");
            
            $row = mysqli_fetch_assoc($result);
            
            if(is_array($row) && !empty($row)) {
                $validuser = $row['username'];
                $_SESSION['valid'] = $validuser;
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../user/index.php");
            } 
            else {
                $_SESSION['failed'] = "Login ou senha inválidos!";
                $_SESSION['username'] = $username;
                header("Location: ../login/index_login.php");
                exit();
            }
        }
    }

    function register(){
        include("connection.php");
        session_start();

        $email = $this->email;
        $username = $this->username;
        $password = $this->password;

        $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$username' ");
        $row = mysqli_fetch_assoc($result);
        

        if($row == 0){

            if($username == "" || $password == "" ||  $email == "") {
                $_SESSION['failed'] = "Os campos não podem ser vazios!";
                $_SESSION['user'] = "";
                $_SESSION['email'] = "";
                header("Location: ../login/index_register.php");
            } 

            else {

                $e2 = new Image;
                $e2->imagem = $this->imagem;
                $e2->set_image();
                $nome_imagem = $e2->img_name_final;

                mysqli_query($mysqli, "INSERT INTO login(email, image, username, password) VALUES('$email', '$nome_imagem', '$username', sha1('$password'))")
                or die("Could not execute the insert query.");
    
                header("Location: ../login/index_login.php");
            }  
        } 


        else if($row >= 1){
            $_SESSION['failed'] = "Este username já está registrado!";
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            header("Location: ../login/index_register.php");
        }
            
    }

    
}

class Edit {

    var $email;
    var $username;
    var $password;
    var $old_password;
    var $imagem;
    var $value_img;
    var $url_img;

    function update(){

        include("connection.php");
        session_start();

        $id = $_SESSION['id'];	
        $result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$id' ");
        $row = mysqli_fetch_assoc($result);

        $email = $this->email;
        $password = $this->password;
        $username = $this->username;
        $old_password = sha1($this->old_password);
        $pass_in_db = $row['password'];
        $pass_format = str_replace(" ","",$password);
        $urlimg = $this->url_img;

        

        // checando campos vazios
        if(empty($email) || empty($username)){				
            $_SESSION['failed'] = "Os campos não podem ser vazios!";
            header("Location: ../user/edit_account.php");
            exit();
        }

        else{

            if(($username != $row['username'] || $email != $row['email'])){

                $result_user = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$username' ");
                $row_user = mysqli_fetch_assoc($result_user);

                $result_email = mysqli_query($mysqli, "SELECT * FROM login WHERE email='$email' ");
                $row_email = mysqli_fetch_assoc($result_email);

                if($username != $row['username'] && $email != $row['email']){
                    if($row_user >= 1 and $row_email >= 1){
                        $_SESSION['failed'] = "Este username e email já estão registrados!";
                        $_SESSION['email'] = $email;
                        $_SESSION['username'] = $username;
                        header("Location: ../user/edit_account.php");
                        exit();
                    }
                }

                else if($username != $row['username']){
                    if($row_user >= 1){
                        $_SESSION['failed'] = "Este username já está registrado!";
                        $_SESSION['email'] = $email;
                        $_SESSION['username'] = $username;
                        header("Location: ../user/edit_account.php");
                        exit();
                    }
                }

                else if($email != $row['email']){
                    if($row_email >= 1){
                        $_SESSION['failed'] = "Este email já está registrado!";
                        $_SESSION['email'] = $email;
                        $_SESSION['username'] = $username;
                        header("Location: ../user/edit_account.php");
                        exit();
                    }
                }

            }

            if($old_password == $pass_in_db){

                if(empty($pass_format)){
                    $password = $row['password'];
                }
                if(!empty($pass_format)){
                    $password = sha1($password);
                }

                $e2 = new Image;
                $e2->imagem = $this->imagem;
                $e2->value_img = $this->value_img;
                unlink($urlimg.$row['image']);
                $e2->set_image();
                $nome_imagem = $e2->img_name_final;

                mysqli_query($mysqli, "UPDATE login SET email='$email', image='$nome_imagem', username='$username', password='$password' WHERE id='$id'")
                or die("Could not execute the insert query.");

                header("Location: ../user/edit_account.php");
            }

            else{
                $_SESSION['failed'] = "Senha incorreta!";
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $username;
                header("Location: ../user/edit_account.php");
                exit();
            }
            
        }

        

    }

    function delete(){

        include("connection.php");
        session_start();

        $urlimg = "../images/img_perfil/";

        $id = $_SESSION['id'];
        $result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$id' ");
        $row = mysqli_fetch_assoc($result);

        unlink($urlimg.$row['image']);

        mysqli_query($mysqli, "DELETE FROM login WHERE id='$id' ") 
        or die("Could not execute the delete query.");

        header("Location:logout.php");
    } 

}

class Image {
    var $img_name_final;
    var $imagem;
    var $value_img;
    var $url_img;

    function set_image(){

        include("connection.php");

        $urlimg = $this->url_img;

        $id = $_SESSION['id'];	
        $result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$id' ");
        $row = mysqli_fetch_assoc($result);

        $imagem = $this->imagem;
        $value_img = $this->value_img;

        if($value_img == "empty"){
            $nome_imagem = sha1(uniqid("semfoto")).".png";

            $this->img_name_final = $nome_imagem;

            copy("../images/img/semfoto.png",$urlimg.$nome_imagem);
        }

        else if($value_img == "changed"){
            $extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);
            $nome_imagem = sha1(uniqid($imagem['name'])).".".$extensao;
            $upload = $urlimg;

            $this->img_name_final = $nome_imagem;

            move_uploaded_file($imagem['tmp_name'], $upload.$nome_imagem);
        }
    }

    function update_image(){
        include("connection.php");

        $urlimg = $this->url_img;

        $id = $_SESSION['id'];	
        $result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$id' ");
        $row = mysqli_fetch_assoc($result);

        $imagem = $this->imagem;
        $value_img = $this->value_img;

        if($value_img == "no changed"){
            $this->img_name_final = $row['image'];
        }

        else if($value_img == "changed"){
            $extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);
            $nome_imagem = sha1(uniqid($imagem['name'])).".".$extensao;
            $upload = $urlimg;

            $this->img_name_final = $nome_imagem;

            unlink($url_img.$row['image']);
            move_uploaded_file($imagem['tmp_name'], $upload.$nome_imagem);
        }

        else if($value_img == "empty"){
            $nome_imagem = sha1(uniqid("semfoto")).".png";

            $this->img_name_final = $nome_imagem;

            unlink($url_img.$row['image']);
            copy("../images/img/semfoto.png",$urlimg.$nome_imagem);
        }
    }
}

?>