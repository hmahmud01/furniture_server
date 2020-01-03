@extends('main')

@section('main')
<div class="row">
<div class="col-sm-12">
  <div>
    <a style="margin: 19px;" href="{{ route('password.create')}}" class="btn btn-primary">Create Password</a>
  </div>  
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @elsecan(session()->get('error'))
    <div class="alert alert-error">
      {{ session()->get('error') }}  
    </div>
  @endcan
</div>
<div class="col-sm-12">
    <h1 class="display-3">Passwords</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Category Name</td>
          <td>password</td>
          <td>EDIT</td>
          <td>REMOVE</td>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $data)
        <tr>
            <td>{{$data->category}}</td>            
            <td>{{$data->password}}</td>
            <td>
                {{-- <a href="{{ route('gallery.edit', $image->id)}}" class="btn btn-primary">Edit</a> --}}
                <a href="{{ route('password.edit', $data->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
              <form action="{{ route('password.destroy', $data->id)}}" method="post">
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