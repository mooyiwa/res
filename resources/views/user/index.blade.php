@extends('layouts.user-home')

@section('av_assets')
<ul class="listing inv">
@foreach($assets as $asset)

                    <li><img src="{{ URL::asset('img/$asset->asset_id') }}" /></li> 
                    <span>  
                    <li class="em">{{ $asset->asset }}</li>
                    <li class="apad">{{ $asset->location }}</li>
                    <li class="apad">{{ $asset->rate }}</li>
                    <li class="apad">{{ $asset->period }}</li> 
</span>                          

@endforeach
</ul>

@stop


