@extends('layouts/master_admin')
@section('title')
New Type
@stop
@section('breadcrumb')
<li><a href="admin">Admin Panel</a></li>
<li class="active">New Role</li>
@stop
@section('role_menu')
active
@stop
@section('section2')

<h3 class="text-muted">Create role </h3>

{{Form::open(array('route'=>'role.store','role'=>'form'))}}

<div class="form-group">
    <label for="pwd">  Name </label>
    {{Form::text('name','',['class' => 'form-control'])}}{{$errors->first('name')}}
</div>
    {{Form::submit('Create',['class' => 'btn btn-info'])}}

{{Form::close()}}
@stop