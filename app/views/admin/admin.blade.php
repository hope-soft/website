@extends('layouts/master_admin')
@section('title')
Admin Panel
@stop
@section('breadcrumb')
<li class="active">Admin Panel</li>
@stop
@section('admin_menu')
active
@stop


@section('section2')
<h3 class="text-muted">Type Lists</h3>
@if (count($data) === 0)
    Empty
@endif
@foreach ($types as $user)
    <ul class="list-group">
        <li class="list-group-item">{{link_to_route('type.show',$user->name,$user->id)}}</li>
    </ul>

@endforeach
@stop
@section('section3')
<h3 class="text-muted">Projects Lists</h3>
@if (count($data) === 0)
    Empty
@endif
@foreach ($data as $user)
    <ul class="list-group">
        <li class="list-group-item">{{link_to_route('project.show',$user->title,$user->id)}}</li>
    </ul>

@endforeach
@stop

