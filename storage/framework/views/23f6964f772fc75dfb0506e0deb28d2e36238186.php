<?php $__env->startSection('plans'); ?>
<table class="listing" style='margin-top: 65px;'>
<tbody>
<tr><td class="apad">Asset</td>
                            <td class="apad">Inv. Period</td>
                            <td class="apad">Rate(%)</td>
                            <td class="apad">Cap In</td>
                            <td class="apad">Cap Out</td>
                        </tr>
<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        
                        <tr><td class="apad"><?php echo e($plan->asset); ?></td>
                            <td class="apad"><?php echo e($plan->period); ?></td>
                            <td class="apad"><?php echo e($plan->rate); ?></td>
                            <td class="apad"><?php echo e($plan->cap_in); ?></td>
                            <td class="apad"><?php echo e($plan->cap_out); ?></td>
                        </tr>
                       

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>