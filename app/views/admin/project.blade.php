@extends('layouts/master_admin')
@section('title')
New Project
@stop
@section('breadcrumb')
<li><a href="admin">Admin Panel</a></li>
<li class="active">New Project</li>
@stop
@section('project_menu')
active
@stop

@section('section2')
<h3 class="text-muted">Create Project </h3>
{{Form::open(array('route'=>'project.store','files' => true,'role'=>'form'))}}

<div class="form-group">
    <label for="pwd">  Title  </label>
    {{Form::text('title','',['class' => 'form-control'])}}{{$errors->first('title')}}
</div>
<div class="form-group">
    <label for="pwd">  Type  </label>
  {{ Form::select('type', $data,NULL,['class' => 'form-control']) }}{{$errors->first('type')}}
</div>
<div class="form-group">
    <label for="pwd">  Image </label>
     {{ Form::file('image',['class' => 'form-control']) }}{{$errors->first('image')}}
</div>
<div class="form-group">
    <label for="pwd">  Text </label>
    {{Form::textarea('text','',['class' => 'form-control'])}}{{$errors->first('text')}}
</div>


    {{Form::submit('send',['class' => 'btn btn-info'])}}
@stop


