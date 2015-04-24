<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>title</title>
{{ HTML::style('bootstrap/css/bootstrap.min.css') }}

{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
</head>

<body>
<div class="container">
    <div class="row">
      <div class="col-md-4"></div>

      <div class="col-md-4">
        {{Form::open(array('route'=>'home.store'))}}

            User Name : <br>
            {{Form::text('uname')}}{{$errors->first('uname')}}<br>



            Password: <br>
            {{Form::password('password')}}{{$errors->first('password')}}<br>

            {{Form::submit('Log-in')}}

        {{Form::close()}}

      </div>
      <div class="col-md-4"></div>


    </div>
</div>

</body>
</html>



