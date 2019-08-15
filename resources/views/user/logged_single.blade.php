@extends('layouts.user-home')

@section('listing')
<ul>
@foreach($posts as $post)

               <li style="margin-top: 20px;" class="title"><b style="font-size: 1.5em">{{ $post->title }}</b></li><br />
                        <li class="details">{!! $post->post !!}</li><br />

@if($post->auth != session()->get('logged'))
  <li>Score this post <a href="/user/score/{{$post->id}}"><img src="{{ URL::asset('img/score.png') }}" /></a> {{ $post->score }}</li>
@endif  
            

@endforeach
</ul>

@stop



@section('author')
<ul class="cates">
@foreach($posts as $post)

 <li>@<a href="{{ URL::asset('') }}{{ $post->auth }}">{{ $post->fname }} </a></li>
 <li> {{ $post->start }} </li><br />
 <li> {{ $post->cate }} </li><br />



@endforeach
</ul>

@stop
