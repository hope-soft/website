<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign-Up</title>
{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
</head>
<body>
<div class="container">
 {{ Form::open(array('route' => array('newUser-post'))) }} 
<div class="form-group">
<label>First Name:</label>
<input type="text" name="fname" id="f-name" class="form-control" placeholder="Enter Your First name" value="">
</div>
<div class="form-group">
<label>Last Name:</label>
<input type="text" name="lname" id="l-name" class="form-control" placeholder="Enter Your Last name" value="">
</div>
<div class="form-group">
<label>Email:</label>
<input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email" value="">
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Sign Up</button>	
</div>
{{Form::close()}}	
</div>
</body>