@extends('layouts.user-home')


@section('how_it_works_content')

@foreach($works as $work)

{!! Form::open(array('action' => 'pagesController@updateHowItWorksContent'))  !!}
<ul class="">
<li><span class='msg'>{{ @$msg }}</span> </li>

 <li>
  <div class="input-group-lg">
  <input type="text" name="title" class="form-control" value="{{ $work->title }}" required="required" 
  placeholder="">
 </div>
</li> 

 <li>
  <div class="input-group-lg">
  <textarea name="how" class="" placeholder="" id="editor">{{ $work->how }}</textarea> 
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