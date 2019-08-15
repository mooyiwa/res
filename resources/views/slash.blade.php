@extends('layouts.slash')

@section('avatar')

<ul class="bio">
  @if(empty($me->photo_id))
     <li><img class="bio" src="{{ URL::asset('photos') }}/d_avatar.png" /></li><br />
  @endif 

  @if(!empty($me->photo_id))
     <li><img class="bio" src="{{ URL::asset('photos') }}/{{ $me->photo_id }}" /></li><br />
  @endif  
     <li>{{ $me->fullname }}</li><br />
     <li>Facebook: {{ $me->fb }}</li>
     <li>Twitter: {{ $me->twitter }}</li>
     <li>LinkedIn: {{ $me->linkedin }}</li>

</ul>

@stop

@section('me')

<ul class="me" style="margin-top: 25px">
<li class="title" style="font-size: 1.5em;"><b>{!! $me->title !!}</b> </li><br />
<li>
   {!! $me->me !!}
</li>
</ul>

@stop

@section('listing')
<ul class="listing">
	<h4 style="margin-top: 25px"></h4>

@foreach($posts as $post)


                <li>
                    <table class="listing">
                        <tbody id="go">
                        <tr><td class="em"><a href="/post/{{$post->id}}">{{ $post->title }}</a></td></tr>
                        <tr><td class="apad">{{ $post->cate }}</td></tr>
                    <tr><td><img src="{{ URL::asset('img/fist.png') }}" /> {{ $post->score }}</td>
                      <td>{{ $post->start }}</td>
                    </tr>

                     </tbody>
                    </table>
                </li>

@endforeach
</ul>

@stop
