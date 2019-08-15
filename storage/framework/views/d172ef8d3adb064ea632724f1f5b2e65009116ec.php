<?php $__env->startSection('top_post'); ?>
<table class="top_post" style="position: relative;left: 32px">

<?php $__currentLoopData = $top_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr><td><img src="<?php echo e(URL::asset('post_images')); ?>/<?php echo e($top_post->cate); ?>.jpg" /></td>
                    <td class="title" style="word-wrap: break-word;">
                        <a href="/post/<?php echo e($top_post->id); ?>"><h4><?php echo e($top_post->title); ?></h4></a>
                        
                    <?php echo e($top_post->fname); ?></td>
                    </tr>                    
                                         

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table><br />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('star_listing'); ?>
<ul class="star_listing">

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><a href="/post/<?php echo e($post->id); ?>">
                        <h3 style="margin-top: 75px;"><?php echo e($post->title); ?></h3></a>
                        
                    <?php echo e($post->fname); ?></li>                                                   

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('tuts_listing'); ?>
<ul class="listing">

<?php $__currentLoopData = $tuts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tut): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><a href="/post/<?php echo e($tut->id); ?>"><?php echo e($tut->title); ?></a>
                        <br />
                    <?php echo e($tut->fname); ?></li>

                                                          
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('startups'); ?>

<!--<div class="feat"><img src="<?php echo e(URL::asset('img')); ?>/startups.jpg" /></div>-->
<ul class="s_list">

<?php $__currentLoopData = $s_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><a href="/post/<?php echo e($s_post->id); ?>"><?php echo e($s_post->title); ?></a>
                        <br />
                    <?php echo e($s_post->fname); ?>

                        <br /><br />
                    <?php echo e($s_post->cate); ?>

                   </li>

                                                          

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>