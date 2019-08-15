<?php $__env->startSection('bio'); ?>

<?php echo Form::open(array('action' => 'pagesController@createAsset','enctype' => 'multipart/form-data')); ?>   
<ul class="">  
<li><span class='msg'><?php echo e(@$msg); ?></span></li>

<li><div class="input-group-lg">

</div>
</li>


<li><div class="input-group-lg">
  <input type="text" name="asset" class="form-control" placeholder="Asset">
 </div>
</li>
<li><div class="input-group-lg">
  <input type="text" name="location" class="form-control" placeholder="Ikoyi">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="text" name="amt" class="form-control" placeholder="Investment amt. e.g 550,000">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="text" name="rate" class="form-control" placeholder="interest rate in % e.g 10">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="text" name="period" class="form-control" placeholder="Investment Period in months e.g 12">
 </div>
</li>

<li>
<div class="input-group-lg">
<?php echo Form::file('image', array('class' => 'image')); ?>

</div>
</li>
 
 <li><div class="input-group-lg">
<button type="submit" name="submit" class="btn btn-default">Create</button> 
</div>
</li>


</ul>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>