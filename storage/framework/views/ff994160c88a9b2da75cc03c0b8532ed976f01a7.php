<?php $__env->startSection('recover'); ?>



<?php echo Form::open(array('action' => 'pagesController@recoverPass')); ?>

                              

                            <ul class="sign">
<li><p class='msg' style="position:relative; left:-6px;"><?php echo e(@$msg); ?></p></li>

<li>
<div class="input-group input-group-lg">
<input type='text' name='user' class="form-control" placeholder="Username" required="required" />
</div>
</li>

 <li><div class="input-group input-group-lg"> 
<input type='text' name='email' class="form-control" placeholder="e-mail address" required="required" /></div></li>

<li>
<div class="input-group input-group-lg">
<input type='password' name='secret' class="form-control" placeholder="Secret Passcode" required="required" /></div>
</li>

<li>
<div class="input-group input-group-lg">
<button type="submit" name="submit" class="btn btn-default">Recover Pass</button>
</div>
</li>

<li>
<div class="input-group input-group-lg">
<span style="color: snow; margin-top: 10px">Have an account? <a href="/site/signin">Sign In!</a></span>
</div>
</li>


</ul>
                        <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>