@extends('layouts.user-home')

@section('earnings')
          

<table class="earnings">
	<tr>
		<td> <b>Wallet(NGN)</b> </td><td> <b>Current Earnings(NGN)</b> </td>
	</tr>

	<tr>
		<td> {{ $earnings->credit }} </td><td> {{ $earnings->bonus }} </td>
	</tr>
</table>

<table class="earnings" style="position: relative;top: 20px;">
	<tr>
		<td> <b>*Minimum Payout on Earnings: NGN 5000.00</b> </td>
	</tr>
</table>




@stop



