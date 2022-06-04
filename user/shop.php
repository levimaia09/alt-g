<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALT-G</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
        
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- bootstrap js -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/35355885e0.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php
    
    //adicionando o arquivo "functions"
    include("../php/connection.php");
    include("../php/verify_logins.php");
    session_start();

    verify_unlogin();

	
    $id = $_SESSION['id'];	
    $result = mysqli_query($mysqli, "SELECT * FROM login WHERE id=$id");
    $row = mysqli_fetch_assoc($result);

    $urladmin = "../admin/";
    $urluser = "../user/";
    $urlphp = "../php/";
    $urllogin = "../login/";
    $imgurl = "../images/img_perfil/".$row['image'];
    $imagesurl = "../images/"; 

    ?>
   
   <div class="header-area">
        <div class="mainmenu-area">

            <div class="logo">
                <img src="../images/img/logo-altg.png">
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
                        <li class="active">
                            <a href="index.php">
                                <i class="fa-solid fa-house-user"></i>Início
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $urladmin."index.php"; ?>">
                                <i class="fa-solid fa-lock"></i>admin
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li>
                            <a href="shop.html">
                                <i class="fa-solid fa-shop"></i>Loja
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li>
                            <a href="cart.html">
                                <i class="fa-solid fa-book-bookmark"></i>Biblioteca
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="edit_account.php">
                                <i class="fa-solid fa-file-invoice"></i>Conta
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="../php/logout.php">
                                <i class="fa-solid fa-right-from-bracket"></i>Logout
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
                <ul>
                    <i class="fa-solid fa-bell"></i>
                    <i class="fa-solid fa-gear"></i>
                    <img class="img_perf" src="<?php echo $imgurl?>" alt="">
                </ul>
            </div>
            

        </div>
    </div> <!-- End header area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">

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

            <div class="row">
                <?php
                    $i = 0;

                    while($i < 20){
                        ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-shop-product">
                                    <div class="product-upper">
                                        <img src="../images/img/godofwar.jpg" alt="">
                                    </div>
                                    <h2><a href="">God Of War</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>$899.00</ins> <del>$999.00</del>
                                    </div>  
                                    
                                    <div class="product-option-shop">
                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">comprar</a>
                                    </div>                       
                                </div>
                            </div>
                        <?php

                        $i++;
                    }
                ?>                   
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer area -->
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
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>

    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>