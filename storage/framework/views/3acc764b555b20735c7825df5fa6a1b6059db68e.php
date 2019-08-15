<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="home">
    
    <div class="top">
<div class="container">
  
<?php echo $__env->make('includes.logonav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <div class="row">
            <div class="container">
                <div class="offset3 col-md-6">
            <p class="intro"> Job Board for Designers, Programmers and Creatives </p>
          </div>
         </div>
        </div>
        
<?php echo $__env->make('includes.boldnav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
    </div><!--class="container" -->
    
        
</div>

	
    
<div class="mid">
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
    
<script type='text/javascript'>
$k = jQuery.noConflict(); 
$k(document).ready(function() {
$k('ul.listing li:odd').css('background-color','#f8fafb');
$k('ul.listing li:even').css('background-color','#e1e1f4');
});
</script> 

</body>
</html>
