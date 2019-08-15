<?php $__env->startSection('editasset'); ?>


<?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php echo Form::open(array('url' => '/admin/edit_asset/'.$asset->id, 'action' => 'pagesController@editAsset') ); ?>

<ul>	
<li><span class='msg'><?php echo e(@$msg); ?></span></li>

<li><div class="input-group-lg">
  <?php echo Form::text('asset',$asset->asset,array('required','class' => 'form-control', 'placeholder' => 'Asset' )); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <?php echo Form::text('location',$asset->location,array('required','class' => 'form-control', 'placeholder' => 'location' )); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <?php echo Form::text('rate',$asset->rate,array('required','class' => 'form-control', 'placeholder' => 'rate' )); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <?php echo Form::text('period',$asset->period,array('required','class' => 'form-control', 'placeholder' => 'period' )); ?>

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