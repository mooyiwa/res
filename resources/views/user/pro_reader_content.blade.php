@extends('layouts.user-home')




@section('pro_reader')

@foreach($pros as $pro)

{!! Form::open(array('action' => 'pagesController@updateProReaderContent'))  !!}
<ul class="">
<li><span class='msg'>{{ @$msg }}</span> </li>

 <li>
  <div class="input-group-lg">
  <input type="text" name="title" class="form-control" value="{{ $pro->title }}" required="required" 
  placeholder="">
 </div>
</li> 

 <li>
  <div class="input-group-lg">
  <textarea name="reader" class="form-control" id="textarea" contenteditable="true">{{ $pro->reader }}</textarea> 
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