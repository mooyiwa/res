@extends('layouts.user-home')


@section('deletepost')


@foreach($posts as $post) 

{!! Form::open(array('url' => '/user/delete/'.$post->id, 'action' => 'pagesController@deletePost') ) !!}
<ul>
<li><span class='msg'>{{ @$msg }}</span></li>

<li><h3>Post Title</h3></li>  

<li>
<div class="input-group-lg">
{!! $post->title !!}
 </div>
</li> 

<li>
<div class="input-group-lg">
{!! Form::submit('Delete Post',array('class' => 'btn btn-default')) !!}
 </div>
</li>  


@endforeach 
</ul>
{!! Form::close() !!}  

@stop


