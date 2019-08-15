@extends('layouts.user-home')


@section('joinus_content')

@foreach($joins as $join)

{!! Form::open(array('action' => 'pagesController@updateJoinUsContent'))  !!}
<ul class="">
<li><span class='msg'>{{ @$msg }}</span> </li>

 <li>
  <div class="input-group-lg">
  <textarea name="story" class="" placeholder="" id="editor">{{ $join->story }}</textarea> 
 </div>
</li> 


 <li>
  <div class="input-group input-group-lg">
<button type="submit" name="submit" class="btn btn-default">Update</button>
 </div>
</li> 


</ul>

{!! Form::close() !!}                
                  

@endforeach

@stop