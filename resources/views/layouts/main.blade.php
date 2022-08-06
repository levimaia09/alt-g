<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @yield('head')
</head>
<body>
    <!-- header area -->
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
                        <li class="@yield('active1')">
                            <a href="/">
                                <i class="fa-solid fa-house-user"></i>Início
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li class="@yield('active2')">
                            <a href="/dashboard_page">
                                <i class="fa-solid fa-lock"></i>admin
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li class="@yield('active3')">
                            <a href="/shop">
                                <i class="fa-solid fa-shop"></i>Loja
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li class="@yield('active4')">
                            <a href="#">
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
            
            @auth
                <div class="header-right">
                    <div class="header-img">
                        <ul>
                            <i class="fa-solid fa-bell"></i>
                            <i class="fa-solid fa-gear"></i>
                            <img id="img-perf" class="img_perf" src="" alt="">
                        </ul>
                    </div>

                    <div id="header-account" class="header-account">
                        <div class="div-img">
                            <img class="img_perf" src="" alt="">
                            <div class="account-date">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="/edit_account">
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
                                <form action="/authenticate/logout" method="POST">
                                    @csrf
                                    <a href="/authenticate/logout" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="fa-solid fa-power-off"></i>
                                        Logout
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @endauth

            @guest
                <div class="login-area">
                    <a class="login button" href="/authenticate/login">
                        logar
                    </a>
                </div>
            @endguest
        </div>
    </div> 
    
    @yield('content')

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

    @yield('bottom')
</body>
</html>