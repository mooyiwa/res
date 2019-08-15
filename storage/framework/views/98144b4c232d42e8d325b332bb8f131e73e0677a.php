<?php $__env->startSection('listing'); ?>
<ul class="listing">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                <li>
                   <table class="listing">
                        <tbody>
                        <tr><td class="em"><?php echo e($post->title); ?></td></tr>
                        <tr><td class="apad"><?php echo e($post->fname); ?></td></tr>
                    <tr><td></td><td><img src="<?php echo e(URL::asset('img/fist.png')); ?>" /></td></tr>
                    <tr><td><?php echo e($post->cate); ?></td>
                        <td><?php echo e($post->start); ?></td><td><a href="/post/<?php echo e($post->id); ?>">Go to article</a></td>
                    </tr>

                     </tbody>
                    </table>
                </li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>