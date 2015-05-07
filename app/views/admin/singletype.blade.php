@extends('layouts/master_admin')
@section('title')
Edit Type
@stop
@section('breadcrumb')
<li><a href="/admin">Admin Panel</a></li>
<li class="active">Edit Type</li>
@stop

@section('section2')
<h1>Single Project </h1>
{{Form::open(array('route'=>['type.update',$data->id],'files' => true,'method' => 'put'))}}

<div class="form-group">
    <label for="pwd">  Name </label>
    {{Form::text('name',$data->name,['class' => 'form-control'])}}{{$errors->first('name')}}<br><br>
 

    {{Form::submit('send',['class' => 'btn btn-info'])}}
  </div>    

{{Form::close()}}

{{Form::open(array('route'=>['type.destroy',$data->id],'method' => 'delete'))}}
    {{Form::submit('DELETE',['class' => 'btn btn-info'])}}
{{Form::close()}}
@stop