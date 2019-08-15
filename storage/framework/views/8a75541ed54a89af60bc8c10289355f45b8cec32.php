<?php $__env->startSection('av_assets'); ?>
<ul class="listing">
<?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><img src="<?php echo e(URL::asset('img/$asset->asset_id')); ?>" /></li>   
                    <li class="em"><?php echo e($asset->asset); ?></li>
                    <li class="apad"><?php echo e($asset->location); ?></li>
                    <li class="apad"><?php echo e($asset->rate); ?></li>
                    <li class="apad"><?php echo e($asset->period); ?></li>                           

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>