<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Furniture FM</title>

    <!-- Favicon  -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

</head>

<body>

    <section id="intro">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <img class="logoBorder" src="{{asset('assets/img/home/logo.png')}}" style="margin-top:20px;" alt="Furniture FM logo" />
                
                <!-- <h3 style="text-align:center;"></h3> -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="cat-head">
                        <h1 style="text-align:center">Top Deals</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('gallery.show', 'bedroom')}}" class="btn btn-warning" style="width:100%; color: red;">
                        BEDROOM SECTION
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('gallery.show', 'livingroom')}}" class="btn btn-warning" style="width:100%; color: red;">
                        LIVING ROOM SECTION
                    </a>
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-md-6">
                    <a href="{{ route('gallery.show', 'diningroom')}}" class="btn btn-warning" style="width:100%; color: red;">
                        DINING ROOM SECTION
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('gallery.show', 'varieties')}}" class="btn btn-warning" style="width:100%; color: red;">
                        VARIETIES SECTION
                    </a>
                </div>
            </div>

            <div class="row"style="margin-top: 32px">
                <div class="col-md-12 text-center">
                    <div class="col-md-6 offset-md-3">
                        <div class="cat-head">
                            <h1>All Categories Deals</h1>
                        </div>
                    </div>
                    <!-- <h3>Furniture DISCOUNT Library</h3> -->
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ route('gallery.show', 'bed')}}" class="btn btn-info" style="width:100%; margin: 5px;">BED SECTION</a>
                            <a href="{{ route('gallery.show', 'bedonly')}}" class="btn btn-info" style="width:100%; margin: 5px;">BED ONLY ALL SIZES</a>
                            <a href="{{ route('gallery.show', 'children')}}" class="btn btn-info" style="width:100%; margin: 5px;">CHILDREN SECTION</a>
                            <a href="{{ route('gallery.show', 'pictures')}}" class="btn btn-info" style="width:100%; margin: 5px;">PICTURES</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('gallery.show', 'sofa')}}" class="btn btn-success" style="width:100%; margin: 5px;">SOFA SECTION</a>
                            <a href="{{ route('gallery.show', 'coffee')}}" class="btn btn-success" style="width:100%; margin: 5px;">COFFEE TABLES</a>
                            <a href="{{ route('gallery.show', 'tv')}}" class="btn btn-success" style="width:100%; margin: 5px;">TV STANDS</a>
                            <a href="{{ route('gallery.show', 'rugs')}}" class="btn btn-success" style="width:100%; margin: 5px;">RUGS</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('gallery.show', 'dining')}}" class="btn btn-warning" style="width:100%; margin: 5px;">DINING SETS</a>
                            <a href="{{ route('gallery.show', 'chairs')}}" class="btn btn-warning" style="width:100%; margin: 5px;">CHAIRS ONLY</a>
                            <a href="{{ route('gallery.show', 'tables')}}" class="btn btn-warning" style="width:100%; margin: 5px;">TABLES ONLY</a>
                            <a href="{{ route('gallery.show', 'buffets')}}" class="btn btn-warning" style="width:100%; margin: 5px;">BUFFETS & SERVERS</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('gallery.show', 'mattress')}}" class="btn btn-danger" style="width:100%; margin: 5px;">MATTRESS</a>
                            <a href="{{ route('gallery.show', 'lamps')}}" class="btn btn-danger" style="width:100%; margin: 5px;">LAMPS</a>
                            <a href="{{ route('gallery.show', 'decorations')}}" class="btn btn-danger" style="width:100%; margin: 5px;">DECORATIONS</a>
                            <a href="{{ route('gallery.show', 'varieties')}}" class="btn btn-danger" style="width:100%; margin: 5px;">VARIETIES</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('gallery.show', 'toronto')}}" class="btn btn-lg btn-block btn-warning" style="width:100%; margin: 5px; color: red;">TORONTO FURNITURE STORES' SPECIAL OFFERS</a>

            <!-- style of row was [style="margin-top: 32px; border: 2px solid blue;"] -->
            <div class="row" style="margin-top: 32px; border: 1px solid gray;">
                <div class="col-md-12 text-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block mx-auto w-100" src="{{asset('assets/img/carousel/1.jpg')}}" alt="First slide" style="height: 400px; width:900px !important; margin: auto;">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block mx-auto w-100" src="{{asset('assets/img/carousel/2.jpg')}}" alt="Second slide" style="height: 400px; width:900px !important; margin: auto;">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block mx-auto w-100" src="{{asset('assets/img/carousel/3.jpg')}}" alt="Third slide" style="height: 400px; width:900px !important; margin: auto;">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<!-- 
    <section id="intro">
        <div class="intro-text">
          <p style="color:black;">First Online Furniture Market  with Diversities, Savings , Deals, Brands & logistic </p>                                                          
          <a href="{{ route('gallery.show', 'catval2')}}" class="btn btn-primary btn-block amado-btn red-btn mb-15">Most Reasonable Prices</a>
          <a href="{{ route('gallery.show', 'catval2')}}" class="btn btn-primary btn-block amado-btn yellow-btn mb-15">FurnitureFM.com Suggested products</a>
          <a href="{{ route('gallery.show', 'catval2')}}" class="btn btn-primary btn-block amado-btn red-btn mb-15">Stores Deals & Discounts</a>
          <a href="{{ route('gallery.show', 'catval2')}}" class="btn btn-primary btn-block amado-btn yellow-btn mb-15">Furniture  Stores Flyers & HIGHLIGHTS</a>
          <a href="{{ route('gallery.show', 'catval2')}}" class="btn btn-primary btn-block amado-btn red-btn mb-15">100+  listed stores connections & Negotiations</a>
          <a href="{{ route('gallery.show', 'catval2')}}" class="btn btn-primary btn-block amado-btn yellow-btn mb-15">Amazing Floor Models OFFERS</a>
        </div>  
    </section> -->
    <!-- #intro -->

    <script src="{{ asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>

</body>

</html>