@extends('main')

@section('main')
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add to Gallery</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form  method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="form-group">
                <label for="cat_name">category</label>
                <select class="form-control" id="cat_name" name="cat_name">
                    <option value="bedroom">bedroom</option>
                    <option value="diningroom">diningroom</option>
                    <option value="livingroom">livingroom</option>                
                    <option value="varieties">varieties</option>      
                    {{-- canada wide furniture sotres deals to be enlist in category page --}}
                    <option value="gta">GTA</option>
                    <option value="shouthwestern">Southwestern Ontario</option>
                    <option value="montreal">Montreal & Quebec</option>
                    <option value="eastern">Eastern Ontario</option>
                    <option value="ottawa">Ottawa</option>
                    <option value="northern">Northern Ontario</option>
                    {{-- end options --}}
                    <option value="bed">bed</option>   
                    <option value="sofa">sofa</option>   
                    <option value="dining">dining</option>   
                    <option value="mattress">mattress</option>   
                    <option value="bedonly">bedonly</option>   
                    <option value="coffee">coffee</option>   
                    <option value="chairs">chairs</option>   
                    <option value="lamps">lamps</option>  
                    <option value="children">children</option>  
                    <option value="tv">tv</option>  
                    <option value="tables">tables</option>  
                    <option value="decorations">decorations</option>  
                    <option value="pictures">pictures</option> 
                    <option value="rugs">rugs</option> 
                    <option value="buffets">buffets</option> 
                    <option value="varieties">varieties</option>                     
                    {{-- Bed Section to be include --}}                    
                    <option value="allSizeBed">All sizes bed</option> 
                    <option value="lowbudgetSets">Low Budget Sets</option> 
                    <option value="comfortbudgetSets">Comfort Budget Sets</option> 
                    <option value="luxurybudgetSets">Luxury Budget Sets</option> 
                    <option value="childrenyouthSets">Children/ youth Sets</option> 
                    <option value="bunkBeds">Bunk Beds</option> 
                    <option value="trundlbeds">Trundle/Day Beds</option> 
                    <option value="headboards">Headboards & Frames</option> 
                    {{-- Mattress Section to be include --}}
                    <option value="economicmattress">Economic Budget Mattress</option> 
                    <option value="comfortmattress">Comfort Budget Mattress</option> 
                    <option value="luxurymattress">Luxury Mattress</option> 
                    <option value="pillowComforters">Pillow, Comforters, Bedsheets</option> 
                    <option value="mattressprotectors">Mattress Protectors</option> 
                    {{-- Dining Section to be include --}}
                    <option value="smallDinettes">Small Dinettes</option> 
                    <option value="mediumsize">Medium Size Dining sets</option> 
                    <option value="glasstopdining">Glass top Dining Sets</option> 
                    <option value="canadianmade">Canadian Made Sets</option> 
                    <option value="luxurytraditional">Luxury Traditional Sets</option> 
                    <option value="luxuryModern">Luxury Modern Sets</option> 
                    <option value="pubheight">Pub Height Sets</option> 
                    <option value="tablesonly">Tables Only</option> 
                    <option value="chairsonly">Chairs Only</option> 
                    <option value="curioservers">Curio, Servers, Hutch Buffet</option> 
                    <option value="diningaccess">Dining Accessories</option> 
                    {{-- varieties section to be include --}}
                    <option value="armoirechest">Armoire/chest/Wardrobe</option> 
                    <option value="ottomans">Ottomans</option> 
                    <option value="benches">Benches</option> 
                    <option value="bookshelves">BookShelves</option> 
                    <option value="studydesk">Study desk</option> 
                    <option value="studycomputerchair">Study/Computer chairs</option> 
                    <option value="rockingchair">Rocking chairs</option> 
                    <option value="accentchair">Accent chairs</option> 
                    <option value="decorationAccessories">Decoration Accessories</option> 
                    <option value="furntiturecare">Furniture Care Products</option> 
                    {{-- Living Romm Section to be incldue --}}
                    <option value="canadianfabric">Canadian Made Fabric Sets</option> 
                    <option value="canadianleather">Canadian Made Leather Sets</option> 
                    <option value="sectionalsofa">Sectional Sofa Sets</option> 
                    <option value="traditionalsofa">Tradiational Sofa Sets</option> 
                    <option value="reclinersofa">Recliner Sofa Sets</option> 
                    <option value="modernsofa">Modern Sofa Sets</option> 
                    <option value="sofafutonsklick">Sofa Beds, Futons, Klick Klick</option> 
                    <option value="coffeetables">Coffee Tables</option> 
                    <option value="consolehall">Console/Hall Tables</option> 
                    <option value="tvstandsunits">TV stands/ Entertainment Units</option> 
                    <option value="rugsliving">Rugs(Living Section)</option> 
                    <option value="lampslightings">Lamps/lightings</option> 
                    <option value="wallMirrors">Wall Mirrors</option> 
                    <option value="pciturearts">Pictures/Arts</option> 

                    <option value="toronto">toronto</option>
                    {{-- VIP Section --}}
                    <option value="bedroomSection">Bedroom Section</option>
                    <option value="dinigroomSection">Dining Room Section</option>
                    <option value="livingroomSection">Living Room Section</option>
                    <option value="decorationSection">Decoration Section</option>
                    <option value="varietiesSection">Varieties</option>                    
                </select>
            </div>
            <div class="form-group">
                <label for="title">Image Title</label>
                <input class="form-control" name="title" id="title" placeholder="Image Title" required>
            </div>
            <div class="form-group">
                <input  type="file" class="form-control" name="images[]" placeholder="Upload" multiple >
            </div>

            <button type="submit" class="btn btn-primary-outline">Add to gallery</button>
      </form>
  </div>
</div>
</div>
@endsection