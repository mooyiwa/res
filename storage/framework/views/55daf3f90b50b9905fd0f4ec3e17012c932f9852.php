<?php $__env->startSection('listing'); ?>
<ul class="listing">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                <li>
                    <table class="listing">
                        <tbody>
                        <tr><td class="em"><?php echo e($post->title); ?></td></tr>
                        <tr><td class="apad"><?php echo e($post->fname); ?></td></tr>
                        <td class="apad"><?php echo e($post->location); ?></td></tr>
                    <tr><td class="details"><?php echo e($post->short); ?></td></tr>
                    <tr><td>Deadline: <?php echo e($post->finish); ?></td><td><a href="/single/<?php echo e($post->id); ?>">Apply</a></td></tr>

                     </tbody>
                    </table>
                </li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('cates'); ?>
<ul class="cates">
<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <li><a href="/cate/<?php echo $cate->cate; ?>"> <?php echo $cate->cate; ?> </a></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>