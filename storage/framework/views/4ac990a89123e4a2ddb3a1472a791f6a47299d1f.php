<?php $__env->startSection('avatar'); ?>

<ul class="bio">
  <?php if(empty($me->photo_id)): ?>
     <li><img class="bio" src="<?php echo e(URL::asset('photos')); ?>/d_avatar.png" /></li><br />
  <?php endif; ?> 

  <?php if(!empty($me->photo_id)): ?>
     <li><img class="bio" src="<?php echo e(URL::asset('photos')); ?>/<?php echo e($me->photo_id); ?>" /></li><br />
  <?php endif; ?>  
     <li><?php echo e($me->fullname); ?></li><br />
     <li>Facebook: <?php echo e($me->fb); ?></li>
     <li>Twitter: <?php echo e($me->twitter); ?></li>
     <li>LinkedIn: <?php echo e($me->linkedin); ?></li>

</ul>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('me'); ?>

<ul class="me" style="margin-top: 25px">
<li class="title" style="font-size: 1.5em;"><b><?php echo $me->title; ?></b> </li><br />
<li>
   <?php echo $me->me; ?>

</li>
</ul>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('listing'); ?>
<ul class="listing">
	<h4 style="margin-top: 25px"></h4>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                <li>
                    <table class="listing">
                        <tbody id="go">
                        <tr><td class="em"><a href="/post/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></td></tr>
                        <tr><td class="apad"><?php echo e($post->cate); ?></td></tr>
                    <tr><td><img src="<?php echo e(URL::asset('img/fist.png')); ?>" /> <?php echo e($post->score); ?></td>
                      <td><?php echo e($post->start); ?></td>
                    </tr>

                     </tbody>
                    </table>
                </li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.slash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>