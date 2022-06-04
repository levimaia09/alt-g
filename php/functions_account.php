<?php

    //classe para editar conta

    include("account_classes.php");

    if(isset($_POST['update'])){

        $e1 = new Edit;

        $e1->email = $_POST['email'];
        $e1->username = $_POST['username'];
        $e1->password = $_POST['password'];
        $e1->old_password = $_POST['oldpassword'];

        $e1->imagem = $_FILES['imagem'];

        var_dump($_FILES);
        
        $e1->update();
        
    }

    else if(isset($_POST['delete'])){
        $e1 = new Edit;
        $e1->delete();
    }

    else if(isset($_POST['submit-login'])){
        $l1 =  new Login;

        $l1->username = $_POST['username'];
        $l1->password = $_POST['password'];
        
        $l1->log_in();
    }

    else if(isset($_POST['submit-register'])){
        $l1 =  new Login;

        $l1->imagem = $_FILES['imagem'];

        $l1->email = $_POST['email'];
        $l1->username = $_POST['username'];
        $l1->password = $_POST['password'];

        $l1->register();
    }
    

   
?>