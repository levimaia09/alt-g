<?php
    include("connection.php");
    include("product_classes.php");
    session_start();

    $id_user = $_SESSION['id'];	
    $result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$id_user' ");
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['submit-insert'])){
        date_default_timezone_set('America/Fortaleza');
        $e1 = new Product;
        $e1->id_login = $id_user;
        $e1->name = $_POST['name-input'];
        $e1->image = $_FILES['image-input'];
        $e1->price = $_POST['price-input'];
        $e1->date = date('d-m-y h:i');
        $e1->genre = $_POST['genre-input'];
        $e1->description = $_POST['description-input'];
        $e1->url_img = "../images/img_product/";
        $e1->value_img = $_POST['value_img_product'];
        $e1->insert();
    }
    else if(isset($_POST['submit-update'])){
        $e1 = new Product;
        $e1->id_product = $_POST['id_product-input'];
        $e1->name = $_POST['name-input'];
        $e1->image = $_FILES['image-input'];
        $e1->price = $_POST['price-input'];
        $e1->genre = $_POST['genre-input'];
        $e1->description = $_POST['description-input'];
        $e1->url_img = "../images/img_product/";
        $e1->value_img = $_POST['value_img_product'];
        $e1->update();
    }
    else{
        echo "Erro, nenhum input detectado!";
    }
?>