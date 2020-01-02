@extends('main')

@section('main')
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">UPDATE</h1>
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
      <form  method="post" action="{{ route('password.update')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="cat_name">category</label>
                <select class="form-control" id="category" name="category">
                    <option value="realtor">Realtors Zone</option>
                    <option value="designer">Designers Zone</option>
                    <option value="agent">Agents Zone</option>                
                    <option value="wholeseller">Whole Sellers Network</option>                
                </select>
            </div>            
            <input type="hidden" class="form-control" name="id" id="id" placeholder="Image Title" value={{ $data->id }}>
            <div class="form-group">
                <label for="title">Current Password</label>
                <input class="form-control" name="current_pass" id="current_pass" placeholder="Password" value={{ $data->password }} disabled>
            </div>
            <div class="form-group">
                <label for="title">New Password</label>
                <input class="form-control" name="password" id="password" placeholder="New Password" required>
            </div>
            <div class="form-group">
                <label for="title">Confirm Password</label>
                <input class="form-control" name="conf_password" id="conf_password" placeholder="Confirm Password" required>
            </div>

            <button type="submit" class="btn btn-primary-outline">Update Password</button>
      </form>
  </div>
</div>
</div>
@endsection