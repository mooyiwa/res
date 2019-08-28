@extends('layouts.user-home')


@section('editasset')


@foreach($assets as $asset)

{!! Form::open(array('url' => '/admin/edit_asset/'.$asset->id, 'action' => 'pagesController@editAsset') ) !!}
<ul>	
<li><span class='msg'>{{ @$msg }}</span></li>

<li><div class="input-group-lg">
  {!! Form::text('asset',$asset->asset,array('required','class' => 'form-control', 'placeholder' => 'Asset' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('location',$asset->location,array('required','class' => 'form-control', 'placeholder' => 'location' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('period',$asset->period,array('required','class' => 'form-control', 'placeholder' => 'period' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('amt_1',$asset->amount_1,array('required','class' => 'form-control', 'placeholder' => 'amt_1' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('rate_1',$asset->rate_1,array('required','class' => 'form-control', 'placeholder' => 'rate_1' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('amt_2',$asset->amount_2,array('class' => 'form-control', 'placeholder' => 'amt_2' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('rate_2',$asset->rate_2,array('class' => 'form-control', 'placeholder' => 'rate_2' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('amt_3',$asset->amount_3,array('class' => 'form-control', 'placeholder' => 'amt_3' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('rate_3',$asset->rate_3,array('class' => 'form-control', 'placeholder' => 'rate_3' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('amt_4',$asset->amount_4,array('class' => 'form-control', 'placeholder' => 'amt_4' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('rate_4',$asset->rate_4,array('class' => 'form-control', 'placeholder' => 'rate_4' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('type',$asset->type,array('class' => 'form-control', 'placeholder' => 'Property type' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('total_loan',$asset->total_loan,array('class' => 'form-control', 'placeholder' => 'loan amt' )) !!}
 </div>
</li>



<li><div class="input-group-lg">
{!! Form::submit('Edit Asset',array('class' => 'btn btn-default')) !!}
 </div>
</li>

@endforeach
</ul>
{!! Form::close() !!}

@stop

