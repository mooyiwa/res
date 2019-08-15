<?php $__env->startSection('avatar'); ?>


<?php echo Form::open(array('url' => '/user/avatar/','enctype' => 'multipart/form-data')); ?>

<ul class="">

<li><span class='msg'><?php echo e(@$msg); ?></span></li>
<li>
<div class="input-group-lg">
<?php echo Form::file('image', array('class' => 'image')); ?>

</div>
</li>

<li>
<div class="input-group-lg">
<?php echo Form::submit('Attach Avatar',['class' => 'btn btn-default']); ?>

</div>
</li>

</ul>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>