@extends('layouts.user-home')

@section('subscribe')
          

<ul style="position: relative;top: -30px;left: 10px;">

<li>
 <div class="input-group-lg">
 <h3>Subscription Active</h3>
 </div>
</li>

<li>
 <div class="input-group-lg">
 <span>Wallet(NGN): {{ $current->credit }}</span>	

</li>

<li>
 <div class="input-group-lg">
 	<span>Valid until: {{ $current->finish }}</span>	
 
 </div>
</li>
   

    </ul>



@stop



