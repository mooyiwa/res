@extends('layouts.cate_posts')

@section('listing')
<ul class="listinge">
@foreach($posts as $post)

                <li>
                   <table class="listing">
                        <tbody>
                    <h3 class="em"><a href="/post/{{$post->id}}">{{ $post->title }}</a></h3>
                    <tr><td><img src="{{ URL::asset('img/fist.png') }}" /> {{ $post->score }}</td></tr>
                    <tr><td>{{ $post->cate }}</td><td class="apad">{{ $post->fname }}</td>
                    </tr>

                     </tbody>
                    </table>
                </li>

@endforeach
</ul>

@stop



