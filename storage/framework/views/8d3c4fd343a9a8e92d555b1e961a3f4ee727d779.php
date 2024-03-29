<?php $__env->startSection('all-cates'); ?>


<table class="table">
    <tr><th>Cate</th></tr>
    <tbody id='go'>
        
   <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr class="bolder">

    <td><?php echo e($cate->cate); ?></td>
        
    <td><a href="/user/editcate/<?php echo e($cate->id); ?>"> <img src="<?php echo e(URL::asset('img/edit.png')); ?>" /> </a></td>
    <td><a href='/user/deletecate/<?php echo e($cate->id); ?>'> <img src="<?php echo e(URL::asset('img/delete.png')); ?>" /> </a></td>
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
</tbody></table> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>