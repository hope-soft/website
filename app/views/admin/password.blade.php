@extends('layouts/master_admin')
@section('title')
Password
@stop
@section('breadcrumb')
<li><a href="admin">Admin Panel</a></li>
<li class="active">Change Password</li>
@stop
@section('password_menu')
active
@stop

@section('section2')
<h3 class="text-muted">Change Password </h3>
{{Form::open(array('route'=>'adminPanel.store','role'=>'form'))}}
<div class="form-group">
    <label for="pwd">New Password:</label>
    {{Form::password('password',['class' => 'form-control'])}}{{$errors->first('password')}}<br>
</div>
<div class="form-group">
    <label for="pwd">Re-Type Password:</label>
   {{Form::password('rpassword',['class' => 'form-control'])}}{{$errors->first('rpassword')}}
</div>
 {{Form::submit('Change',['class' => 'btn btn-info'])}}


{{Form::close()}}
@stop