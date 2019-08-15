<?php $__env->startSection('single'); ?>
<ul>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <li style="margin-top: 20px;" class="title"><b style="font-size: 1.5em"><?php echo e($post->title); ?></b></li><br />
                        <li class="details"><?php echo nl2br($post->post); ?></li>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('author'); ?>
<ul class="cates">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li> <h4><?php echo e($post->cate); ?></h4> </li>
 <li>@<a href="<?php echo e(URL::asset('')); ?><?php echo e($post->auth); ?>"><?php echo e($post->fname); ?></a></li>
 <li> <?php echo e($post->start); ?> </li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<br />

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.single', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>