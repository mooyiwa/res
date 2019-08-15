<?php $__env->startSection('earnings'); ?>
          

<table class="earnings">
	<tr>
		<td> <b>Wallet(NGN)</b> </td><td> <b>Current Earnings(NGN)</b> </td>
	</tr>

	<tr>
		<td> <?php echo e($earnings->credit); ?> </td><td> <?php echo e($earnings->bonus); ?> </td>
	</tr>
</table>

<table class="earnings" style="position: relative;top: 20px;">
	<tr>
		<td> <b>*Minimum Payout on Earnings: NGN 5000.00</b> </td>
	</tr>
</table>




<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>