@extends('layouts.user-home')

@section('plans')
<table class="listing" style='margin-top: 65px;'>

<tr><td class="apad">Asset</td>
                            <td class="apad">Period</label></td>
                            
                            <td class="apad">Investment(&#8358;)</td>
                            <td class="apad">Rate(%)</td>
                            <td class="apad">Maturity(&#8358;)</td>
                            <td class="apad">Start Date</td>
                            <td class="apad">Maturity Date</td>
                            <td class="apad">Day</td>
                        </tr>
                        <tbody id='go'>
@foreach($plans as $plan)


                        <tr><td class="">{{ $plan->asset }}</td>
                            <td class="">{{ $plan->period }} months</td>
                            
                            <td class="">{{ number_format($plan->credit, 2) }}</td>
                            <td class="">{{ $plan->rate }}</td>
                            <td class="">{{ number_format($plan->credit_out, 2) }}</td>
                            <td class="">{{ $plan->start }}</td>
                            <td class="">{{ $plan->finish }}</td>
                            <td class="">
                           <?php
                            $today = date('Y-m-d'); 
                           // $today = '2020-08-22';
                            $today = date_create($today);
                            $start = date_create($plan->start);
                            $interval = date_diff($today,$start); 
                           ?>
                            {{ $interval->format('%a') }}
                            </td>
                            @if($interval->format('%a') >=365) <button> Withdraw </button> @endif 
                        </tr>

                     
                       

@endforeach
</tbody>
</table>

@stop



