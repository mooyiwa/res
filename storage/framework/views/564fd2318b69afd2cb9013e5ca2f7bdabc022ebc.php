<?php $__env->startSection('post'); ?>
<div id="editSection"></div>

<?php echo Form::open(array('action' => 'pagesController@post','class'=>'form', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data')); ?>

<ul>
<li><span class='msg'><?php echo e(@$msg); ?></span></li>

<li><div class="input-group-lg">
<select name="cate" class="form-control">

    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> {
    <option><?php echo e($cate->cate); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select>
 </div>
</li>



<li><div class="input-group-lg">
	<?php echo Form::text('title',null,array('class' => 'form-control', 'placeholder' => 'Post Title', 'required' => 'required' )); ?>

 </div>
</li>

<li><div class="input-group-lg">
<?php echo Form::textarea('post',null,array('class' => '','id' => 'textarea', 'placeholder' => 'Post', 'required' => ''  )); ?>

 </div>
</li>

<li><div class="input-group-lg">
<?php echo Form::submit('Post',array('class' => 'btn btn-default')); ?>

 </div>
</li>

</ul>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.user-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>