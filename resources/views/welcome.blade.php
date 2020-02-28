@extends('layouts.app')

@section('title','Tourism Blog')

 @include('includes.navbar')

@include('includes.login')
@section('content')
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script> 
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5dc4cb74505f930012df49a6&product=inline-share-buttons&cms=website' async='async'></script>

@include('includes.css')

@include('includes.showcase')




@include('includes.foreach')

<div class="row text-centre">
    {{ $posts->links()}}
</div>
<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
<div class="jumbotron">
 @include('includes.footer')
 <div class="sharethis-inline-share-buttons"></div>
</div>

@endsection