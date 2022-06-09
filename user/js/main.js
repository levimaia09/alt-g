jQuery(document).ready(function($){
    
    // menu amburguer, trocar para active ou não

    try{
        let btn_mobile = document.getElementById('btn-mobile');

        function toglemenu() {
            let navbar = document.getElementById('nav-bar');
            navbar.classList.toggle('active');
        }

        btn_mobile.addEventListener('click', toglemenu);
    }
    catch(error){
        console.log(error);
    }

    try{
        var img = document.getElementById('img-perf');
        let header = document.getElementById('header-account');

        function toglemenu2() {
            header.classList.toggle('active');
        }

        img.addEventListener('click',toglemenu2);
        
    }
    catch(error){
        console.log(error);
    }

    // dropdown
    // try {
    //     var menu = $('.js-item-menu');
    //     var sub_menu_is_showed = -1;
    
    //     for (var i = 0; i < menu.length; i++) {
    //       $(menu[i]).on('click', function (e) {
    //         e.preventDefault();
    //         $('.js-right-sidebar').removeClass("show-sidebar");        
    //         if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
    //           $(this).toggleClass('show-dropdown');
    //           sub_menu_is_showed = -1;
    //         }
    //         else {
    //           for (var i = 0; i < menu.length; i++) {
    //             $(menu[i]).removeClass("show-dropdown");
    //           }
    //           $(this).toggleClass('show-dropdown');
    //           sub_menu_is_showed = jQuery.inArray(this, menu);
    //         }
    //       });
    //     }
    //     $(".js-item-menu, .js-dropdown").click(function (event) {
    //       event.stopPropagation();
    //     });
    
    //     $("body,html").on("click", function () {
    //       for (var i = 0; i < menu.length; i++) {
    //         menu[i].classList.remove("show-dropdown");
    //       }
    //       sub_menu_is_showed = -1;
    //     });
    
    //   } catch (error) {
    //     console.log(error);
    //   }
    
    //   var wW = $(window).width();

    // fim dropdown
    
    $('.product-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            437:{
                items:2,
            },
            768:{
                items:3,
            },
            1000:{
                items:4,
            },
            1200:{
                items:5,
            }
        }
    });  
    
    $('.related-products-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:2,
            },
            1200:{
                items:3,
            }
        }
    });  
    
    $('.brand-list').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            200:{
                items:2,
            },
            400:{
                items:3,
            },
            1000:{
                items:4,
            }
        }
    });    
    
    
    // Bootstrap Mobile Menu fix
    $(".navbar-nav li a").click(function(){
        $(".navbar-collapse").removeClass('in');
    });    
    
    // jQuery Scroll effect
    $('.navbar-nav li a, .scroll-to-up').bind('click', function(event) {
        var $anchor = $(this);
        var headerH = $('.header-area').outerHeight();
        $('html, body').stop().animate({
            scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInOutExpo');

        event.preventDefault();
    });    
    
    // Bootstrap ScrollPSY
    $('body').scrollspy({ 
        target: '.navbar-collapse',
        offset: 95
    })      
});

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10146041-21', 'auto');
  ga('send', 'pageview');
