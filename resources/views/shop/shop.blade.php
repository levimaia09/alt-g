@extends('layouts.main_user')

@section('title', 'ALT-G')

@section('content')
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
                @for($i=0; $i < 20; $i++)
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
                @endfor      
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
@endsection