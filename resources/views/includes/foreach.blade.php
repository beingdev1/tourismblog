<div class="jumbotron text-center">
@foreach($posts as $post)
<div >

    <h3>{{  $post->title }} </h3>
    <p>{{ $post ->body }} </p>
    <p>{{ $post->image }}</p>
    <p>{{ $post->created_at}}</p>
    <p>{{ $post->updated_at }}</p>

</div>
@endforeach
</div>