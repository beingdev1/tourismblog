<div>
@include('includes.navbar')
</div>
@extends('layouts.templates')
@include('includes.login')
@include('includes.css')
@section('title','Add Blog Posts')

@section ('content')
<br>


<a href="{{route('posts.create')}}" class="btn btn-primary pull-right">Add New Posts</a>
<br><br>

<table class="table">
	<thead>
		<th>id</th>
		<th>title</th>
		<th>body</th>
		<th>image</th>
		<th>edit</th>
		<th>delete</th>
		<th>created at</th>
		<th>updated at</th>
	</thead>
	<tbody>
		@foreach($posts as $post)
		<tr>
		<th>{{ $post->id}}
			</th>
		<td>{{ $post->title}}</td>
		<td>{{ $post->body}}</td>
		<td>{{$post->image}}</td>
		<td>edit button</td>
		<td>delete button</td>
		<td>new DateTime</td>
		<td>new DateTime</td>
	     </tr>
	     @endforeach


  </tbody>

</table>

@endsection