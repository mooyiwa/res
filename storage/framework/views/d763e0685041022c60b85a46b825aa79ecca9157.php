<?php $__env->startSection('subscribe'); ?>
          


<?php echo Form::open(array('action' => 'pagesController@subscribePage', 'class'=>'form')); ?>


<ul>

<li>
 <div class="input-group-lg">
  <input type="text" name="first" id="firstname" class="form-control" 
  placeholder="firstname" value="<?php echo e($details->first); ?>">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="text" name="last" id="lastname" class="form-control" 
  placeholder="lastname" value="<?php echo e($details->last); ?>">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="email" name="email" id="email" class="form-control"  
  placeholder="johndoe@aol.com" value="<?php echo e($details->email); ?>">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input class="form-control" name="amount" id="amount-in-naira" required="required" type="hidden" value="2000" />
 </div>
</li> 

 <li>
 <div class="input-group-lg">
<button class="btn btn-secondary" type="submit"> Go </button>
 </div>
</li>       
        
        

    </ul>
 
 <?php echo Form::close(); ?>




<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.subscribe', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>