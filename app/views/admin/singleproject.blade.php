
<h1>Update</h1>
{{Form::open(array('route'=>['project.update',$data->id],'files' => true,'method' => 'put'))}}

    Title : <br>
    {{Form::text('title',$data->title)}}{{$errors->first('title')}}<br><br>
    Type:

        {{ Form::select('type', $type,$data->type_id) }}{{$errors->first('type')}}<br><br>

     Image:
     {{ Form::file('image') }}{{$errors->first('image')}}<br>

    Text: <br>
    {{Form::textarea('text',$data->text)}}{{$errors->first('text')}}<br>

    {{Form::submit('send')}}

{{Form::close()}}
{{Form::close()}}
{{Form::open(array('route'=>['project.destroy',$data->id],'method' => 'delete'))}}
    {{Form::submit('DELETE')}}
{{Form::close()}}
