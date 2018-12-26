@include('app')
@include('header')
<div class="container">
  <div class="row">
    <h3><b>Edit Student Details:</b></h3>
    <form id="form" class="form-horizontal" action="{{url('/update_student_details')}}/{{$data->id}}" method="POST">
        {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">Name:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$data->name}}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">email:</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" id="email" placeholder="enter email" name="email" value="{{$data->email}}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">Address:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="address" placeholder="enter address" name="address" value="{{$data->address}}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">Mobile:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="mobile" placeholder="enter mobile number" name="mobile" value="{{$data->mobile}}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Password:</label>
        <div class="col-sm-6"> 
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" value="{{$data->sspassword}}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="pwd"> Confirm Password:</label>
        <div class="col-sm-6"> 
          <input type="password" class="form-control" id="c_pwd" placeholder="Enter password again" name="confirm_password" value="{{$data->confirm_password}}">
        </div>
      </div>
      <div class="form-group"> 
        <div class="col-sm-offset-4 col-sm-10">
          <button id="button" type="submit" class="btn btn-success">Submit</button >
        </div>
      </div>
    </form>
  </div>
</div>