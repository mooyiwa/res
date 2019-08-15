<?php $__env->startSection('bio'); ?>

<?php echo Form::open(array('action' => 'pagesController@createAsset','enctype' => 'multipart/form-data')); ?>   
<ul class="">  
<li><span class='msg'><?php echo e(@$msg); ?></span></li>

<li><div class="input-group-lg">
<label>New Asset</label>
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
  <input type="text" name="rate" class="form-control" placeholder="interest rate F.ex 10">
 </div>
</li>

<li><div class="input-group-lg">
  <input type="text" name="period" class="form-control" placeholder="Period in months F.ex 12">
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