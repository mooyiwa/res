@extends('layouts.user-home')

@section('listing')
<ul class="listing">
@foreach($posts as $post)


                <li>
                   <table class="listing">
                        <tbody>
                        <tr><td class="em"><a href="/post/{{$post->id}}">{{ $post->title }}</a></td></tr>
                        <tr><td class="apad">{{ $post->fname }}</td></tr>
                    <tr><td></td><td><img src="{{ URL::asset('img/fist.png') }}" /> {{ $post->score }}</td></tr>
                    <tr><td>{{ $post->cate }}</td>
                        <td class="postdate">{{ $post->start }}</td><td class="goto"><a href="/post/{{$post->id}}">Go to article</a></td>
                    </tr>

                     </tbody>
                    </table>
                </li>

@endforeach
</ul>

@stop



