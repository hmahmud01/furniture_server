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
                    <option value="toronto">toronto</option> 
                    <option value="gta">GTA  Furniture Stores’ Special OFFERS</option> 
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