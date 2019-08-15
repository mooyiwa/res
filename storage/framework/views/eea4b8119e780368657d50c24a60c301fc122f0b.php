<?php $__env->startSection('how_it_works_content'); ?>

<?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php echo Form::open(array('action' => 'pagesController@updateHowItWorksContent')); ?>

<ul class="">
<li><span class='msg'><?php echo e(@$msg); ?></span> </li>

 <li>
  <div class="input-group-lg">
  <input type="text" name="title" class="form-control" value="<?php echo e($work->title); ?>" required="required" 
  placeholder="">
 </div>
</li> 

 <li>
  <div class="input-group-lg">
  <textarea name="how" class="" placeholder="" id="textarea"><?php echo e($work->how); ?></textarea> 
 </div>
</li> 


 <li>
  <div class="input-group input-group-lg">
<button type="submit" name="submit" class="btn btn-default">Update</button>
 </div>
</li> 


</ul>

<?php echo Form::close(); ?>                
                  

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>