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
                    <h3>
                        @if ($data['name'] === "bedroom")
                            Bedroom Section
                        @elseif ($data['name'] === "diningroom")
                            Dining Room Section
                        @elseif ($data['name'] === "livingroom")
                            Living Room Section
                        @elseif ($data['name'] === "varieties")
                            Varieties Section
                        @elseif ($data['name'] === "gta")
                            GTA
                        @elseif ($data['name'] === "shouthwestern")
                            Southwestern Ontario
                        @elseif ($data['name'] === "montreal")                        
                            Montreal & Quebec
                        @elseif ($data['name'] === "eastern")
                            Eastern Ontario
                        @elseif ($data['name'] === "ottawa")
                            Ottawa
                        @elseif ($data['name'] === "northern")
                            Northern Ontario
                        @elseif ($data['name'] === "bed")
                            Bed Section
                        @elseif ($data['name'] === "sofa")
                            Sofa Section
                        @elseif ($data['name'] === "dining")
                            Dining Sets
                        @elseif ($data['name'] === "mattress")
                            Mattress
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
                            Buffets & Servers
                        @elseif ($data['name'] === "varieties")
                            Varieties
                        {{-- Bed Section  --}}
                        @elseif ($data['name'] === "allSizeBed")
                            All sizes bed
                        @elseif ($data['name'] === "lowbudgetSets")
                            Low Budget Sets
                        @elseif ($data['name'] === "comfortbudgetSets")
                            Comfort Budget Sets
                        @elseif ($data['name'] === "luxurybudgetSets")
                            Luxury Budget Sets
                        @elseif ($data['name'] === "childrenyouthSets")
                            Children/ youth Sets
                        @elseif ($data['name'] === "bunkBeds")
                            Bunk Beds
                        @elseif ($data['name'] === "trundlbeds")
                            Trundle/Day Beds
                        @elseif ($data['name'] === "headboards")
                            Headboards & Frames
                        {{-- Mattress Section to be include --}}
                        @elseif ($data['name'] === "economicmattress")
                            Economic Budget Mattress
                        @elseif ($data['name'] === "comfortmattress")
                            Comfort Budget Mattress
                        @elseif ($data['name'] === "luxurymattress")
                            Luxury Mattress
                        @elseif ($data['name'] === "pillowComforters")
                            Pillow, Comforters, Bedsheets
                        @elseif ($data['name'] === "mattressprotectors")
                            Mattress Protectors
                        {{-- Dining Section to be include --}}
                        @elseif ($data['name'] === "smallDinettes")
                            Small Dinettes
                        @elseif ($data['name'] === "mediumsize")
                            Medium Size Dining sets
                        @elseif ($data['name'] === "glasstopdining")
                            Glass top Dining Sets
                        @elseif ($data['name'] === "canadianmade")
                            Canadian Made Sets
                        @elseif ($data['name'] === "luxurytraditional")
                            Luxury Traditional Sets
                        @elseif ($data['name'] === "luxuryModern")
                            Luxury Modern Sets
                        @elseif ($data['name'] === "pubheight")
                            Pub Height Sets
                        @elseif ($data['name'] === "tablesonly")
                            Tables Only
                        @elseif ($data['name'] === "chairsonly")
                            Chairs Only
                        @elseif ($data['name'] === "curioservers")
                            Curio, Servers, Hutch Buffet
                        @elseif ($data['name'] === "diningaccess")
                            Dining Accessories
                        {{-- varieties section to be include --}}
                        @elseif ($data['name'] === "armoirechest")
                            Armoire/chest/Wardrobe
                        @elseif ($data['name'] === "ottomans")
                            Ottomans
                        @elseif ($data['name'] === "benches")
                            Benches
                        @elseif ($data['name'] === "bookshelves")
                            BookShelves
                        @elseif ($data['name'] === "studydesk")
                            Study desk
                        @elseif ($data['name'] === "studycomputerchair")
                            Study/Computer chairs
                        @elseif ($data['name'] === "rockingchair")
                            Rocking chairs
                        @elseif ($data['name'] === "accentchair")
                            Accent chairs
                        @elseif ($data['name'] === "decorationAccessories")
                            Decoration Accessories
                        @elseif ($data['name'] === "furntiturecare")
                            Furniture Care Products
                        {{-- Living Romm Section to be incldue --}}
                        @elseif ($data['name'] === "canadianfabric")
                            Canadian Made Fabric Sets
                        @elseif ($data['name'] === "canadianleather")
                            Canadian Made Leather Sets
                        @elseif ($data['name'] === "sectionalsofa")
                            Sectional Sofa Sets
                        @elseif ($data['name'] === "traditionalsofa")
                            Tradiational Sofa Sets
                        @elseif ($data['name'] === "reclinersofa")
                            Recliner Sofa Sets
                        @elseif ($data['name'] === "modernsofa")
                            Modern Sofa Sets
                        @elseif ($data['name'] === "sofafutonsklick")
                            Sofa Beds, Futons, Klick Klick
                        @elseif ($data['name'] === "coffeetables")
                            Coffee Tables
                        @elseif ($data['name'] === "consolehall")
                            Console/Hall Tables
                        @elseif ($data['name'] === "tvstandsunits")
                            TV stands/ Entertainment Units
                        @elseif ($data['name'] === "rugsliving")
                            Rugs(Living Section)
                        @elseif ($data['name'] === "lampslightings")
                            Lamps/lightings
                        @elseif ($data['name'] === "wallMirrors")
                            Wall Mirrors
                        @elseif ($data['name'] === "pciturearts")
                            Pictures/Arts
                        @elseif ($data['name'] === "toronto")
                            Toronto Furniture Stores Special Offers
                        {{-- VIP Section --}}
                        @elseif ($data['name'] === "bedroomSection")
                            Bedroom Section
                        @elseif ($data['name'] === "dinigroomSection")
                            Dining Room Section
                        @elseif ($data['name'] === "livingroomSection")
                            Living Room Section
                        @elseif ($data['name'] === "decorationSection")
                            Decoration Section
                        @elseif ($data['name'] === "varietiesSection")
                            Varieties
                        @else
                            All Products
                        @endif
                    </h3>
                </div>
                <div class="col-md-3">
                    <div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button>
                        <button class="clear-cart btn btn-danger">Clear Cart</button>
                    </div>
                </div>                
                <p>
                    <img style="height:16px" src="{{asset('assets/img/home/logo.png')}}" alt="Furniture FM logo" /> Coupon Flyer Deals are mostly designed with actual photographs of products available at the stores in addition to similar products available at the warehouses. Always check product availability before going to a store by using Coupon CODE (mentioned under the Store’s name). Present <img style="height:16px" src="{{asset('assets/img/home/logo.png')}}" alt="Furniture FM logo" /> Coupon or Coupon CODE once the products are chosen for purchase. <img style="height:16px" src="{{asset('assets/img/home/logo.png')}}" alt="Furniture FM logo" /> also offers special buying assistant services for large buying, complete house furnishing packages, special items, brand products in order to save more, proper product suggestions and pre negotiations with multiple stores for 1% service fee of total purchase amount. Our basic assistant service "Connecting with the Stores" is a free basic consultation service via email only at ➡️"helpfurniturefm@gmail.com"
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