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

</head>

<body style="background-color:#f0f05f;">

    <section id="gallery">
        <div class="container">
            <div class="row gallery-content">
                <h3>
                    @if ($data['name'] === "bedroom")
                        Bedroom Section
                    @elseif ($data['name'] === "diningroom")
                        Dining Room Section
                    @elseif ($data['name'] === "livingroom")
                        Living Room Section
                    @elseif ($data['name'] === "varieties")
                        Varieties Section
                    @elseif ($data['name'] === "bed")
                        Bed Section
                    @elseif ($data['name'] === "sofa")
                        Sofa Section
                    @elseif ($data['name'] === "dining")
                        Dining Sets
                    @elseif ($data['name'] === "mattress")
                        Matteress
                    @elseif ($data['name'] === "bedonly")
                        Bed Only All Size
                    @elseif ($data['name'] === "coffee")
                        Coffee Tables
                    @elseif ($data['name'] === "chairs")
                        Chairs Only
                    @elseif ($data['name'] === "lamps")
                        Lamps
                    @elseif ($data['name'] === "children")
                        Children Section
                    @elseif ($data['name'] === "tv")
                        TV Stands
                    @elseif ($data['name'] === "tables")
                        Tables Only
                    @elseif ($data['name'] === "decorations")
                        Decorations
                    @elseif ($data['name'] === "pictures")
                        Pictures
                    @elseif ($data['name'] === "rugs")
                        Rugs
                    @elseif ($data['name'] === "buffets")
                        Buffets && Servers
                    @elseif ($data['name'] === "varieties")
                        Varieties
                    @elseif ($data['name'] === "toronto")
                        Toronto Furniture Stores Special Offers
                    @elseif ($data['name'] === "gta")
                        GTA  Furniture Stores’ Special OFFERS
                    @else
                        All Products
                    @endif
                </h3>
                <div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button>
                    <button class="clear-cart btn btn-danger">Clear Cart</button>
                </div>
                <p>
                    A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options. If you’re familiar with Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those components is available as modifier classes for cards.
                </p>
            </div>
            <div class="row">
                @foreach($data['images'] as $image)
                <div class="col-md-3">
                    <div class="card">
                        <a href="{{ asset($image->image) }}"><img src="{{ asset($image->image) }}" class="card-img-top" style="height: 240px;"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{$image->cat_name}}</h5>
                            <a href="#" data-name="{{$image->title}}" data-price="0.5" data-img="{{ asset($image->image) }}" class="add-to-cart btn btn-primary">Add to List</a>
                        </div>
                    </div>
                </div>  
                @endforeach     
            </div>
        </div>
    </section><!-- #intro -->

    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="show-cart table">
                
              </table>
              <!-- <div>Total price: $<span class="total-cart"></span></div> -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Order now</button>
            </div>
          </div>
        </div>
      </div>

    <script src="{{ asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>
    <script src="{{ asset('assets/js/scriptfm.js') }}"></script>

</body>

</html>