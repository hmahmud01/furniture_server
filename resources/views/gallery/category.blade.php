@extends('main')

@section('main')
<div class="row">
<div class="col-sm-12">
    <div>
        <a style="margin: 19px;" href="{{ route('gallery.create')}}" class="btn btn-primary">New contact</a>
    </div>  

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
<h1 class="display-3">Images For {{ $data['name'] }}</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Category Name</td>
          <td>Image</td>
          <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data['images'] as $image)
        <tr>
            <td>{{$image->cat_name}}</td>
            {{-- <td>{{$image->image}} </td> --}}
            <td><img style="height:64px; width:64px;" src="{{ asset($image->image) }}" /></td>
            <td>
                <form action="{{ route('gallery.destroy', $image->id)}}" method="post">
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