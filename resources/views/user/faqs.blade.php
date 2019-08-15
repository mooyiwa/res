@extends('layouts.user-home')


@section('faq_content')

@foreach($faqs as $faq)

{!! Form::open(array('action' => 'pagesController@updateFaqsContent'))  !!}
<ul class="">
<li><span class='msg'>{{ @$msg }}</span> </li>

 <li>
  <div class="input-group-lg">
  <textarea name="story" class="" placeholder="" id="editor">{{ $faq->story }}</textarea> 
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