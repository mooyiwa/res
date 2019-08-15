<?php $__env->startSection('refer'); ?>
          
<?php echo Form::open(array('action' => 'pagesController@referFriend')); ?>

<ul class="">
<li><span class='msg'><?php echo e(@$msg); ?></span> </li>
<li><h3>Sign up a friend</h3></li>
<li>
 <div class="input-group-lg">
  <input type="text" name="user" class="form-control" required="required" 
  placeholder="username e.g johndoe">
 </div>
</li>

 <li>
  <div class="input-group-lg">
  <input type="text" name="email" class="form-control" required="required" 
  placeholder="jdoe@aol.com">
 </div>
</li>  


 <li>
  <div class="input-group input-group-lg">
<button type="submit" name="submit" class="btn btn-default">Sign up</button>
 </div>
</li> 


</ul>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>