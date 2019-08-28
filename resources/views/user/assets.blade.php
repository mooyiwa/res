@extends('layouts.user-home')

@section('all_assets')
<table class="listing" style='margin-top: 75px;'>
<tbody>
<tr>
                            <td class="apad"><label>Asset</label></td>

                            <td class="apad"><label>Amount 1</label></td>
                            <td class="apad"><label>Rate 1(%)</label></td>

                            <td class="apad"><label>Amount 2</label></td>
                            <td class="apad"><label>Rate 2(%)</label></td>

                            <td class="apad"><label>Amount 3</label></td>
                            <td class="apad"><label>Rate 3(%)</label></td>

                            <td class="apad"><label>Amount 4</label></td>
                            <td class="apad"><label>Rate 4(%)</label></td>  

                            <td class="apad"><label>Period</label></td>
                        
                        </tr>
@foreach($assets as $asset)

                        
                        <tr><td class="apad">{{ $asset->asset }}</td>

                            <td class="apad">{{ $asset->amount_1 }}</td>
                            <td class="apad">{{ $asset->rate_1 }}</td>

                            <td class="apad">{{ $asset->amount_2 }}</td>
                            <td class="apad">{{ $asset->rate_2 }}</td>

                            <td class="apad">{{ $asset->amount_3 }}</td>
                            <td class="apad">{{ $asset->rate_3 }}</td>

                            <td class="apad">{{ $asset->amount_4 }}</td>
                            <td class="apad">{{ $asset->rate_4 }}</td>

                            <td class="apad">{{ $asset->period }}</td>
                            <td><a href="/admin/edit_asset/{{ $asset->id }}"><img src="{{ URL::asset('img/edit.png') }}" /></a></td>
                            <td><a href="/admin/delete_asset/{{ $asset->id }}"><img src="{{ URL::asset('img/delete.png') }}" /></a></td>
                            
                        </tr>
                       

@endforeach
</tbody>
</table>

@stop


