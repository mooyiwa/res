<?php $__env->startComponent('mail::message'); ?>


<h2>Hello Buddy. Your peinmoney.com account has been created.</h2>
<p>Your Username is : <b><?php echo e($details->username); ?></b></p>
<p>Your password is: <b><?php echo e($details->pass); ?></b></p>
<p>Your <b>secret password </b> for password recovery purposes is: <?php echo e($details->secret); ?></p>
<p>*Please change your password to a more secure one.</p>

<?php $__env->startComponent('mail::button', ['url' => 'https://peinmoney.com/site/signin']); ?>
Sign In
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::panel', ['url' => 'https://peinmoney.com']); ?>
PEIN. Together We're Better.
<?php echo $__env->renderComponent(); ?>


Enjoy,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
