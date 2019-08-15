@extends('layouts.user-home')

@section('bio')

{!! Form::open(array('action' => 'pagesController@createAsset','enctype' => 'multipart/form-data'))  !!}   
<ul class="">  
<li><span class='msg'>{{ @$msg }}</span></li>

<li><div class="input-group-lg">

</div>
</li>


<li><div class="input-group-lg">
  <input type="text" name="asset" class="form-control" placeholder="Asset">
 </div>
</li>
<li><div class="input-group-lg">
  <input type="text" name="location" class="form-control" placeholder="Ikoyi">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="text" name="amt" class="form-control" placeholder="Investment amt. e.g 550,000">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="text" name="rate" class="form-control" placeholder="interest rate in % e.g 10">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="text" name="period" class="form-control" placeholder="Investment Period in months e.g 12">
 </div>
</li>

<li>
<div class="input-group-lg">
{!! Form::file('image', array('class' => 'image')) !!}
</div>
</li>
 
 <li><div class="input-group-lg">
<button type="submit" name="submit" class="btn btn-default">Create</button> 
</div>
</li>


</ul>

{!! Form::close() !!}

@stop





