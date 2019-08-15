@extends('layouts.subscribe')

@section('subscribe')
          


{!! Form::open(array('action' => 'pagesController@subscribePage', 'class'=>'form'))  !!}

<ul>

<li>
 <div class="input-group-lg">
  <input type="text" name="first" id="firstname" class="form-control" 
  placeholder="firstname" value="{{ $details->first }}">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="text" name="last" id="lastname" class="form-control" 
  placeholder="lastname" value="{{ $details->last }}">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="email" name="email" id="email" class="form-control"  
  placeholder="johndoe@aol.com" value="{{ $details->email }}">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input class="form-control" name="amount" id="amount-in-naira" required="required" type="hidden" value="2000" />
 </div>
</li> 

 <li>
 <div class="input-group-lg">
<button class="btn btn-secondary" type="submit"> Go </button>
 </div>
</li>       
        
        

    </ul>
 
 {!! Form::close() !!}



@stop



