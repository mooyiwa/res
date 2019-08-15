<?php $__env->startSection('editpost'); ?>


<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php echo Form::open(array('url' => '/user/edit/'.$post->id, 'action' => 'pagesController@editPost', 'class'=>'form', 'data-parsley-validate' => '') ); ?>

<ul>	
<li><span class='msg'><?php echo e(@$msg); ?></span></li>

<li><div class="input-group-lg">
<span class="form-control"><?php echo e($post->cate); ?></span>
 </div>
</li>

<li><div class="input-group-lg">
  <?php echo Form::text('title',$post->title,array('class' => 'form-control' , 'required' => '')); ?>

 </div>
</li>

<li><div class="input-group-lg">

  <textarea name="post" id="textarea"
  placeholder="Post" required=""><?php echo $post->post; ?></textarea>
 </div>
</li>

<li><div class="input-group-lg">
<?php echo Form::submit('Edit Post',array('class' => 'btn btn-default')); ?>

 </div>
</li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>