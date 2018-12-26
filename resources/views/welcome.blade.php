@include('app')
@include('header')
<div class="container">
  <div class="row">
    <h3><b>Create Student:</b></h3>
    <form id="form" class="form-horizontal" action="{{url('/data_save')}}" method="POST">
        {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">Name:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">email:</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" id="email" placeholder="enter email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">Address:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="address" placeholder="enter address" name="address">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="email">Mobile:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="mobile" placeholder="enter mobile number" name="mobile">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Password:</label>
        <div class="col-sm-6"> 
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="pwd"> Confirm Password:</label>
        <div class="col-sm-6"> 
          <input type="password" class="form-control" id="c_pwd" placeholder="Enter password again" name="confirm_password">
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
