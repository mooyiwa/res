<?php $__env->startSection('lend_check'); ?>

<?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

<?php echo Form::open(array('url' => '/user/lend/'.$asset->id, 'action' => 'pagesController@lendSubscribe') ); ?>

<div class="card" style="border: none;">
<img src="/photos/<?php echo e($asset->asset_id); ?>"  alt="..." width='60%' height= '60%';>
  <div class="card-body">
    <h5 class="card-title"><?php echo e($asset->asset); ?> </h5>
    <p class="card-text"><label for=""> <a href="/pdfs/<?php echo e($asset->pdf); ?>" target="_blank">Click here to view Brochure</a></label></p>
    <p class="card-text"> Project Type: <?php echo e($asset->type); ?></p>
    <p class="card-text"> Location: <?php echo e($asset->location); ?> </p>
    
    <p class="card-text">  Min. Investment: &#8358; <?php echo e(number_format($asset->amount_1, 2)); ?></p>
    <p class="card-text"> Interest rate: Upto 30% </p>
    <p class="card-text"> Term: <?php echo e($asset->period); ?> months </p>

    
    <input type="hidden" name="first" class="form-control" value="<?php echo e($detail->first); ?>">
    <input type="hidden" name="last" class="form-control" value="<?php echo e($detail->last); ?>">
    <input type="hidden" name="email" class="form-control" value="<?php echo e($detail->email); ?>">
    <input type="hidden" name="asset" class="form-control" value="<?php echo e($asset->asset); ?>">
    <input type="hidden" name="location" class="form-control" value="<?php echo e($asset->location); ?>">
    <input type="hidden" name="period" class="form-control" value="<?php echo e($asset->period); ?>">


    <h5 class="card-title">Lending Options</h5>
    <p class="card-text"> <?php if(!empty($asset->amount_1)): ?>
    <li>&#8358; <?php echo e(number_format($asset->amount_1, 2)); ?> at <?php echo e($asset->rate_1); ?>% interest on investment</li>
    <?php endif; ?>
    </p>
    <p class="card-text"> 
    <?php if(!empty($asset->amount_2)): ?>
    <li>&#8358; <?php echo e(number_format($asset->amount_2, 2)); ?> at <?php echo e($asset->rate_2); ?>% interest on investment</li>
    <?php endif; ?>
    </p>
    <p class="card-text">
    <?php if(!empty($asset->amount_3)): ?>
    <li>&#8358; <?php echo e(number_format($asset->amount_3, 2)); ?> at <?php echo e($asset->rate_3); ?>% interest on investment</li>
    <?php endif; ?>
    </p>
    <p class="card-text">
    <?php if(!empty($asset->amount_4)): ?>
    <li>&#8358; <?php echo e(number_format($asset->amount_4, 2)); ?> at <?php echo e($asset->rate_4); ?>% interest on investment</li>
    <?php endif; ?>
    </p>

    <h5 class="card-title">Choose Option</label></h5>

    <select name="amount" id="" style="width: 50%;">
<option value="<?php echo e($asset->amount_1); ?>"><?php echo e($asset->amount_1); ?></option>
<option value="<?php echo e($asset->amount_2); ?>"><?php echo e($asset->amount_2); ?></option>
<option value="<?php echo e($asset->amount_3); ?>"><?php echo e($asset->amount_3); ?></option>
<option value="<?php echo e($asset->amount_4); ?>"><?php echo e($asset->amount_4); ?></option>
</select>

    <button type="submit" name="submit" class="btn btn-primary">Start Lending</button> 
    
  </div>
</div>

<?php echo Form::close(); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.user-check', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>