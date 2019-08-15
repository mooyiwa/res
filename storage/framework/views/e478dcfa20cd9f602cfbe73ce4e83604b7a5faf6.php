<?php $__env->startSection('signin'); ?>


<?php echo Form::open(array('action' => 'pagesController@log_in')); ?>


<ul class="sign">
<li><p class='msg' style="position:relative; left:-6px;"><?php echo e(@$msg); ?></p></li>

<li><div class="input-group input-group-lg">
  <input type="text" name="user" class="form-control" placeholder="Username" required="required" v-model="user">
 </div></li>

 <li><div class="input-group input-group-lg"> 
  <input type="password" name="pass" class="form-control" placeholder="Password" required="required" v-model="pass">
</div></li>

<li><button type="submit" name=""submit class="btn btn-default">Sign in</button></li>
<li><span style="color: snow; margin-top: 10px">New User? <a href="/site/signup">Sign Up!</a></span></li>
<li><span style="color: snow; margin-top: 10px"><a href="/site/recover">Forgot password?</a></span></li>

</ul>

<?php echo Form::close(); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>