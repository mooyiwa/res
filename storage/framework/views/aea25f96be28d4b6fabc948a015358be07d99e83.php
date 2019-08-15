<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
             
<?php $__env->stopSection(); ?>


<?php $__env->startSection('deletepost'); ?>

<p class='msg'><?php echo e(@$msg); ?></p>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

<?php echo Form::open(array('url' => '/user/delete/'.$post->id, 'action' => 'pagesController@deletePost') ); ?>

<ul>

<li><h3>Job Title</h3></li>  
<li><?php echo $post->title; ?></li>

<li><h3>Location</h3></li>   
<li><?php echo $post->location; ?></li>
 
<li><h3>Application URL</h3></li>   
<li><?php echo $post->url; ?></li>
      
<li><h3>Short Description</h3></li>  
<li><?php echo $post->short; ?></textarea></li>   <li><br /></li> 
    
  
<li><?php echo Form::submit('Delete Post',array('class' => 'button')); ?></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</ul>
<?php echo Form::close(); ?>  

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>