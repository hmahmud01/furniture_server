@extends('main')

@section('main')
<div class="row">
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
    <h1 class="display-3">Passwords</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Category Name</td>
          <td>password</td>
          <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $data)
        <tr>
            <td>{{$data->category}}</td>            
            <td>{{$data->password}}</td>
            <td>
                {{-- <a href="{{ route('gallery.edit', $image->id)}}" class="btn btn-primary">Edit</a> --}}
                <a href="#" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection