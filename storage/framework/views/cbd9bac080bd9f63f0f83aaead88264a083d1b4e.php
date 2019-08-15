<?php $__env->startSection('listing'); ?>
<ul>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <li style="margin-top: 20px;" class="title"><b style="font-size: 1.5em"><?php echo e($post->title); ?></b></li><br />
                        <li class="details"><?php echo $post->post; ?></li><br />

<?php if($post->auth != session()->get('logged')): ?>
  <li>Score this post <a href="/user/score/<?php echo e($post->id); ?>"><img src="<?php echo e(URL::asset('img/score.png')); ?>" /></a> <?php echo e($post->score); ?></li>
<?php endif; ?>  
            

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('author'); ?>
<ul class="cates">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <li>@<a href="<?php echo e(URL::asset('')); ?><?php echo e($post->auth); ?>"><?php echo e($post->fname); ?> </a></li>
 <li> <?php echo e($post->start); ?> </li><br />
 <li> <?php echo e($post->cate); ?> </li><br />



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>