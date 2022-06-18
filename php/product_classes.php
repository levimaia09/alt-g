<?php 

    class Product{
        var $id_product;
        var $id_login;
        var $name;
        var $image;
        var $price;
        var $date;
        var $genre;
        var $description;
        var $url_img;
        var $value_img;

        function insert(){
            include("connection.php");
            include("account_classes.php");

            $id_login = $this->id_login;
            $name = $this->name;
            $image = $this->image;
            $price = $this->price;
            $date = $this->date;
            $genre = $this->genre;
            $description = $this->description;

            $result = mysqli_query($mysqli, " SELECT * FROM products WHERE name='$name' ");
            $row = mysqli_fetch_assoc($result);

            if($row == 0){

                if($name == "" || $image == "" ||  $price == "" || $genre == "" || $description == "") {
                    $_SESSION['failed'] = "Os campos não podem ser vazios!";
                    $_SESSION['name'] = "";
                    $_SESSION['price'] = "";
                    $_SESSION['description'] = "";
                    header("Location: ../admin/index.php");
                } 
    
                else {
    
                    $e2 = new Image;
                    $e2->imagem = $this->image;
                    $e2->url_img = $this->url_img;
                    $e2->value_img = $this->value_img;
                    $e2->set_image();
                    $nome_imagem = $e2->img_name_final;
    
                    mysqli_query($mysqli, "INSERT INTO products(id_login, name, image, price, date, genre, description) VALUES('$id_login', '$name', '$nome_imagem', '$price', '$date', '$genre', '$description') ")
                    or die("Could not execute the insert query.");
        
                    header("Location: ../admin/index.php");
                }  
            } 
            else if($row >= 1){
                $_SESSION['failed'] = "Este nome já está registrado!";
                $_SESSION['name'] = $name;
                $_SESSION['price'] = $price;
                $_SESSION['description'] = $description;
                header("Location: ../admin/index.php");
            }

        }

        function update(){
            include("connection.php");
            include("account_classes.php");

            $id_product = $this->id_product;
            $name = $this->name;
            $image = $this->image;
            $price = $this->price;
            $genre = $this->genre;
            $description = $this->description;
            $url_img = $this->url_img;
            $value_img = $this->value_img;

            $result = mysqli_query($mysqli, " SELECT * FROM products WHERE name='$name' ");
            $row = mysqli_fetch_assoc($result);

            if($row == 0){

                if($name == "" || $image == "" ||  $price == "" || $genre == "" || $description == "") {
                    $_SESSION['failed'] = "Os campos não podem ser vazios!";
                    $_SESSION['name'] = "";
                    $_SESSION['price'] = "";
                    $_SESSION['description'] = "";
                    header("Location: ../admin/index.php");
                } 
    
                else {

                    $result2 = mysqli_query($mysqli, " SELECT * FROM products WHERE id='$id_product' ");
                    $row2 = mysqli_fetch_assoc($result2);
    
                    $e2 = new Image;
                    $e2->imagem = $this->image;
                    $e2->url_img = $this->url_img;
                    $e2->value_img = $this->value_img;
                    $e2->update_image();
                    $nome_imagem = $e2->img_name_final;
    
                    mysqli_query($mysqli, "UPDATE products SET name='$name', image='$nome_imagem', price='$price', genre='$genre', description='$description' WHERE id='$id_product'")
                    or die("não foi possível inserir a query de update");
        
                    header("Location: ../admin/index.php");
                }  
            } 
            else if($row >= 1){
                $_SESSION['failed'] = "Este nome já está registrado!";
                $_SESSION['name'] = $name;
                $_SESSION['price'] = $price;
                $_SESSION['description'] = $description;
                header("Location: ../admin/index.php");
            }
        }
    }

?>