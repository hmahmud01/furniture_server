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

    <!-- Core Style CSS -->.
    <link rel="stylesheet" href="{{asset('assets/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    {{-- <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css"> --}}

</head>

<body>

    <section id="intro" style="padding:10px;">
        <div class="intro-text">
        <h1>Welcome To</h1>
        
        <div class="row">
                <div class="col-md-4">
                    <div class="khet">
                        <h4 class="khet-2">Deals & Savings</h4>
                        <h4 class="khet-2">Delivery & Setup</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="{{url('/')}}"><img class="logoBorder" src="{{asset('assets/img/home/logo.png')}}" alt="Furniture FM logo" /></a>
                    <h3>An Online Furniture DISCOUNT Library</h3>
                    <h4 class="khet-2">100+ Furniture Dealers</h4>                     
                    <a href="{{ url('/categories') }}" class="btn btn-dark btn-circle btn-xl" style="margin:18px 0;">
                        <p class="btn-text">ENTER</p>
                    </a>
                    <h4 class="khet-2">Lowest Price With Maximum Benefits</h4>
                    <a href="{{ url('/about-us') }}" class="btn btn-info" style="margin:18px 0;">
                        About Us
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="khet">
                        <h4 class="khet-2">All Major Brands</h4>
                        <h4 class="khet-2">Negotiation Assistance</h4>                        
                    </div>
                </div>
            </div>
        </div>  
    </section><!-- #intro -->


    {{-- <script src="js/jquery/jquery-2.2.4.min.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>

    <script src="js/active.js"></script> --}}

    <script src="{{ asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>

</body>

</html>