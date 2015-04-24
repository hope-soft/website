<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>title</title>
{{ HTML::style('bootstrap/css/bootstrap.min.css') }}

{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
</head>

<body>
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hope Soft</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin">Admin Panel </a></li>
        <li><a href="/">Home </a></li>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <ol class="breadcrumb">
      @yield('breadcrumb')
        <!--
          <li><a href="#">Pictures</a></li>
          <li class="active">Vacation</li>

        -->
  </ol>

   <div class="row">
    <div class="col-md-3">
        <div class="col-md-12">
          <ul class="nav nav-pills nav-stacked">
            <li class="@yield('admin_menu')"><a href="admin">Admin Panel</a></li>
            <li  class="@yield('password_menu')"><a href="password">Change Password</a></li>
            <li class="@yield('project_menu')"><a href="project">New Project</a></li>
            <li @yield('type_menu')><a href="type">New Type</a></li>
          </ul>
        </div>
    </div>

     <div class="col-md-5">
        @yield('section2')

     </div>

      <div class="col-md-4">
        @yield('section3')
      </div>


   </div>
</div>
</body>
</html>
