<?php $__env->startSection('bio'); ?>
          
<?php echo Form::open(array('action' => 'pagesController@updateReaderBio', 'class'=>'form', 'data-parsley-validate' => '')); ?>

<ul class="">
<li><span class='msg'><?php echo e(@$msg); ?></span> </li>
<li>
 <div class="input-group-lg">
  <input type="text" name="first" class="form-control" value="<?php echo e($details->first); ?>" 
  placeholder="John" required="">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="text" name="last" class="form-control" value="<?php echo e($details->last); ?>"
  placeholder="Doe" required="">
 </div>
</li>

 <li>
  <div class="input-group-lg">
  <input type="text" name="email" class="form-control" value="<?php echo e($details->email); ?>" 
  placeholder="jdoe@aol.com" required="">
 </div>
</li>  

 <li>
  <div class="input-group-lg">
  <input type="text" name="phone" class="form-control" value="<?php echo e($details->phone); ?>" 
  placeholder="080000">
 </div>
</li>

<li>
 <div class="input-group-lg">
  <input type="text" name="bank" class="form-control" value="<?php echo e($details->bank); ?>"
  placeholder="Bank">
 </div>
</li>

 <li>
  <div class="input-group-lg">
  <input type="text" name="account_name" class="form-control" value="<?php echo e($details->account_name); ?>" 
  placeholder="Account Name">
 </div>
</li>  

 <li>
  <div class="input-group-lg">
  <input type="text" name="account_no" class="form-control" value="<?php echo e($details->account_no); ?>" 
  placeholder="Bank Account Number">
 </div>
</li>


 <li>
  <div class="input-group input-group-lg">
<button type="submit" name="submit" class="btn btn-default">Update Bio</button>
 </div>
</li> 


</ul>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>