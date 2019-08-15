<?php $__env->startSection('editasset'); ?>


<?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php echo Form::open(array('url' => '/user/edit_asset/'.$asset->id, 'action' => 'pagesController@editAsset') ); ?>

<ul>	
<li><span class='msg'><?php echo e(@$msg); ?></span></li>

<li><div class="input-group-lg">
  <?php echo Form::text('asset',$asset->asset,array('required','class' => 'form-control' )); ?>

 </div>
</li>

<li><div class="input-group-lg">
<?php echo Form::submit('Edit Asset',array('class' => 'btn btn-default')); ?>

 </div>
</li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>