<?php $__env->startSection('how_it_works'); ?>
<div class="col-md-12">
<ul class="" style='margin-top: 25px;'>
<?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <li>
  <?php echo $work->how; ?>

</li> 
                

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul></div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>