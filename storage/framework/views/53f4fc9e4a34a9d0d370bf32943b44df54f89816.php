<?php $__env->startSection('faq_content'); ?>

<?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php echo Form::open(array('action' => 'pagesController@updateFaqsContent')); ?>

<ul class="">
<li><span class='msg'><?php echo e(@$msg); ?></span> </li>

 <li>
  <div class="input-group-lg">
  <textarea name="story" class="" placeholder="" id="editor"><?php echo e($faq->story); ?></textarea> 
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