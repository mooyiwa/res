@extends('layouts.user-check')

@section('lend_check')

@foreach($assets as $asset) 
@foreach($details as $detail) 

{!! Form::open(array('url' => '/user/lend/'.$asset->id, 'action' => 'pagesController@lendSubscribe') ) !!}
<div class="card" style="border: none;">
<img src="/photos/{{ $asset->asset_id }}"  alt="..." width='60%' height= '60%';>
  <div class="card-body">
    <h5 class="card-title">{{ $asset->asset }} </h5>
    <p class="card-text"><label for=""> <a href="/pdfs/{{ $asset->pdf }}" target="_blank">Click here to view Brochure</a></label></p>
    <p class="card-text"> Project Type: {{ $asset->type }}</p>
    <p class="card-text"> Location: {{ $asset->location }} </p>
    
    <p class="card-text">  Min. Investment: &#8358; {{ number_format($asset->amount_1, 2) }}</p>
    <p class="card-text"> Interest rate: Upto 30% </p>
    <p class="card-text"> Term: {{ $asset->period }} months </p>

    
    <input type="hidden" name="first" class="form-control" value="{{ $detail->first}}">
    <input type="hidden" name="last" class="form-control" value="{{ $detail->last}}">
    <input type="hidden" name="email" class="form-control" value="{{ $detail->email}}">
    <input type="hidden" name="asset" class="form-control" value="{{ $asset->asset}}">
    <input type="hidden" name="location" class="form-control" value="{{ $asset->location }}">
    <input type="hidden" name="period" class="form-control" value="{{ $asset->period}}">


    <h5 class="card-title">Lending Options</h5>
    <p class="card-text"> @if(!empty($asset->amount_1))
    <li>&#8358; {{ number_format($asset->amount_1, 2) }} at {{ $asset->rate_1 }}% interest on investment</li>
    @endif
    </p>
    <p class="card-text"> 
    @if(!empty($asset->amount_2))
    <li>&#8358; {{ number_format($asset->amount_2, 2) }} at {{ $asset->rate_2 }}% interest on investment</li>
    @endif
    </p>
    <p class="card-text">
    @if(!empty($asset->amount_3))
    <li>&#8358; {{ number_format($asset->amount_3, 2) }} at {{ $asset->rate_3 }}% interest on investment</li>
    @endif
    </p>
    <p class="card-text">
    @if(!empty($asset->amount_4))
    <li>&#8358; {{ number_format($asset->amount_4, 2) }} at {{ $asset->rate_4 }}% interest on investment</li>
    @endif
    </p>

    <h5 class="card-title">Choose Option</label></h5>

    <select name="amount" id="" style="width: 50%;">
<option value="{{ $asset->amount_1 }}">{{ $asset->amount_1 }}</option>
<option value="{{ $asset->amount_2 }}">{{ $asset->amount_2 }}</option>
<option value="{{ $asset->amount_3 }}">{{ $asset->amount_3 }}</option>
<option value="{{ $asset->amount_4 }}">{{ $asset->amount_4 }}</option>
</select>

    <button type="submit" name="submit" class="btn btn-primary">Start Lending</button> 
    
  </div>
</div>

{!! Form::close() !!}

@endforeach 
@endforeach

@stop





