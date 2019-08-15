<?php $__env->startComponent('mail::message'); ?>


<h2>Hello buddy. Your Scribble Reader account has been created.</h2>
<p>Your Username is : <?php echo e($details->username); ?></p>
<p>Your password is: pass8008!</p>
<p>Your <b>secret password </b> for password recovery purposes is: <?php echo e($details->secret); ?></p>
<p>*Please change your password to a more secure one once you sign in.</p>

<?php $__env->startComponent('mail::button', ['url' => 'https://scribble.ng']); ?>
Sign In
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::panel', ['url' => 'https://scribble.ng']); ?>
Scribble. Growing a community of authors and readers.
<?php echo $__env->renderComponent(); ?>


Enjoy,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
