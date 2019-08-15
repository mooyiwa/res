@extends('layouts.user-home')




@section('pro_author_content')

@foreach($pros as $pro)

{!! Form::open(array('action' => 'pagesController@updateProAuthorContent'))  !!}
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
  <textarea name="author" class="form-control" placeholder="" id="textarea">{{ $pro->author }}</textarea> 
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