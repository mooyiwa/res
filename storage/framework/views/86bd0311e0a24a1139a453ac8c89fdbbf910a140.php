<?php $__env->startSection('subscribe'); ?>
          
<form class="form" id="pay-form">
        <div id="alert-holder"></div>
        <div class="text-center">
        </div>

<ul>
<li><span class='msg'><?php echo e(@$msg); ?></span> </li>
<li>
 <div class="input-group-lg">
  <input type="text" name="first" id="firstname" class="form-control" required="required" 
  placeholder="firstname" value="<?php echo e(session()->get('first')); ?>">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="text" name="last" id="lastname" class="form-control" required="required" 
  placeholder="lastname" value="<?php echo e(session()->get('last')); ?>">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="email" name="email" id="email" class="form-control" required="required" 
  placeholder="johndoe@aol.com" value="<?php echo e(session()->get('email')); ?>">
 </div>
</li> 

<li>
 <div class="input-group-lg">
  <span  class="form-control" style="border: 1px solid #eee; padding: 12px;">NGN <?php echo e(2000); ?> / month</span>
 </div>
</li>    
        

       <!-- The amount box is not displayed by default. Will stay so unless the GET parameter amountinkobo is a valid integer -->
        <fieldset class="form-group" id="amountinnaira" style="display:none">
          <label for="amount-in-naira">Amount (in Naira)</label>
         
              <div class=""></div>
              <input class="form-control" name="amount" id="amount-in-naira" required="required" type="hidden" value="2000" />
              <div class=""></div>
        </fieldset>

 <li>
 <div class="input-group-lg">
<button class="btn btn-secondary" type="button" onclick="validateAndPay()"> Pay Subscription </button>
 </div>
</li>       
        
        

    </ul>
 
 </form>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.subscribe', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>