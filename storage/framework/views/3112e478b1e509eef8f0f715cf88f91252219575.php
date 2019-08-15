<?php $__env->startSection('logged'); ?>

<?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('editpost'); ?>

<p class='msg'><?php echo e(@$msg); ?></p>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php echo Form::open(array('url' => '/user/edit/'.$post->id, 'action' => 'pagesController@editPost') ); ?>

<ul>

<li>Job Title</li>
<li><?php echo Form::text('title',$post->title,array('required','class' => 'ent' )); ?></li>

<li>Location</li>
<li><?php echo Form::text('location',$post->location,array('required','class' => 'ent' )); ?></li>

<li>Application URL</li>
<li><?php echo Form::text('url',$post->url,array('required','class' => 'ent')); ?></li>

<li>Short Description</li>
<li><?php echo Form::textarea('short',$post->short,array('required','class' => 'textarea' )); ?></textarea></li>

<li>Full Job Description</li>
<li><?php echo Form::textarea('post',$post->post,array('required','id' => 'textarea','class' => 'textarea' )); ?></li>

<li><?php echo Form::submit('Edit Post',array('class' => 'button')); ?></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>