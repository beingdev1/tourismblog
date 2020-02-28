@extends('layouts.templates')
@include('includes.css')

@section('title','Add New Post')
@include('includes.navbar')
@include('includes.login')
@section('content')
<h1>Add New Post</h1>
<div class="col-sm-8 col-sm-offsset-2">
	<form action="{{ route("posts.store")}}" method="post">
	
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">title:</label>
			<input name="title" type="text" class="form-control">
		</div>

		<div class="form-group">
			<label for ="body">Body:</label>
			<textarea name="body" id="" cols="30" rows=10 class="form-control"></textarea>
		</div>
<div>

		<button type="submit" class="btn btn-primary">Submit</button>
@include('includes.messages')
</div>
		<a href="{{route('posts.index')}}" class="btn btn-primary pull-right" style="float: right;">Go Back</a>
	</form>
</div>
@endsection