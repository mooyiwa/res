@extends('layouts.single')

@section('single')
<ul>
@foreach($posts as $post)

               <li style="margin-top: 20px;" class="title"><b style="font-size: 1.5em">{{ $post->title }}</b></li><br />
                        <li class="details">{!! nl2br($post->post) !!}</li>


@endforeach
</ul>

@stop



@section('author')
<ul class="cates">
@foreach($posts as $post)
 <li> <h4>{{ $post->cate }}</h4> </li>
 <li>@<a href="{{ URL::asset('') }}{{ $post->auth }}">{{ $post->fname }}</a></li>
 <li> {{ $post->start }} </li>

@endforeach
</ul>
<br />

@stop
