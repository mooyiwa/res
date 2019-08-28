@extends('layouts.user-home')

@if(session()->get('who') == 'user')

@section('inv_assets')

<h3 style="position: relative; top: 15px;">Open Investments</h3>
<ul class="inv"><div class="row">
@foreach($assets as $asset)                      

<div class="col-md-4" style="width: 18rem; margin-top:25px;">
<div class="card">
<a href="/user/lend/{{ $asset->id }}"><img src="/photos/{{ $asset->asset_id }}" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <h5 class="card-title">{{ $asset->asset }} </h5>
    <p class="card-text"> Project Type: {{ $asset->type }}</p>
    <p class="card-text">{{ $asset->location }} <br>
       Min. Investment: &#8358; {{ number_format($asset->amount_1, 2) }}</p>
    <p class="card-text"> Interest rate: Upto 30% <br>
       Term: {{ $asset->period }} months</p>

    <p class="card-text"> Loan Amount: &#8358; {{ number_format($asset->total_loan, 2) }}</p>
    <a href="/user/lend/{{ $asset->id }}" class="btn btn-primary">Start Lending</a>
  </div>
</div>
</div>

@endforeach
</div>
</ul>

@stop

@endif


