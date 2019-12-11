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
              <div class="col-md-9">
                <h3>All Furnitures</h3>
              </div>
              <div class="col-md-3">
                <div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button>
                    <button class="clear-cart btn btn-danger">Clear Cart</button>
                </div>
              </div>
                <p>
                  <img style="height:16px" src="{{asset('assets/img/home/logo.png')}}" alt="Furniture FM logo" /> Coupon Flyer Deals are mostly designed with actual floor samples photos available at the stores and the  similar warehouse stocks . Please always check  products availability before going to the stores by using coupons Code ( mentioned with the store name ). Sometimes stores offer great instant discounts for serious buyers only . Present <img style="height:16px" src="{{asset('assets/img/home/logo.png')}}" alt="Furniture FM logo" /> coupons photos or codes once the product are determined to buy. <img style="height:16px" src="{{asset('assets/img/home/logo.png')}}" alt="Furniture FM logo" /> also offers special buying assistant service for large buying , complete house package , special items, brand products in order to save more money, proper products suggestions and pre negotiations with multiple stores for 1% service fee of total purchase amount .Our basic assistant service  "Connecting with the stores " is free basic consulting service via email only at  ➡️" helpfurniturefm@gmail.com" .
                </p>
            </div>
            <div class="row">
                @foreach($images as $image)
                    <div class="col-md-3">
                        <div class="card" style="margin: 10px 0;">
                            <a href="{{ asset($image->image) }}"><img src="{{ asset($image->image) }}" class="card-img-top" style="height: 240px;"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{$image->title}}</h5>
                                <p>{{$image->cat_name}}</p>
                                <a href="#" data-name="{{$image->title}}" data-price="0.5" data-img="{{ asset($image->image) }}" class="add-to-cart btn btn-primary">Add to List</a>
                            </div>
                        </div>
                    </div> 
                @endforeach     
            </div>
        </div>
    </section><!-- #intro -->

     <!-- Modal -->
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
          <button type="button" class="btn btn-primary">Review now</button>
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