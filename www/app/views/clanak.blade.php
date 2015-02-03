@extends('layout.master')

@section('content')
<div class="row">
@include('sidebar.sidebar')
<div class="nine columns" id="mainbar">
<br />	<br />
<div class="section">
	<label style="color:gray;margin-left:1em;">{{date("l jS \\of F Y \\a\\t H:i",strtotime($clanak->created_at))}}</label>
	<h1 style="font-weight: 600;">{{$clanak->title}}</h1>
	<div>{{$clanak->content}}</div>
</div>
</div>
</div>
@stop