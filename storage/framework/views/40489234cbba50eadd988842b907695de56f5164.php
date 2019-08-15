<?php $__env->startSection('listing'); ?>
<ul class="listing">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <li style="margin-top: 20px;"><b><?php echo e($post->title); ?></b></li><br />
                        <li class=""><?php echo e($post->fname); ?></li>
                        <li class=""><?php echo e($post->location); ?></li><br />
                        <li class="details"><?php echo $post->post; ?></li>


              <?php if (! ($post->url == '')): ?>

              <li><a href="<?php echo e($post->url); ?>" target="_blank"><button style="margin-top: 15px;">Apply</button></a></li>
              <?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('cates'); ?>
<ul class="cates">
<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <li><a href="/cate/<?php echo e($cate->cate); ?>"> <?php echo e($cate->cate); ?> </a></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.single', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>