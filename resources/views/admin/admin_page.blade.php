@extends('layouts.main_admin')

@section('title', 'Admin')
@section('active2', 'active')

@section('content')

    <div class="page-wrapper">
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
                                <span></span>        
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


                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>nome</th>
                                            <th>preço</th>
                                            <th>data</th>
                                            <th>genero</th>
                                            <th>descrição</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    
                                        <tbody>
                                        <tr class="tr-shadow">
                                            <td>
                                                <span class="block-email"></span>
                                            </td>
                                            <td class="desc">
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td class="desc">
                                                
                                            </td>
                                            <td class="desc" style="max-width: 100px; max-height: 50px; ">
                                                
                                            </td>

                                            <td>
                                                <div class="table-data-feature">
                                                    
                                                    <button href="#" class="item btn-edit" data-toggle="tooltip" data-placement="top" onclick="">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item btn-delete" data-toggle="tooltip" data-placement="top">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                            <div id="myModal" class="modal">
                                <div class="card">
                                    <div style="text-align: center; text-transform: uppercase;" class="card-header">
                                        <span id="title-form">Envie seu <strong>jogo</strong></span> 
                                        <span class="close">&times;</span>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="../php/functions_products.php" method="post" enctype="multipart/form-data" class="form-horizontal">   
                                            
                                            

                                            <input type="hidden" id="id_product-input" name="id_product-input" value="">
                                            <div class="row form-group">
                                                <label for="image">
                                                </label>
                                                <div class="m-b-10 max-width max-width-game">
                                                    <div class="image_container">
                                                        <img src="../images/img/semimagem.png" alt="Selecione uma imagem" class="imgphoto img-game" id="imgphoto">
                                                    </div>
                                                    <input type="file" id="flimage" name="image-input" accept="image/*">
                                                    <input type="hidden" name="value_img_product" id="value_img_product" value="empty">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nome:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name-input" name="name-input" placeholder="Nome" class="form-control" value="">
                                                    <small class="form-text text-muted">Digite aqui o nome do seu jogo:</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Preço:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" maxlength="6" step="0.01" id="price-input" name="price-input" placeholder="Preço" class="form-control" value="">
                                                    <small class="help-block form-text">Digite o preço do seu jogo em $US</small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Descrição:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea style="resize: none;" name="description-input" id="description-input" maxlength="255" rows="9" placeholder="Descrição" class="form-control" value=""></textarea>
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
                                                        <option value="ação">Ação</option>
                                                        <option value="aventura">Aventura</option>
                                                        <option value="puzzle">Puzzle</option>
                                                        <option value="indie">Indie</option>
                                                        <option value="Plataforma">Plataforma</option>
                                                        <option value="RPG">RPG</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm" id="btn-form" name="submit-insert">
                                                    <i class="fa fa-dot-circle-o"></i> Enviar
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" id="reset-btn" name="reset-btn">
                                                    <i class="fa fa-ban"></i> Resetar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- form para update dos jogos -->
                            <div id="myModalEdit" class="modal">
                                <div class="card">
                                    <div style="text-align: center; text-transform: uppercase;" class="card-header">
                                        <span id="title-form">Atualize seu <strong>jogo</strong></span> 
                                        <span class="close">&times;</span>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="../php/functions_products.php" method="post" enctype="multipart/form-data" class="form-horizontal">   
                                            
                                            

                                            <input type="hidden" id="id-product-input-edit" name="id-product-input-edit" value="">
                                            <div class="row form-group">
                                                <label for="image">
                                                </label>
                                                <div class="m-b-10 max-width max-width-game">
                                                    <div class="image_container">
                                                        <img src="../images/img/semimagem.png" alt="Selecione uma imagem" class="imgphoto img-game" id="imgphoto-edit">
                                                    </div>
                                                    <input type="file" id="flimage-edit" name="image-input-edit" accept="image/*">
                                                    <input type="hidden" name="value_img_product_edit" id="value_img_product_update" value="no changed">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nome:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name-input-edit" name="name-input-edit" placeholder="Nome" class="form-control" value="">
                                                    <small class="form-text text-muted">Digite aqui o nome do seu jogo:</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Preço:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" maxlength="6" step="0.01" id="price-input-edit" name="price-input-edit" placeholder="Preço" class="form-control" value="">
                                                    <small class="help-block form-text">Digite o preço do seu jogo em $US</small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Descrição:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea style="resize: none;" name="description-input-edit" id="description-input-edit" maxlength="255" rows="9" placeholder="Descrição" class="form-control" value=""></textarea>
                                                    <small class="help-block form-text">Digite uma breve descrição do seu jogo</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Gênero:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id="genre-input-edit" class="form-control" name="genre-input-edit" >
                                                        <option value="0">Por favor escolha</option>
                                                        <option value="Terror">Terror</option>
                                                        <option value="Ação">Ação</option>
                                                        <option value="Aventura">Aventura</option>
                                                        <option value="Puzzle">Puzzle</option>
                                                        <option value="Indie">Indie</option>
                                                        <option value="Plataforma">Plataforma</option>
                                                        <option value="RPG">RPG</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm" id="btn-form" name="submit-update">
                                                    <i class="fa fa-dot-circle-o"></i> Update
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
@endsection
