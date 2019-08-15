<?php $__env->startComponent('mail::message'); ?>


<h2>Hello Buddy. Your Scribble57 account has been created.</h2>
<p>Your Username is : <b><?php echo e($details->username); ?></b></p>
<p>Your password is: <b>pass8008!</b></p>
<p>Your <b>secret password </b> for password recovery purposes is: <?php echo e($details->secret); ?></p>
<p>*Please change your password to a more secure one once.</p>

<?php $__env->startComponent('mail::button', ['url' => 'https://scribble57.com']); ?>
Sign In
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::panel', ['url' => 'https://scribble57.com']); ?>
Scribble57. Growing a community of authors and readers.
<?php echo $__env->renderComponent(); ?>


Enjoy,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
