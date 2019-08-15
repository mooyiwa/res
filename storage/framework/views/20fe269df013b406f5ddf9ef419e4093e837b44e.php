<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="single">

    <div class="top">
<div class="container">

<?php echo $__env->make('includes.logonav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    </div>


</div><!--class="container" -->
</div>


<div class="mid page">
<div class="container">
    <div class="row">
        <div class="col-md-7">

       <?php echo $__env->yieldContent('listing'); ?>
       
        </div>
        <div class="col-md-5">
       <?php echo $__env->yieldContent('cates'); ?>
        </div>
        </div>


</div><!--class="container" -->
</div>


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



</body>
</html>
