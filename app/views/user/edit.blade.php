<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit</title>
{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
</head>
<body>
	<div class="container">

		{{Form::open(array('route'=>'update-user'))}}
		<div class="form-group">
				<label>First Name:</label>
				<input type="text" class="form-control" name="fname" value="{{$users->fname}}" id="first_name">
		</div>
		<div class="form-gruop">
				<label>Last Name:</label>
				<input type="text" class="form-control" name="lname" value="{{$users->lname}}" id="last_name">	
		</div>
		<div class="form-group">
			<label>Email Address:</label>
			<input type="email" class="form-control" name="email" value="{{$users->email}}" id="email">
		</div>
		<div class="form-group">
			<label>Phone Number</label>
			<input type="text" class="form-control" name="pnumber" value="{{$users->pnumber}}" id="phone_number">
		</div>
		<div class="form-group">
			<label>Password:</label>
			<input type="password" class="form-control" name="password" value="{{$users->password}}" id="password">
		</div>
		<div class="form-group">
			<label></label>
			<input type="hidden" name="id" value="{{$users->id}}">
		</div>
		<button type="submit" class="btn btn-primary">Edit</button>

		{{Form::close() }}
			

			</div>
		</form>
	</div>
</body>