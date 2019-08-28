@extends('layouts.user-home')

@section('bio')

{!! Form::open(array('action' => 'pagesController@createAsset','enctype' => 'multipart/form-data'))  !!}   
<ul class="">  
<li><span class='msg'>{{ @$msg }}</span></li>

<li><div class="input-group-lg">

</div>
</li>


<!--<li><div class="input-group-lg">
  <input type="text" name="asset" class="form-control" placeholder="Asset">
 </div>
</li>-->

<li><div class="input-group-lg">
  {!! Form::text('asset','',array('required','class' => 'form-control', 'placeholder' => 'Asset' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('location','',array('required','class' => 'form-control', 'placeholder' => 'Ikoyi' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('period','',array('required','class' => 'form-control', 'placeholder' => 'Investment Period in months e.g 12' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('amt_1','',array('required','class' => 'form-control', 'placeholder' => 'Investment type 1 e.g 250,000' )) !!}
 </div>
</li>


<li><div class="input-group-lg">
  {!! Form::text('rate_1','',array('required','class' => 'form-control', 'placeholder' => 'interest rate in % for type 1 e.g 10' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('amt_2','',array('class' => 'form-control', 'placeholder' => 'Investment type 2 e.g 500,000' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('rate_2','',array('class' => 'form-control', 'placeholder' => 'interest rate in % for type 2 e.g 10' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('amt_3','',array('class' => 'form-control', 'placeholder' => 'Investment type 3 e.g 1,000,000' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('rate_3','',array('class' => 'form-control', 'placeholder' => 'interest rate in % for type 3 e.g 10' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('amt_4','',array('class' => 'form-control', 'placeholder' => 'Investment type 4 e.g 5,000,000' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('rate_4','',array('class' => 'form-control', 'placeholder' => 'interest rate in % for type 4 e.g 10' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('type','',array('class' => 'form-control', 'placeholder' => 'Type of property' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('total_loan','',array('class' => 'form-control', 'placeholder' => 'Total loan amt on property' )) !!}
 </div>
</li>


<li>
<div class="input-group-lg">
{!! Form::file('image', array('class' => 'image')) !!}
</div>
</li>
 
 <li><div class="input-group-lg">
<button type="submit" name="submit" class="btn btn-primary">Create</button> 
</div>
</li>


</ul>

{!! Form::close() !!}

@stop





