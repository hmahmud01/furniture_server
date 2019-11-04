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
      <form  method="post" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
           {{csrf_field()}}
            <div class="form-group">
                <label for="cat_name">category</label>
                <select class="form-control" id="cat_name" name="cat_name">
                    <option value="catval1">cat1</option>
                    <option value="catval2">cat2</option>
                    <option value="catval3">cat3</option>                
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image" placeholder="Images">
            </div> --}}
            <div class="form-group">
                 <input  type="file" class="form-control" name="images[]" placeholder="Upload" multiple >
            </div>
            <button type="submit" class="btn btn-primary-outline">Add to gallery</button>
      </form>
  </div>
</div>
</div>
@endsection