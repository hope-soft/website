@extends('layouts/master_admin')
@section('Edit')
Edit Project
@stop
@section('breadcrumb')
<li><a href="/admin">Admin Panel</a></li>
<li class="active">Edit Project</li>
@stop
@section('section2')
<h1>Update</h1>
{{Form::open(array('route'=>['project.update',$data->id],'files' => true,'method' => 'put'))}}

<div class="form-group">
    <label for="pwd">  Title  </label>
    {{Form::text('title',$data->title,['class' => 'form-control'])}}{{$errors->first('title')}}<br><br>
</div>    
<div class="form-group">
    <label for="pwd">  Type  </label>

        {{ Form::select('type', $type,$data->type_id,['class' => 'form-control']) }}{{$errors->first('type')}}<br><br>
</div>        

<div class="form-group">
    <label for="pwd">  Image  </label>
     {{ Form::file('image',['class' => 'form-control']) }}{{$errors->first('image')}}<br>
 </div>
<div class="form-group">
    <label for="pwd">  Text  </label>
    {{Form::textarea('text',$data->text,['class' => 'form-control'])}}{{$errors->first('text')}}<br>
</div>   
<div class="form-group"> 

    {{Form::submit('send',['class' => 'btn btn-info'])}}

{{Form::close()}}
</div>


{{Form::open(array('route'=>['project.destroy',$data->id],'method' => 'delete'))}}
    {{Form::submit('DELETE',['class' => 'btn btn-info'])}}
{{Form::close()}}
@stop