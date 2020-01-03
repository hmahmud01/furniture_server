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
                <a href="{{url('/')}}"><img class="logoBorder" src="{{asset('assets/img/home/logo.png')}}" alt="Furniture FM logo" /></a>
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
                    <a href="{{ route('gallery.show', 'bedroom')}}" class="btn btn-warning btn-space" style="width:100%; color: red;">
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
                    <a href="{{ route('gallery.show', 'diningroom')}}" class="btn btn-warning btn-space" style="width:100%; color: red;">
                        DINING ROOM SECTION
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('gallery.show', 'varieties')}}" class="btn btn-warning" style="width:100%; color: red;">
                        VARIETIES SECTION
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('gallery.index')}}" class="btn btn-lg btn-block enter-btn-color" style="width:100%; margin: 5px 0; height:82px; font-size: xx-large">Deal of the Month</a>
                </div>            
            </div>

            <div class="row" style="margin-top: 32px">
                <div class="col-md-12 text-center">
                    <div class="col-md-8 offset-md-2">
                        <div class="cat-head">
                            <h1>Canada-wide Furniture Stores’ Deals</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ route('gallery.show', 'gta')}}" class="btn btn-danger" style="width:100%; margin: 5px;">GTA</a>   
                            <a href="{{ route('gallery.show', 'shouthwestern')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Southwestern Ontario</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('gallery.show', 'montreal')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Montreal & Quebec</a>   
                            <a href="{{ route('gallery.show', 'eastern')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Eastern Ontario</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('gallery.show', 'ottawa')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Ottawa</a>   
                            <a href="{{ route('gallery.show', 'northern')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Northern Ontario</a>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="row" style="margin-top: 32px">
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

            <div class="row" style="margin-top: 32px">
                <div class="col-md-12 text-center">
                    <div class="col-md-6 offset-md-3">
                        <div class="cat-head">
                            <h1>Bed section</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('gallery.show', 'allSizeBed')}}" class="btn btn-primary" style="width:100%; margin: 5px;"> All Sizes Beds only</a>   
                            <a href="{{ route('gallery.show', 'lowbudgetSets')}}" class="btn btn-primary" style="width:100%; margin: 5px;">Low Budget Sets</a>
                            <a href="{{ route('gallery.show', 'comfortbudgetSets')}}" class="btn btn-primary" style="width:100%; margin: 5px;">Comfort Budget Sets</a>   
                            <a href="{{ route('gallery.show', 'luxurybudgetSets')}}" class="btn btn-primary" style="width:100%; margin: 5px;">Luxury Budget  Sets</a>   
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('gallery.show', 'childrenyouthSets')}}" class="btn btn-primary" style="width:100%; margin: 5px;">Children/ Youth Sets</a>   
                            <a href="{{ route('gallery.show', 'bunkBeds')}}" class="btn btn-primary" style="width:100%; margin: 5px;">Bunk Beds</a>
                            <a href="{{ route('gallery.show', 'trundlbeds')}}" class="btn btn-primary" style="width:100%; margin: 5px;">Trundle/ Day beds</a>   
                            <a href="{{ route('gallery.show', 'headboards')}}" class="btn btn-primary" style="width:100%; margin: 5px;">Headboards & Frames</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 32px">
                <div class="col-md-12 text-center">
                    <div class="col-md-6 offset-md-3">
                        <div class="cat-head">
                            <h1>Mattress Section</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('gallery.show', 'economicmattress')}}" class="btn btn-warning" style="width:100%; margin: 5px;"> Economic Budget Mattress</a>   
                            <a href="{{ route('gallery.show', 'comfortmattress')}}" class="btn btn-warning" style="width:100%; margin: 5px;">Comfort Budget Mattress</a>                            
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('gallery.show', 'luxurymattress')}}" class="btn btn-warning" style="width:100%; margin: 5px;">Luxury Mattress</a>   
                            <a href="{{ route('gallery.show', 'pillowComforters')}}" class="btn btn-warning" style="width:100%; margin: 5px;">Pillows,Comforters, Bedsheets</a>                            
                        </div>
                        <div class="col-md-12">                            
                            <a href="{{ route('gallery.show', 'mattressprotectors')}}" class="btn btn-warning" style="width:100%; margin: 5px;">Mattress Protectors</a>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 32px">
                <div class="col-md-12 text-center">
                    <div class="col-md-6 offset-md-3">
                        <div class="cat-head">
                            <h1>Dining Section</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('gallery.show', 'smallDinettes')}}" class="btn btn-info" style="width:100%; margin: 5px;"> Small Dinettes</a>   
                            <a href="{{ route('gallery.show', 'mediumsize')}}" class="btn btn-info" style="width:100%; margin: 5px;">Medium Size Dining sets</a> 
                            <a href="{{ route('gallery.show', 'glasstopdining')}}" class="btn btn-info" style="width:100%; margin: 5px;"> Glass top Dining sets</a>   
                            <a href="{{ route('gallery.show', 'canadianmade')}}" class="btn btn-info" style="width:100%; margin: 5px;">Canadian Made sets</a>                                                       
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('gallery.show', 'luxurytraditional')}}" class="btn btn-info" style="width:100%; margin: 5px;">Luxury Traditional sets</a>   
                            <a href="{{ route('gallery.show', 'luxuryModern')}}" class="btn btn-info" style="width:100%; margin: 5px;">Luxury Modern Sets</a>                            
                            <a href="{{ route('gallery.show', 'pubheight')}}" class="btn btn-info" style="width:100%; margin: 5px;"> Pub height sets</a>   
                            <a href="{{ route('gallery.show', 'tablesonly')}}" class="btn btn-info" style="width:100%; margin: 5px;">Tables only</a>                            
                        </div>
                        <div class="col-md-4">                            
                            <a href="{{ route('gallery.show', 'chairsonly')}}" class="btn btn-info" style="width:100%; margin: 5px;">Chairs only</a>                                                        
                        </div>
                        <div class="col-md-4">                            
                            <a href="{{ route('gallery.show', 'curioservers')}}" class="btn btn-info" style="width:100%; margin: 5px;">Curio, Servers, Hutch Buffet</a>                                                                              
                        </div>
                        <div class="col-md-4">                            
                            <a href="{{ route('gallery.show', 'diningaccess')}}" class="btn btn-info" style="width:100%; margin: 5px;">Dining Accessories</a>                                                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 32px">
                <div class="col-md-12 text-center">
                    <div class="col-md-6 offset-md-3">
                        <div class="cat-head">
                            <h1>Varieties Section</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('gallery.show', 'armoirechest')}}" class="btn btn-danger" style="width:100%; margin: 5px;"> Armoire/Chest/Wardrobe</a>   
                            <a href="{{ route('gallery.show', 'ottomans')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Ottomans</a> 
                            <a href="{{ route('gallery.show', 'benches')}}" class="btn btn-danger" style="width:100%; margin: 5px;"> Benches</a>   
                            <a href="{{ route('gallery.show', 'bookshelves')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Bookshelves</a>                                                       
                            <a href="{{ route('gallery.show', 'studydesk')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Study desk</a> 
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('gallery.show', 'studycomputerchair')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Study/Computer chairs</a>   
                            <a href="{{ route('gallery.show', 'rockingchair')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Rocking chairs</a>                            
                            <a href="{{ route('gallery.show', 'accentchair')}}" class="btn btn-danger" style="width:100%; margin: 5px;"> Accent Chairs</a>   
                            <a href="{{ route('gallery.show', 'decorationAccessories')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Decoration Accessories</a>                            
                            <a href="{{ route('gallery.show', 'furntiturecare')}}" class="btn btn-danger" style="width:100%; margin: 5px;">Furniture Care products</a>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 32px">
                <div class="col-md-12 text-center">
                    <div class="col-md-6 offset-md-3">
                        <div class="cat-head">
                            <h1>Living Room Section</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ route('gallery.show', 'canadianfabric')}}" class="btn btn-success" style="width:100%; margin: 5px;"> Canadian Made Fabric Sets</a>   
                            <a href="{{ route('gallery.show', 'canadianleather')}}" class="btn btn-success" style="width:100%; margin: 5px;">Canadian Made Leather Sets</a> 
                            <a href="{{ route('gallery.show', 'sectionalsofa')}}" class="btn btn-success" style="width:100%; margin: 5px;"> Sectional Sofa Sets</a>   
                            <a href="{{ route('gallery.show', 'traditionalsofa')}}" class="btn btn-success" style="width:100%; margin: 5px;">Traditional Sofa Sets</a>                                                       
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('gallery.show', 'reclinersofa')}}" class="btn btn-success" style="width:100%; margin: 5px;">Recliner Sofa Sets</a>   
                            <a href="{{ route('gallery.show', 'modernsofa')}}" class="btn btn-success" style="width:100%; margin: 5px;">Modern Sofa Sets</a>                            
                            <a href="{{ route('gallery.show', 'sofafutonsklick')}}" class="btn btn-success" style="width:100%; margin: 5px;"> Sofa beds, Futons, Klick Klack</a>   
                            <a href="{{ route('gallery.show', 'coffeetables')}}" class="btn btn-success" style="width:100%; margin: 5px;">Coffee Tables</a>                            
                        </div>
                        <div class="col-md-4">                            
                            <a href="{{ route('gallery.show', 'consolehall')}}" class="btn btn-success" style="width:100%; margin: 5px;">Console/ Hall tables</a>                                                        
                            <a href="{{ route('gallery.show', 'tvstandsunits')}}" class="btn btn-success" style="width:100%; margin: 5px;">TV stands/ Entertainment Units</a>   
                            <a href="{{ route('gallery.show', 'rugsliving')}}" class="btn btn-success" style="width:100%; margin: 5px;">Rugs</a>   
                            <a href="{{ route('gallery.show', 'lampslightings')}}" class="btn btn-success" style="width:100%; margin: 5px;">Lamps/lightings</a>   
                        </div>
                        <div class="col-md-6">                            
                            <a href="{{ route('gallery.show', 'wallMirrors')}}" class="btn btn-success" style="width:100%; margin: 5px;">Wall Mirrors</a>                                                                              
                        </div>
                        <div class="col-md-6">                            
                            <a href="{{ route('gallery.show', 'pciturearts')}}" class="btn btn-success" style="width:100%; margin: 5px;">Picture/ Arts</a>                                                        
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('gallery.show', 'toronto')}}" class="btn btn-lg btn-block btn-info" style="width:100%; margin: 5px; color: yellow; height: 72px; font-size: xx-large;">TORONTO FURNITURE STORES' SPECIAL OFFERS</a>

            <div class="row" style="margin-top: 32px">
                <div class="col-md-12 text-center">
                    <div class="col-md-6 offset-md-3">
                        <div class="cat-head">
                            <h1>FurnitureFM.com Members Only</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="modal" data-target="#realtorModal" class="btn btn-lg btn-block btn-primary" style="width:100%; margin: 5px; color: white; height: 72px; font-size: xx-large;">Realtors Zone</a>
                            <a data-toggle="modal" data-target="#designerModal" class="btn btn-lg btn-block btn-secondary" style="width:100%; margin: 5px; color: white; height: 72px; font-size: xx-large;">Designers Zone</a>
                            <a data-toggle="modal" data-target="#agentModal" class="btn btn-lg btn-block purple-btn" style="width:100%; margin: 5px; color: white; height: 72px; font-size: xx-large;">Agents Zone</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 32px">
                <div class="col-md-12 text-center">
                    <div class="col-md-6 offset-md-3">
                        <div class="cat-head">
                            <h1>PQS Marketing</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="modal" data-target="#networkModal" class="btn btn-lg btn-block enter-btn-color" style="width:100%; margin: 5px; color: white; height: 72px; font-size: xx-large;">Whole Sellers Network</a>                            
                        </div>
                    </div>
                </div>
            </div>

            {{-- REALTORS ZONE MODAL --}}
            <div class="modal fade" id="realtorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('password.redirectPage')}}">
                            {{csrf_field()}}
                            <input type="hidden" value="realtor" name="category">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="checkPass" type="submit" class="btn btn-primary">Enter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- DESIGNERS ZONE MODAL --}}
            <div class="modal fade" id="designerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('password.redirectPage')}}">
                            {{csrf_field()}}
                            <input type="hidden" value="designer" name="category">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="checkPass" type="submit" class="btn btn-primary">Enter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- AGENTS ZONE MODAL --}}
            <div class="modal fade" id="agentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('password.redirectPage')}}">
                            {{csrf_field()}}
                            <input type="hidden" value="agent" name="category">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="checkPass" type="submit" class="btn btn-primary">Enter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- WHOLE SELLERS NETWORK MODAL --}}
            <div class="modal fade" id="networkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('password.redirectPage')}}">
                            {{csrf_field()}}
                            <input type="hidden" value="wholeseller" name="category">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="checkPass" type="submit" class="btn btn-primary">Enter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            

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
                                <img class="d-block mx-auto w-100" src="{{asset('assets/img/carousel/slide1.jpg')}}" alt="First slide" style="height: 400px; width:900px !important; margin: auto;">
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <a href="{{ route('gallery.show', 'gta')}}"><h5>GTA  Furniture Stores’ Special OFFERS </h5></a> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block mx-auto w-100" src="{{asset('assets/img/carousel/slide2.jpg')}}" alt="Second slide" style="height: 400px; width:900px !important; margin: auto;">
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <a href="{{ route('gallery.show', 'gta')}}"><h5>GTA  Furniture Stores’ Special OFFERS </h5></a> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block mx-auto w-100" src="{{asset('assets/img/carousel/slide3.jpg')}}" alt="Third slide" style="height: 400px; width:900px !important; margin: auto;">
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <a href="{{ route('gallery.show', 'gta')}}"><h5>GTA  Furniture Stores’ Special OFFERS </h5></a> -->
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="color:black"></span>
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

    {{-- <script>
        $(document).ready(function(){
            var pass = $("#passwordInput").val();
            $("#checkPass").click(function(){
                console.log(pass);
                window.location = "{{ url('/furniture-member') }}";
            });
        });
    </script> --}}

</body>

</html>