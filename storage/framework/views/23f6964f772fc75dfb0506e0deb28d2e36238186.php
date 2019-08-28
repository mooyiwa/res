<?php $__env->startSection('plans'); ?>
<table class="listing" style='margin-top: 65px;'>

<tr><td class="apad">Asset</td>
                            <td class="apad">Period</label></td>
                            
                            <td class="apad">Investment(&#8358;)</td>
                            <td class="apad">Rate(%)</td>
                            <td class="apad">Maturity(&#8358;)</td>
                            <td class="apad">Start Date</td>
                            <td class="apad">Maturity Date</td>
                            <td class="apad">Day</td>
                        </tr>
                        <tbody id='go'>
<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <tr><td class=""><?php echo e($plan->asset); ?></td>
                            <td class=""><?php echo e($plan->period); ?> months</td>
                            
                            <td class=""><?php echo e(number_format($plan->credit, 2)); ?></td>
                            <td class=""><?php echo e($plan->rate); ?></td>
                            <td class=""><?php echo e(number_format($plan->credit_out, 2)); ?></td>
                            <td class=""><?php echo e($plan->start); ?></td>
                            <td class=""><?php echo e($plan->finish); ?></td>
                            <td class="">
                           <?php
                            $today = date('Y-m-d'); 
                           // $today = '2020-08-22';
                            $today = date_create($today);
                            $start = date_create($plan->start);
                            $interval = date_diff($today,$start); 
                           ?>
                            <?php echo e($interval->format('%a')); ?>

                            </td>
                            <?php if($interval->format('%a') >=365): ?> <button> Withdraw </button> <?php endif; ?> 
                        </tr>

                     
                       

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>