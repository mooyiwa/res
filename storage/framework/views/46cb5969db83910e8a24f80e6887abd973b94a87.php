<?php $__env->startSection('pro_reader_content'); ?>

<ul class="">
<?php $__currentLoopData = $pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<li><span class='msg'><?php echo e(@$msg); ?></span> </li>

 <li>
  <p style="font-size: 1.5em"><?php echo e($pro->title); ?></p>
</li> 

 <li>
<?php echo $pro->reader; ?>

</li> 


                 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>