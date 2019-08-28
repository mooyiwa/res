<?php $__env->startSection('lend_complete'); ?>
          
<ul>
<li><span class='msg'><?php echo e(@$msg); ?></span> </li>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>