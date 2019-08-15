@extends('layouts.user-home')


@section('pro_author')

<ul class="">
@foreach($pros as $pro)


<li><span class='msg'>{{ @$msg }}</span> </li>

 <li>
  <p style="font-size: 1.5em">{{ $pro->title }}</p>
</li> 

 <li>
  {!! $pro->author !!}
</li> 


                 
@endforeach
</ul>

@stop