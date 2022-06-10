<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="l">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template"> -->

    <!-- Title Page-->
    <title>ALT-G admin</title>

    <!-- Google fonts: Oswald-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="../user/style.css">
    <link rel="stylesheet" href="../all.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/35355885e0.js" crossorigin="anonymous"></script>
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <?php
        $urlphp = "../php/";
        $urladmin = "../admin/";
        $urluser = "../user/";

        include("../php/connection.php");
        include("../php/verify_logins.php");
        session_start();
        
        verify_unlogin();;

        $id = $_SESSION['id'];
        $result = mysqli_query($mysqli, "SELECT * FROM login WHERE id=$id ");
        $row = mysqli_fetch_assoc($result);
        $urlimg = "../images/img_perfil/"; 
        $imgurl = "../images/img_perfil/".$row['image'];

    ?>

    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <div class="header-area">
            <div class="mainmenu-area">

                <div class="logo">
                    <img src="../images/../images/img/logo-altg.png">
                </div>

                <div id="nav-bar" class="nav-bar">
                    <div class="navbar-header">
                        <button id="btn-mobile">
                            Menu
                            <span id="hamburguer"></span>
                        </button>
                    </div> 
                    <div class="navbar-list">
                        <ul class="nav">
                            <li>
                                <a href="<?php echo $urluser."index.php";?>">
                                    <i class="fa-solid fa-house-user"></i>Início
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li  class="active">
                                <a href="<?php echo $urladmin."index.php"; ?>">
                                    <i class="fa-solid fa-lock"></i>admin
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $urluser."shop.php";?>">
                                    <i class="fa-solid fa-shop"></i>Loja
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $urluser."cart.html";?>">
                                    <i class="fa-solid fa-book-bookmark"></i>Biblioteca
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            
                            
                            <!-- <li><a href="single-product.html"><span class="bot-line"></span>Produto único</a></li>
                            <li><a href="checkout.html"><span class="bot-line"></span>Checkout</a></li>
                            <li><a href="#"><span class="bot-line"></span>Categorias</a></li>
                            <li><a href="#"><span class="bot-line"></span>Contato</a></li> -->
                        </ul>
                    </div>  
                </div>
                
                
                <div class="header-right">
                    <div class="header-img">
                        <ul>
                            <i class="fa-solid fa-bell"></i>
                            <i class="fa-solid fa-gear"></i>
                            <img id="img-perf" class="img_perf" src="<?php echo $imgurl?>" alt="">
                        </ul>
                    </div>

                    <div id="header-account" class="header-account">
                        <div class="div-img">
                            <img class="img_perf" src="<?php echo $imgurl?>" alt="">
                            <div class="account-date">
                                <span><?php echo $row['username'];?></span>
                                <span><?php echo $row['email'];?></span>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="<?php echo $urluser."edit_account.php";?>">
                                    <i class="fa-solid fa-user"></i>
                                    Conta
                                </a>
                            </li>
                            <li>
                                
                                <a href="#">
                                    <i class="fa-solid fa-gear"></i>
                                    Configurações
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-sack-dollar"></i>
                                    Faturamento
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $urlphp."logout.php";?>">
                                    <i class="fa-solid fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- End header area -->
        <!-- END HEADER DESKTOP-->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
            
                                <div class="container-group">
                                    <div class="search-group">  
                                        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" placeholder="Buscar por..." aria-label="Search for..."
                                                        aria-describedby="btnNavbarSearch" />
                                                    <button class="btn btn-dark" id="btnNavbarSearch" type="button"><i
                                                        class="fas fa-search"></i></button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Bem vindo
                                <span><?php echo strtok($row['username']," ");?></span>        
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row justify-content-center">
                        
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">388,688</h2>
                                <span class="desc">items sold</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">1,086</h2>
                                <span class="desc">this week</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">$1,060,386</h2>
                                <span class="desc">total earnings</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART-->
                            <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-30">chart</h3>
                                <div class="chart-wrap">
                                    <canvas id="widgetChart5"></canvas>
                                </div>
                                <div class="statistic-chart-1-note">
                                    <span class="big">10,368</span>
                                    <span>/ 16220 items sold</span>
                                </div>
                            </div>
                            <!-- END CHART-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">top campaigns</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                            <tr>
                                                <td>1. Australia</td>
                                                <td>$70,261.65</td>
                                            </tr>
                                            <tr>
                                                <td>2. United Kingdom</td>
                                                <td>$46,399.22</td>
                                            </tr>
                                            <tr>
                                                <td>3. Turkey</td>
                                                <td>$35,364.90</td>
                                            </tr>
                                            <tr>
                                                <td>4. Germany</td>
                                                <td>$20,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>5. France</td>
                                                <td>$10,366.96</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END TOP CAMPAIGN-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART PERCENT-->
                            <div class="chart-percent-2">
                                <h3 class="title-3 m-b-30">chart by %</h3>
                                <div class="chart-wrap">
                                    <canvas id="percent-chart2"></canvas>
                                    <div id="chartjs-tooltip">
                                        <table></table>
                                    </div>
                                </div>
                                <div class="chart-info">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note">
                                        <span class="dot dot--red"></span>
                                        <span>Services</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END CHART PERCENT-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 m-b-30">
                            <h3 class="title-5 m-b-35">data table</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button id="myBtn" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>adicionar item
                                    </button>

                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>

                                <div id="myModal" class="modal">
                                        <!-- Modal content -->
                                            
                                        <div class="card">
                                            <div style="text-align: center; text-transform: uppercase;" class="card-header">
                                                Envie seu <strong>jogo</strong> 
                                                <span class="close">&times;</span>
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="../php/functions_products.php" method="post" enctype="multipart/form-data" class="form-horizontal">   
                                                    
                                                    <?php

                                                        if(isset($_SESSION['failed'])){
                                                            $name = $_SESSION['name'];
                                                            $price = $_SESSION['price'];
                                                            $description = $_SESSION['description'];
                                                            ?>
                                                                <span class="alert login100-form-title p-b-10 m-b-10"><?php echo $_SESSION['failed'];?></span>
                                                                <br>
                                                            <?php
                                                        }
                                                        else{
                                                            $name= "";
                                                            $price = "";
                                                            $description = "";
                                                        }
                                                        unset($_SESSION['failed'], $_SESSION['name'], $_SESSION['price'], $_SESSION['description'])

                                                    ?>

                                                    <div class="row form-group">
                                                        <label for="image">
                                                        </label>
                                                        <div class="m-b-10 max-width max-width-game">
                                                            <div class="image_container">
                                                                <img src="../images/img/semimagem.png" alt="Selecione uma imagem" class="imgphoto img-game" id="imgphoto">
                                                            </div>
                                                            <input type="file" id="flimage" name="image-input" accept="image/*">
                                                            <input type="hidden" name="value_img_product" id="value_img_product" value="no changed">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Nome:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="name-input" name="name-input" placeholder="Nome" class="form-control" value="<?php echo $name;?>">
                                                            <small class="form-text text-muted">Digite aqui o nome do seu jogo:</small>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="email-input" class=" form-control-label">Preço:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="price-input" name="price-input" placeholder="Preço" class="form-control" value="<?php echo $price;?>">
                                                            <small class="help-block form-text">Digite o preço do seu jogo em $US</small>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="textarea-input" class=" form-control-label">Descrição:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea style="resize: none;" name="description-input" id="description-input" maxlength="255" rows="9" placeholder="Descrição" class="form-control" value="<?php echo $description;?>"></textarea>
                                                            <small class="help-block form-text">Digite uma breve descrição do seu jogo</small>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="select" class=" form-control-label">Gênero:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <select id="genre-input" class="form-control" name="genre-input" >
                                                                <option value="0">Por favor escolha</option>
                                                                <option value="terror">Terror</option>
                                                                <option value="acao">Ação</option>
                                                                <option value="aventura">Aventura</option>
                                                                <option value="puzzle">Puzzle</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm" name="submit-insert">
                                                            <i class="fa fa-dot-circle-o"></i> Enviar
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm" id="reset-btn">
                                                            <i class="fa fa-ban"></i> Resetar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    
                                </div>

                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>description</th>
                                            <th>date</th>
                                            <th>status</th>
                                            <th>price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">lori@example.com</span>
                                            </td>
                                            <td class="desc">Samsung S8 Black</td>
                                            <td>2018-09-27 02:12</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                            <td>$679.00</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">john@example.com</span>
                                            </td>
                                            <td class="desc">iPhone X 64Gb Grey</td>
                                            <td>2018-09-29 05:57</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                            <td>$999.00</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">lyn@example.com</span>
                                            </td>
                                            <td class="desc">iPhone X 256Gb Black</td>
                                            <td>2018-09-25 19:03</td>
                                            <td>
                                                <span class="status--denied">Denied</span>
                                            </td>
                                            <td>$1199.00</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">doe@example.com</span>
                                            </td>
                                            <td class="desc">Camera C430W 4k</td>
                                            <td>2018-09-24 19:10</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                            <td>$699.00</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="footer-row row">
                    <div class="col-md-3">
                        <div class="footer-about-us">
                            <h2>alt-<span>G</span></h2>
                            <p>Somos uma empresa de venda de jogos dedicada e muito conhecida no mercado, somos compromissado com a qualidade do nosso serviço e com a satisfação do cliente!</p>
                            <div class="footer-social">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                       <p>&copy; 2022 Alt-g corporation. Todos os direitos reservados.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
