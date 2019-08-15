<?php $__env->startSection('bio'); ?>
<p class='msg'><?php echo e(@$msg); ?></p>           
<?php echo Form::open(array('action' => 'pagesController@updateBio')); ?>

<ul class="">

<li>
 <div class="input-group-lg">
  <input type="text" name="full" class="form-control" value="<?php echo e($details->fullname); ?>" required="required" v-model="full">
 </div>
</li>

 <li>
  <div class="input-group-lg">
  <input type="text" name="email" class="form-control" value="<?php echo e($details->email); ?>" required="required" v-model="email">
 </div>
</li>  

 <li>
  <div class="input-group-lg">
  <input type="text" name="phone" class="form-control" value="<?php echo e($details->phone); ?>" required="required" v-model="phone">
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



<?php $__env->startSection('cates'); ?>
<ul class="cates">
<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <li><a href="/cate/<?php echo $cate->cate; ?>"> <?php echo $cate->cate; ?> </a></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>