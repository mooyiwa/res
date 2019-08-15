<?php $__env->startSection('deletecate'); ?>


<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

<?php echo Form::open(array('url' => '/user/deletecate/'.$cate->id, 'action' => 'pagesController@deleteCate') ); ?>

<ul>
<!--<li><span class='msg'><?php echo e(@$msg); ?></span></li>-->

<li><h3>Cate</h3></li>  

<li>
<div class="input-group-lg">
<?php echo $cate->cate; ?>

 </div>
</li> 

<li>
<div class="input-group-lg">
<?php echo Form::submit('Delete Cate',array('class' => 'btn btn-default')); ?>

 </div>
</li>  


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</ul>
<?php echo Form::close(); ?>  

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>