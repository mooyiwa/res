@extends('layouts.user-home')


@section('pro_reader_content')

<ul class="">
@foreach($pros as $pro)


<li><span class='msg'>{{ @$msg }}</span> </li>

 <li>
  <p style="font-size: 1.5em">{{ $pro->title }}</p>
</li> 

 <li>
{!! $pro->reader !!}
</li> 


                 
@endforeach
</ul>

@stop