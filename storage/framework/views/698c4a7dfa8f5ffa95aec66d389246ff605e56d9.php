<?php $__env->startSection('signup'); ?>



                     <?php echo Form::open(array('url' => '/site/signup', 'action' => 'pagesController@signUp')); ?>


                  <ul class="sign">
<li><p class='msg' style="position:relative; left:-6px;"><?php echo e(@$msg); ?></p></li>

<li>
  <div class="input-group-lg">
<input type='text' name='user' class="form-control" placeholder="username" required="required" />
 </div>
</li>

 <li><div class="input-group-lg"> 
<input type='email' name='email' class="form-control" placeholder="e-mail" required="required" />
</div></li>

<li>
  <div class="input-group-lg">
                  
                                        <select name='who' class="form-control" required="required">
                                        <option selected value=''> ----
                                        <option>Author</option>
                                        <option>Reader</option>

                                    </select>
                                    
 </div>
</li>

<li>
  <div class="input-group-lg">
<button type="submit" name="submit" style="margin-top: 3px" class="btn btn-default">Sign Up</button>  </div>
</li>

<li>
  <div class="input-group input-group-lg">
<span style="color: snow; margin-top: 10px">Have an account? <a href="/site/signin">Sign In!</a></span>
</li>

</ul>

                        <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.signup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>