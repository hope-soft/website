<h1>Single Project </h1>
{{Form::open(array('route'=>['type.update',$data->id],'files' => true,'method' => 'put'))}}

    Name :
    {{Form::text('name',$data->name)}}{{$errors->first('name')}}<br><br>


    {{Form::submit('send')}}

{{Form::close()}}
{{Form::close()}}
{{Form::open(array('route'=>['type.destroy',$data->id],'method' => 'delete'))}}
    {{Form::submit('DELETE')}}
{{Form::close()}}