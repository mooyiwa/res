<?php $__env->startSection('deletepost'); ?>


<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

<?php echo Form::open(array('url' => '/user/delete/'.$post->id, 'action' => 'pagesController@deletePost') ); ?>

<ul>
<li><span class='msg'><?php echo e(@$msg); ?></span></li>

<li><h3>Post Title</h3></li>  

<li>
<div class="input-group-lg">
<?php echo $post->title; ?>

 </div>
</li> 

<li>
<div class="input-group-lg">
<?php echo Form::submit('Delete Post',array('class' => 'btn btn-default')); ?>

 </div>
</li>  


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</ul>
<?php echo Form::close(); ?>  

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>