<?php $__env->startSection('pass'); ?>

<?php echo Form::open(array('action' => 'pagesController@changePass', 'class'=>'form', 'data-parsley-validate' => '')); ?>

<ul>
<li><span class="msg"><?php echo e(@$msg); ?> </span></li>


<li><div class="input-group-lg">
<label>New Password</label>
</div>
</li>

 <li>
 	<div class="input-group-lg">
<input type="password" name="newpass" class="form-control" placeholder="password" required="" />
</div>
</li>


 <li><div class="input-group-lg">
<button type="submit" name="submit" class="btn btn-default">Change</button> 
</div>
</li>

</ul>
<?php echo Form::close(); ?>     
    
<?php $__env->stopSection(); ?>	









<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>