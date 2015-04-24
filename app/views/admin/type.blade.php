@extends('layouts/master_admin')
@section('breadcrumb')
<li><a href="admin">Admin Panel</a></li>
<li class="active">New Type</li>
@stop
@section('type_menu')
active
@stop
@section('section2')

<h3 class="text-muted">Create Type </h3>

{{Form::open(array('route'=>'type.store','role'=>'form'))}}

<div class="form-group">
    <label for="pwd">  Name </label>
    {{Form::text('name','',['class' => 'form-control'])}}{{$errors->first('name')}}
</div>
    {{Form::submit('Create',['class' => 'btn btn-info'])}}

{{Form::close()}}
@stop