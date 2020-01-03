@extends('main')

@section('main')
<div class="row">
<div class="col-sm-12">
    <div>
        <a style="margin: 19px;" href="{{ route('gallery.create')}}" class="btn btn-primary">Add Furniture</a>        
    </div>  

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
    <h1 class="display-3">Images</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Category Name</td>
          <td>Image</td>
          <td>Title</td>
          <td>EDIT</td>
          <td>REMOVE</td>
        </tr>
    </thead>
    <tbody>
        @foreach($images as $image)
        <tr>
            <td>{{$image->cat_name}}</td>
            <td><img style="height:64px; width:64px;" src="{{ asset($image->image) }}" /></td>
            <td>{{$image->title}}</td>
            <td>
                <a href="{{ route('gallery.edit', $image->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>                
                <form action="{{ route('admin.destroy', $image->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection