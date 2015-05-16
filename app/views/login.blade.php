<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log-in</title>
{{ HTML::style('bootstrap/css/bootstrap.min.css') }}

{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
</head>

<body>
<div class="container">
  <div class="container-fluid">
  
    <div class="row">
      <div class="col-md-4"></div>

      <div class="col-md-4">
        {{Form::open(array('route'=>'home.'))}}
        <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name ="uname" value="" placeholder="User Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password" value="" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
      <a href="{{URL::route('user')}}" class="btn btn-default">Sign Up</a>
    </div>
  </div>
</form>
        {{Form::close()}}

      </div>
      <div class="col-md-4"></div>


    </div>
</div>
</div>

</body>
</html>



