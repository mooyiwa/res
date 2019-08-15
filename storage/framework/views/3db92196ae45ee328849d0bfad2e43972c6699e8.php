<?php $__env->startSection('signup'); ?>



<?php echo Form::open(array('url' => '/site/signup', 'action' => 'pagesController@signUp', 'class'=>'form', 'data-parsley-validate' => '')); ?>


<ul class="sign">
<li><h2>Get Started</h2></li>
<li><span class='msg' style="position:relative; left:-1px;"><?php echo e(@$msg); ?></span></li>

<li>
  <div class="bs-callout bs-callout-warning hidden">
  <h4>Oh snap!</h4>
  <p>This form seems to be invalid :(</p>
</div>
</li>

<li>
  <div class="input-group-lg">
<input type='text' name='user' class="form-control" placeholder="username" required="" />
 </div>
</li>

 <li><div class="input-group-lg"> 
<input type='email' name='email' class="form-control" placeholder="e-mail" required="" />
</div></li>


<li>
  <div class="input-group-lg">
<button type="submit" name="submit" style="margin-top: 3px" class="btn btn-default">Sign Up</button>  </div>
</li>

<li>
  <div class="input-group input-group-lg">
<span style="margin-top: 10px">Have an account? <a href="/site/signin">Sign In!</a></span>
</li>

</ul>


<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>