<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
</head>
<body>
<div class="container">
	{{ Form::open(array('route'=>'login'))}}
	<div class="form-group col-xs-12 col-md-7">
		<label>Email:</label>
		<input type="email" name="email" value="" class="form-control" placeholder="Enter Your Email Address">
	</div>
	<div class="form-group col-xs-12 col-md-7">
		<label>Password</label>
		<input type="password" name="password" value="" class="form-control" placeholder="Enter Your Password">
	</div>
	<div class="form-group col-xs-12 col-md-7">
		<button type="submit" class="btn btn-primary">Login</button>
		<a href="{{URL::route('new-user')}}" class="btn btn-primary">Sign up</a>
	</div>

	{{Form::close() }}
</div>
</body>