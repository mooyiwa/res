<?php $__env->startSection('all_assets'); ?>
<table class="listing" style='margin-top: 75px;'>
<tbody>
<tr>
                            <td class="apad"><label>Asset</label></td>

                            <td class="apad"><label>Amount 1</label></td>
                            <td class="apad"><label>Rate 1(%)</label></td>

                            <td class="apad"><label>Amount 2</label></td>
                            <td class="apad"><label>Rate 2(%)</label></td>

                            <td class="apad"><label>Amount 3</label></td>
                            <td class="apad"><label>Rate 3(%)</label></td>

                            <td class="apad"><label>Amount 4</label></td>
                            <td class="apad"><label>Rate 4(%)</label></td>  

                            <td class="apad"><label>Period</label></td>
                        
                        </tr>
<?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        
                        <tr><td class="apad"><?php echo e($asset->asset); ?></td>

                            <td class="apad"><?php echo e($asset->amount_1); ?></td>
                            <td class="apad"><?php echo e($asset->rate_1); ?></td>

                            <td class="apad"><?php echo e($asset->amount_2); ?></td>
                            <td class="apad"><?php echo e($asset->rate_2); ?></td>

                            <td class="apad"><?php echo e($asset->amount_3); ?></td>
                            <td class="apad"><?php echo e($asset->rate_3); ?></td>

                            <td class="apad"><?php echo e($asset->amount_4); ?></td>
                            <td class="apad"><?php echo e($asset->rate_4); ?></td>

                            <td class="apad"><?php echo e($asset->period); ?></td>
                            <td><a href="/admin/edit_asset/<?php echo e($asset->id); ?>"><img src="<?php echo e(URL::asset('img/edit.png')); ?>" /></a></td>
                            <td><a href="/admin/delete_asset/<?php echo e($asset->id); ?>"><img src="<?php echo e(URL::asset('img/delete.png')); ?>" /></a></td>
                            
                        </tr>
                       

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>