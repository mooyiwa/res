<?php $__env->startSection('how_it_works'); ?>
<ul class="">
<?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


 <li>
  <p style="font-size: 1.5em"><?php echo e($work->title); ?></p>
</li> 

 <li>
  <?php echo $work->how; ?>

</li> 
                

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>