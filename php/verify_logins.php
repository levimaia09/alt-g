<?php

function verify_unlogin(){
    if(!isset($_SESSION['valid'])){
        header("Location: ../login/index_login.php");
        exit();
    }
}

function verify_login(){
    if(isset($_SESSION['valid'])){
        header("Location: ../user/index.php");
        exit();
    }
}

?>