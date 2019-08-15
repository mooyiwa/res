@extends('layouts.home')

@section('how_it_works')
<div class="col-md-12">
<ul class="" style='margin-top: 25px;'>
@foreach($works as $work)

 <li>
  {!! $work->how !!}
</li> 
                

@endforeach
</ul></div>

@stop



