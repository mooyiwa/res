<?php $__env->startSection('lend_check'); ?>

<?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

<?php echo Form::open(array('url' => '/user/lend/'.$asset->id, 'action' => 'pagesController@lendSubscribe') ); ?>



<ul class="lending">  
<li><span class='msg'><?php echo e(@$msg); ?></span></li>

<!-- <img src="/photos/<?php echo e($asset->asset_id); ?>"  alt="..." style='width: 50%;'> -->

<li><div class="input-group-lg">

</div>
</li>

<!-- <li><label for=""> <a href="/pdfs/<?php echo e($asset->pdf); ?>" target="_blank">Click here to view Brochure</a></label> -->

<li>
<embed src="<?php echo e(URL::asset('pdfs')); ?>/<?php echo e($asset->pdf); ?>" type="application/pdf" width="100%" height="500px" />
</li> 

<li><div class="input-group-lg">
  <input type="hidden" name="first" class="form-control" value="<?php echo e($detail->first); ?>">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="last" class="form-control" value="<?php echo e($detail->last); ?>">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="email" class="form-control" value="<?php echo e($detail->email); ?>">
 </div>
</li>

<li><label for="">Project</label></li>
<li><div class="input-group-lg">
  <input type="hidden" name="asset" class="form-control" value="<?php echo e($asset->asset); ?>"><?php echo e($asset->asset); ?>

 </div>
</li>

<li><div class="input-group-lg">
  <input type="hidden" name="location" class="form-control" value="<?php echo e($asset->location); ?>"><?php echo e($asset->location); ?>

 </div>
</li>

<li><label for="">Investment Period</label></li>

<li><div class="input-group-lg">
  <input type="hidden" name="period" class="form-control" value="<?php echo e($asset->period); ?>"><?php echo e($asset->period); ?>-months
 </div>
</li>

<li><label for="">Lending Options</label></li>
<?php if(!empty($asset->amount_1)): ?>
  <li>&#8358; <?php echo e(number_format($asset->amount_1, 2)); ?> at <?php echo e($asset->rate_1); ?>% interest on investment</li>
<?php endif; ?>

<?php if(!empty($asset->amount_2)): ?>
  <li>&#8358; <?php echo e(number_format($asset->amount_2, 2)); ?> at <?php echo e($asset->rate_2); ?>% interest on investment</li>
<?php endif; ?>

<?php if(!empty($asset->amount_3)): ?>
  <li>&#8358; <?php echo e(number_format($asset->amount_3, 2)); ?> at <?php echo e($asset->rate_3); ?>% interest on investment</li>
<?php endif; ?>

<?php if(!empty($asset->amount_4)): ?>
  <li>&#8358; <?php echo e(number_format($asset->amount_4, 2)); ?> at <?php echo e($asset->rate_4); ?>% interest on investment</li>
<?php endif; ?>


<li><label for="">Choose Option</label></li>

<li>
<select name="amount" id="" style="width: 50%;">
<option value="<?php echo e($asset->amount_1); ?>"><?php echo e($asset->amount_1); ?></option>
<option value="<?php echo e($asset->amount_2); ?>"><?php echo e($asset->amount_2); ?></option>
<option value="<?php echo e($asset->amount_3); ?>"><?php echo e($asset->amount_3); ?></option>
<option value="<?php echo e($asset->amount_4); ?>"><?php echo e($asset->amount_4); ?></option>
</select>
</li>
 
<li><div class="input-group-lg">
<button type="submit" name="submit" class="btn btn-primary">Start Lending</button> 
</div>
</li>


</ul>

<?php echo Form::close(); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.user-check', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>