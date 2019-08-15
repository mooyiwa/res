@extends('layouts.user-home')

@section('all_assets')
<table class="listing" style='margin-top: 75px;'>
<tbody>
<tr>
                            <td class="apad"><label>Asset</label></td>
                            <td class="apad"><label>Location</label></td>
                            <td class="apad"><label>Rate(%)</label></td>
                            <td class="apad"><label>Period</label></td>
                        
                        </tr>
@foreach($assets as $asset)

                        
                        <tr><td class="apad">{{ $asset->asset }}</td>
                            <td class="apad">{{ $asset->location }}</td>
                            <td class="apad">{{ $asset->rate }}</td>
                            <td class="apad">{{ $asset->period }}</td>
                            <td><a href="/admin/edit_asset/{{ $asset->id }}"><img src="{{ URL::asset('img/edit.png') }}" /></a></td>
                            <td><a href="/admin/delete_asset/{{ $asset->id }}"><img src="{{ URL::asset('img/delete.png') }}" /></a></td>
                            
                        </tr>
                       

@endforeach
</tbody>
</table>

@stop


