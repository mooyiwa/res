<?php $__env->startSection('lend'); ?>

<?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

<?php echo Form::open(array('url' => '/user/lend/'.$asset->id, 'action' => 'pagesController@lend') ); ?>



<ul class="">  
<li><span class='msg'><?php echo e(@$msg); ?></span></li>

<li><div class="input-group-lg">

</div>
</li>

<li><label for="">Start Lending</label></li>

<li><div class="input-group-lg">
  <input type="hidden" name="first" class="form-control" value="<?php echo e($detail->first); ?>">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="last" class="form-control" value="<?php echo e($detail->last); ?>">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="asset" class="form-control" value="<?php echo e($asset->asset); ?>"><?php echo e($asset->asset); ?>

 </div>
</li>
<li><div class="input-group-lg">
  <input type="hidden" name="location" class="form-control" value="<?php echo e($asset->location); ?>"><?php echo e($asset->location); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="amt" class="form-control" value="<?php echo e($asset->amount); ?>"><?php echo e($asset->amount); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="rate" class="form-control" value="<?php echo e($asset->rate); ?>"><?php echo e($asset->rate); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="period" class="form-control" value="<?php echo e($asset->period); ?>"><?php echo e($asset->period); ?>

 </div>
</li>
 
 <li><div class="input-group-lg">
<button type="submit" name="submit" class="btn btn-default">Lend on Asset</button> 
</div>
</li>


</ul>

<?php echo Form::close(); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>