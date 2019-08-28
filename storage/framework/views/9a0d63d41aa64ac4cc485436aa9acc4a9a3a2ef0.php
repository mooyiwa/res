<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="signup">
<?php echo $__env->make('includes.site_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    
       <div class="row"> 
        <div class="offset7 col-md-4 login">
            
            <?php echo $__env->yieldContent('signup'); ?>
            <?php echo $__env->yieldContent('signin'); ?>
            <?php echo $__env->yieldContent('recover'); ?>
           
       
        </div>
     </div>   
</div><!--class="container" -->
    <script src="<?php echo e(URL::asset('js/jquery.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/parsely.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('js/bootstrap.js')); ?>"></script>
 
<script>
    $n = jQuery.noConflict(); 
  $n(function () {
  $n('.form').parsley().on('field:validated', function() {
    var ok = $n('.parsley-error').length === 0;
    $n('.bs-callout-info').toggleClass('hidden', !ok);
    $n('.bs-callout-warning').toggleClass('hidden', ok);
  })
  
});
</script>
</body>
</html>
