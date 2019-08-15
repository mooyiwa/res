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
        <div class="col-md-3">

       <?php echo $__env->yieldContent('avatar'); ?>
        </div>
        <div class="col-md-6">

       
       
       <?php echo $__env->yieldContent('listing'); ?>
        </div>
        </div>


</div><!--class="container" -->
</div>


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script><!--for pagination-->
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.js')); ?>" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/paginator.js')); ?>" charset="utf-8"></script>

<script type='text/javascript'>
$k = jQuery.noConflict(); 
$k(document).ready(function() {
$k('ul.listing li:odd').css('background-color','#f8fafb');
$k('ul.listing li:even').css('background-color','#99c');
$k('ul.listing li:even').css('color','snow');
});
</script>

<script type='text/javascript'>
$j = jQuery.noConflict(); 
$j(document).ready(function() {
$j('ul.listing').pagination();

 });
</script>

</body>
</html>
