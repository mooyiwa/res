<?php $__env->startSection('subscribe'); ?>
          


       <form class="form" id="pay-form">
        <div id="alert-holder"></div>
        <div class="text-center">
        </div>

<ul>

<li>
 <div class="input-group-lg">
  <input type="text" name="first" id="firstname" class="form-control" required="required" 
  placeholder="firstname" value="<?php echo e($details->first); ?>">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="text" name="last" id="lastname" class="form-control" required="required" 
  placeholder="lastname" value="<?php echo e($details->last); ?>">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="email" name="email" id="email" class="form-control" required="required" 
  placeholder="johndoe@aol.com" value="<?php echo e($details->email); ?>">
 </div>
</li>
       
        

        <!-- The amount box is not displayed by default. Will stay so unless the GET parameter amountinkobo is a valid integer -->
        <fieldset class="form-group" id="amountinnaira" style="display:none">
          <label for="amount-in-naira">Amount (in Naira)</label>
         
              <div class=""></div>
              <input class="form-control" name="amount" id="amount-in-naira" required="required" type="hidden" value="2000" />
              <span style="padding:2px;border:1px solid #eee;"><?php echo "2000"; ?></span>
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