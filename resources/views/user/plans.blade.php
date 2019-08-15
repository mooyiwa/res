@extends('layouts.user-home')

@section('plans')
<table class="listing" style='margin-top: 65px;'>
<tbody>
<tr><td class="apad">Asset</td>
                            <td class="apad">Inv. Period</td>
                            <td class="apad">Rate(%)</td>
                            <td class="apad">Cap In</td>
                            <td class="apad">Cap Out</td>
                        </tr>
@foreach($plans as $plan)

                        
                        <tr><td class="apad">{{ $plan->asset }}</td>
                            <td class="apad">{{ $plan->period }}</td>
                            <td class="apad">{{ $plan->rate }}</td>
                            <td class="apad">{{ $plan->cap_in }}</td>
                            <td class="apad">{{ $plan->cap_out }}</td>
                        </tr>
                       

@endforeach
</tbody>
</table>

@stop



