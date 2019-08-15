<?php $__env->startSection('posts'); ?>


<table class="table">
    <tr><th>Post Title</th> <th>Timestamp</th></tr>
    <tbody id='go'>
        
   <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr class="bolder"><td><?php echo e($post->title); ?></td><td><?php echo e($post->timestamp); ?></td>
        
    <td><a href="/user/edit/<?php echo e($post->id); ?>"> <img src="<?php echo e(URL::asset('img/edit.png')); ?>" /> </a></td>
    <td><a href='/user/delete/<?php echo e($post->id); ?>'> <img src="<?php echo e(URL::asset('img/delete.png')); ?>" /> </a></td>
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
</tbody></table> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>