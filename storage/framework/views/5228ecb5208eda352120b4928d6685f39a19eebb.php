<?php $__env->startSection('listing'); ?>
<ul class="listinge">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li>
                   <table class="listing">
                        <tbody>
                    <h3 class="em"><a href="/post/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
                    <tr><td><img src="<?php echo e(URL::asset('img/fist.png')); ?>" /> <?php echo e($post->score); ?></td></tr>
                    <tr><td><?php echo e($post->cate); ?></td><td class="apad"><?php echo e($post->fname); ?></td>
                    </tr>

                     </tbody>
                    </table>
                </li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.cate_posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>