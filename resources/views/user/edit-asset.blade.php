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
  {!! Form::text('rate',$asset->rate,array('required','class' => 'form-control', 'placeholder' => 'rate' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('period',$asset->period,array('required','class' => 'form-control', 'placeholder' => 'period' )) !!}
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

