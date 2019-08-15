<?php $__env->startSection('refer'); ?>
          
<?php echo Form::open(array('action' => 'pagesController@referFriend','class'=>'form')); ?>

<ul class="">
<li><span class='msg'><?php echo e(@$msg); ?></span> </li>
<li>
 <div class="input-group-lg">
  <input type="text" name="user" class="form-control" 
  placeholder="username e.g johndoe">
 </div>
</li>

 <li>
  <div class="input-group-lg">
  <input type="text" name="email" class="form-control"
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