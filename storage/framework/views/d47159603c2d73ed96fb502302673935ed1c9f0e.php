<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="home">
    
    <div class="top">
<div class="container">
  
<?php echo $__env->make('includes.logo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <div class="row">
            <div class="container">
                <div class="col-md-offset-3 col-md-6">
            <p class="intro"> Self authored articles by authors like you. </p>
            <span> Authors earn. Readers earn.</span>
          </div>
         </div>
        </div>
        
        
    </div><!--class="container" -->
    
        
</div>


<div class="nav">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
       <?php echo $__env->yieldContent('cates'); ?> 
        </div>
      
        </div>
    
        
</div>
</div>

    
<div class="mid">
<div class="container">
    <div class="row">
        <div class="col-md-9">
            
       <?php echo $__env->yieldContent('listing'); ?> 
       <?php echo $__env->yieldContent('bio'); ?>
        </div>
        <div class="col-md-3">

       <?php echo $__env->make('includes.user_dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
                    
        </div>
        </div>
    
        
</div><!--class="container" -->
</div>


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    


        <script src="<?php echo e(URL::asset('js/vue.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('js/app.js')); ?>"></script>

                   <!-- Link Bootstrap Js -->
    <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery-3.2.1.min.js')); ?>" charset="utf-8"></script>
    <script src="<?php echo e(URL::asset('js/bootstrap.js')); ?>"></script>

<script type='text/javascript'>
$k = jQuery.noConflict(); 
$k(document).ready(function() {
$k('ul.listing li:odd').css('background-color','#f8fafb');
$k('ul.listing li:even').css('background-color','#e1e1f4');
});
</script> 

</body>
</html>
