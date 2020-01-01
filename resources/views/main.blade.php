<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
     integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <title>Upload Panel For Furniture FM Website</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
        <div class="container">
            <a class="navbar-brand" href="/">Furniture FM</a>            
            <a class="navbar-brand" href="{{ route('password.index')}}">Passwords</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main role="main" class="container">

    <div class="container">
        @yield('main')
        {{-- <form>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" placeholder="Enter Category">                
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" placeholder="images">
            </div>
            Select images: <input type="file" name="img" multiple>
            <button class="btn btn-primary" onclick="">submit</button>
        </form> --}}
    </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-analytics.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-database.js"></script>

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyCOGg_qRPgbPc8TQbvxfQ2QnSm_aE0Rhcc",
            authDomain: "furniture-1bf8b.firebaseapp.com",
            databaseURL: "https://furniture-1bf8b.firebaseio.com",
            projectId: "furniture-1bf8b",
            storageBucket: "furniture-1bf8b.appspot.com",
            messagingSenderId: "295830917040",
            appId: "1:295830917040:web:eb1b38416c6222eb555075",
            measurementId: "G-ZX0C198MJQ"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
        // Get a reference to the database service
        var database = firebase.database();
        console.log(database);

        // gettinge user

        // userwritting function
        function writeUserData(cat, images) {
            firebase.database().ref('users/' + cat).set({
                category: cat,
                iamges: images
            }, function(error) {
                if (error) {    
                    console.log("data not went");
                } else {
                    console.log("data saved");
                }
            });
        }

    </script>
</body>
</html>