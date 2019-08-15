<?php $__env->startSection('subscribe'); ?>
          

<ul style="position: relative;top: -30px;left: 10px;">

<li>
 <div class="input-group-lg">
 <h3>Subscription Active</h3>
 </div>
</li>

<li>
 <div class="input-group-lg">
 <span>Wallet(NGN): <?php echo e($current->credit); ?></span>	

</li>

<li>
 <div class="input-group-lg">
 	<span>Valid until: <?php echo e($current->finish); ?></span>	
 
 </div>
</li>
   

    </ul>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>