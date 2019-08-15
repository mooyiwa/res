@extends('layouts.user-home')


@section('deletecate')


@foreach($assets as $asset) 

{!! Form::open(array('url' => '/admin/delete_asset/'.$asset->id, 'action' => 'pagesController@deleteAsset') ) !!}
<ul>
<!--<li><span class='msg'>{{ @$msg }}</span></li>-->

<li><h4 style="margin-top:25px;">Asset</h4></li>  

<li>
<div class="input-group-lg">
{!! $asset->asset !!}
 </div>
</li> 

<li>
<div class="input-group-lg">
Investment amount - {!! $asset->amount !!}
 </div>
</li> 

<li>
<div class="input-group-lg">
Rate(%) - {!! $asset->rate !!}
 </div>
</li> 

<li>
<div class="input-group-lg">
{!! Form::submit('Delete Asset',array('class' => 'btn btn-default')) !!}
 </div>
</li>  


@endforeach 
</ul>
{!! Form::close() !!}  

@stop



