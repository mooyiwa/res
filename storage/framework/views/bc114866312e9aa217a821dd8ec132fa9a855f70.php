<?php if(session()->get('who') == 'user'): ?>

<?php $__env->startSection('inv_assets'); ?>

<h3 style="position: relative; top: 15px;">Open Investments</h3>
<ul class="inv"><div class="row">
<?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      

<div class="col-md-4" style="margin-top:25px;">
<div class="card">
<a href="/user/lend/<?php echo e($asset->id); ?>"><img src="/photos/<?php echo e($asset->asset_id); ?>" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <h5 class="card-title"><?php echo e($asset->asset); ?> </h5>
    <p class="card-text"> Project Type: <?php echo e($asset->type); ?></p>
    <p class="card-text"><?php echo e($asset->location); ?> <br>
       Min. Investment: &#8358; <?php echo e(number_format($asset->amount_1, 2)); ?></p>
    <p class="card-text"> Interest rate: Upto 30% <br>
       Term: <?php echo e($asset->period); ?> months</p>

    <p class="card-text"> Loan Amount: &#8358; <?php echo e(number_format($asset->total_loan, 2)); ?></p>
    <a href="/user/lend/<?php echo e($asset->id); ?>" class="btn btn-primary">Start Lending</a>
  </div>
</div>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</ul>

<?php $__env->stopSection(); ?>

<?php endif; ?>



<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>