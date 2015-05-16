<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
</head>
<body>
	<div class="container">
		<table class="table table-striped">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<th>Phone Number</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user )
			<tr>					 
					<td> {{ $user->fname }} </td>
					<td> {{$user->lname }} </td>
					<td> {{$user->email }}</td>
					<td> {{$user->pnumber }} </td>
					<td><a href="{{URL::route('edit-user', $user->id)}}" class="btn btn-primary">Edit</a></td>
					<td><a href="{{URL::route('delete-user',$user->id)}}" class="btn btn-danger">Delete </a></td>
			</tr>
			@endforeach

		</tbody>
			
		</table>
	</div>
</body>