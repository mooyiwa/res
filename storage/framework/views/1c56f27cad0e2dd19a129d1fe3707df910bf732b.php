<?php $__env->startSection('deletecate'); ?>


<?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

<?php echo Form::open(array('url' => '/user/delete_asset/'.$asset->id, 'action' => 'pagesController@deleteAsset') ); ?>

<ul>
<!--<li><span class='msg'><?php echo e(@$msg); ?></span></li>-->

<li><h3>Asset</h3></li>  

<li>
<div class="input-group-lg">
<?php echo $asset->asset; ?>

 </div>
</li> 

<li>
<div class="input-group-lg">
<?php echo Form::submit('Delete Asset',array('class' => 'btn btn-default')); ?>

 </div>
</li>  


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</ul>
<?php echo Form::close(); ?>  

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>