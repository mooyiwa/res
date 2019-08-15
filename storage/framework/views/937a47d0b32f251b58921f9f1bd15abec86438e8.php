<?php $__env->startSection('all-assets'); ?>


<table class="table" style='margin-top: 45px;'>
    <tr><th>Assets</th></tr>
    <tbody id='go'>
        
   <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr class="bolder">

    <td><?php echo e($asset->asset); ?></td>
        
    <td><a href="/user/edit_asset/<?php echo e($asset->id); ?>"> <img src="<?php echo e(URL::asset('img/edit.png')); ?>" /> </a></td>
    <td><a href='/user/delete_asset/<?php echo e($asset->id); ?>'> <img src="<?php echo e(URL::asset('img/delete.png')); ?>" /> </a></td>
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
</tbody></table> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>