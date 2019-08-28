@extends('layouts.user-check')

@section('lend_check')

@foreach($assets as $asset) 
@foreach($details as $detail) 

{!! Form::open(array('url' => '/user/lend/'.$asset->id, 'action' => 'pagesController@lendSubscribe') ) !!}


<ul class="lending">  
<li><span class='msg'>{{ @$msg }}</span></li>

<!-- <img src="/photos/{{ $asset->asset_id }}"  alt="..." style='width: 50%;'> -->

<li><div class="input-group-lg">

</div>
</li>

<!-- <li><label for=""> <a href="/pdfs/{{ $asset->pdf }}" target="_blank">Click here to view Brochure</a></label> -->

<li>
<embed src="{{ URL::asset('pdfs') }}/{{ $asset->pdf }}" type="application/pdf" width="100%" height="500px" />
</li> 

<li><div class="input-group-lg">
  <input type="hidden" name="first" class="form-control" value="{{ $detail->first}}">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="last" class="form-control" value="{{ $detail->last}}">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="email" class="form-control" value="{{ $detail->email}}">
 </div>
</li>

<li><label for="">Project</label></li>
<li><div class="input-group-lg">
  <input type="hidden" name="asset" class="form-control" value="{{ $asset->asset}}">{{ $asset->asset}}
 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="location" class="form-control" value="{{ $asset->location }}">{{ $asset->location}}
 </div>
</li>

<li><label for="">Investment Period</label></li>

<li><div class="input-group-lg">
  <input type="hidden" name="period" class="form-control" value="{{ $asset->period}}">{{ $asset->period}}-months
 </div>
</li>

<li><label for="">Lending Options</label></li>
@if(!empty($asset->amount_1))
  <li>&#8358; {{ number_format($asset->amount_1, 2) }} at {{ $asset->rate_1 }}% interest on investment</li>
@endif

@if(!empty($asset->amount_2))
  <li>&#8358; {{ number_format($asset->amount_2, 2) }} at {{ $asset->rate_2 }}% interest on investment</li>
@endif

@if(!empty($asset->amount_3))
  <li>&#8358; {{ number_format($asset->amount_3, 2) }} at {{ $asset->rate_3 }}% interest on investment</li>
@endif

@if(!empty($asset->amount_4))
  <li>&#8358; {{ number_format($asset->amount_4, 2) }} at {{ $asset->rate_4 }}% interest on investment</li>
@endif


<li><label for="">Choose Option</label></li>

<li>
<select name="amount" id="" style="width: 50%;">
<option value="{{ $asset->amount_1 }}">{{ $asset->amount_1 }}</option>
<option value="{{ $asset->amount_2 }}">{{ $asset->amount_2 }}</option>
<option value="{{ $asset->amount_3 }}">{{ $asset->amount_3 }}</option>
<option value="{{ $asset->amount_4 }}">{{ $asset->amount_4 }}</option>
</select>
</li>
 
<li><div class="input-group-lg">
<button type="submit" name="submit" class="btn btn-primary">Start Lending</button> 
</div>
</li>


</ul>

{!! Form::close() !!}

@endforeach 
@endforeach

@stop





