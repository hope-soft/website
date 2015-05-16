<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up</title>
{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="Validate.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#user_form').validate({
			rules: {
				  fname: {
				  	required: true,
				  	minlength:4,
				  	maxlength:15
				  },
				  lname: {
				  	required: true,
				  	minlength: 4,
				  	maxlength:15
				  },
				  email1: {
				  	required: true,
				  	email:true
				  },
				  email2: {
				  	required:true,
				  	email:true,
				  	equalTo:"#email1"
				  }
				  password1:{
				  	required: true,
				  	minlength:8,
				  	maxlength:30
				  }
				  password2: {
				  	required:true,
				  	equalTo: "#password1"
				  }
			}

		});
	});

</script>
</head>
<body>
	<div class="container">
		{{Form::open(array('route'=>'new-user','name'=>'user_form','id'=>'user_form'))}}
		<div class="form-group col-xs-12 col-md-7">
			<label>First Name:</label>
			<input type="text" class="form-control" name="fname" value="" placeholder="Enter Your First Name">
		</div>
		<div class="form-group col-xs-12 col-md-7">
			<label>Last Name:</label>
			<input type="text" class="form-control" name="lname" value="" placeholder="Enter Your Last Name">
		</div>
		<div class="form-group col-xs-12 col-md-7">
			<label>Email:</label>
			<input type="email" class="form-control" name="email1" value="" placeholder="Enter Your Email Address">
		</div>
		<div class="form-group col-xs-12 col-md-7">
			<label>Confirm Email:</label>
			<input type="email" class="form-control" name="email2" value="" placeholder="Please Confirm Your Email Address ">
		</div>
		<div class="form-group col-xs-12 col-md-7">
			<label>Phone Number:</label>
			<input type="text" class="form-control" name="pnumber" value="" placeholder="Enter Your Phone Number">
		</div>
		<div class="form-group col-xs-12 col-md-7">
			<label>Password:</label>
			<input type="password" class="form-control" name="password1" value="" placeholder="Enter Your Password">
		</div>
		<div class="form-group col-xs-12 col-md-7">
			<label>Confirm Password:</label>
			<input type="password" class="form-control" name="password2" value="" placeholder="Please Confirm Your Password">
		</div>
		<div class="form-group col-xs-12 col-md-7">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		{{Form::close() }}
	</div>
</body>