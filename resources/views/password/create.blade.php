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
      <form  method="post" action="{{ route('password.store') }}" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="form-group">
                <label for="cat_name">category</label>
                <select class="form-control" id="category" name="category">
                    <option value="realtor">Realtors Zone</option>
                    <option value="designer">Designers Zone</option>
                    <option value="agent">Agents Zone</option>                
                    <option value="wholeseller">Whole Sellers Network</option>                
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input class="form-control" name="conf_password" id="conf_password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary-outline">Add Password</button>
      </form>
  </div>
</div>
</div>
@endsection