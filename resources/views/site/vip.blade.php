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
            <div class="row" style="margin-top: 32px">
                <div class="col-md-12 text-center">
                    <div class="col-md-6 offset-md-3">
                        <div class="cat-head">
                            <h1>FurnitureFM.com Members Only</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('gallery.show', 'toronto')}}" class="btn btn-lg btn-block btn-success" style="width:100%; margin: 5px; color: white; height: 72px; font-size: xx-large;">Bedroom Section </a>
                            <a href="{{ route('gallery.show', 'toronto')}}" class="btn btn-lg btn-block btn-info" style="width:100%; margin: 5px; color: white; height: 72px; font-size: xx-large;">Dining Room Section </a>
                            <a href="{{ route('gallery.show', 'toronto')}}" class="btn btn-lg btn-block purple-btn" style="width:100%; margin: 5px; color: white; height: 72px; font-size: xx-large;">Living Room section</a>
                            <a href="{{ route('gallery.show', 'toronto')}}" class="btn btn-lg btn-block btn-primary" style="width:100%; margin: 5px; color: white; height: 72px; font-size: xx-large;">Decoration Sections </a>
                            <a href="{{ route('gallery.show', 'toronto')}}" class="btn btn-lg btn-block btn-warning" style="width:100%; margin: 5px; color: white; height: 72px; font-size: xx-large;">Varieties </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <script src="{{ asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>

</body>

</html>