@extends('layouts.subscribe')

@section('lend_subscribe')
          
<form class="form" id="pay-form">
        <div id="alert-holder"></div>
        <div class="text-center">
        </div>

<ul>
<li><span class='msg'>{{ @$msg }}</span> </li>
<li>
 <div class="input-group-lg">
  <input type="hidden" name="first" id="firstname" class="form-control" required="required" 
  placeholder="firstname" value="{{ session()->get('first') }}">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="hidden" name="last" id="lastname" class="form-control" required="required" 
  placeholder="lastname" value="{{ session()->get('last') }}">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="hidden" name="email" id="email" class="form-control" required="required" 
  placeholder="johndoe@aol.com" value="{{ session()->get('email') }}">
 </div>
</li> 

<li class='tudd'><label>Account Holder</label></li>
<li>{{ session()->get('first') }} {{ session()->get('last') }}</li>

<li class='tudd'><label>Project</label></li>
<li>
 <div class="input-group-lg">
  <input type="hidden" name="asset" id="asset" class="form-control" required="required" 
 value="{{ session()->get('asset') }}"> {{ session()->get('asset') }}
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="hidden" name="location" id="location" class="form-control" required="required" 
 value="{{ session()->get('location') }}"> {{ session()->get('location') }}
 </div>
</li>

<li class='tudd'><label>Investment Option</label></li>
<li>
 <div class="input-group-lg">
  <input type="hidden" name="amount" id="amount" class="form-control" required="required" 
 value="{{ session()->get('amount') }}"> NGN {{ session()->get('amount') }} / 12 months
 </div>
</li> 

<li>
 <div class="input-group-lg">
  <input type="hidden" name="rate" id="rate" class="form-control" required="required" 
 value="{{ session()->get('rate') }}"> {{ session()->get('rate') }}
 </div>
</li> 
  
        

       <!-- The amount box is not displayed by default. Will stay so unless the GET parameter amountinkobo is a valid integer -->
        <fieldset class="form-group" id="amountinnaira" style="display:none">
          <label for="amount-in-naira">Amount (in Naira)</label>
         
              <div class=""></div>
              <input class="form-control" name="amount" id="amount-in-naira" required="required" type="hidden" value="{{ session()->get('amount') }}" />
              <div class=""></div>
        </fieldset>

 <li>
 <div class="input-group-lg">
<button class="btn btn-secondary" type="button" onclick="validateAndPay()"> Pay </button>
 </div>
</li>       
        
        

    </ul>
 
 </form>

 @stop
