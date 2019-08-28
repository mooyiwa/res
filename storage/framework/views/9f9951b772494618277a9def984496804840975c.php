<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="home">
 
 <?php echo $__env->make('includes.site_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
<!-- main content --> 
<div id="page-content-wrapper"> 
   

    <div class="top">
<div class="container">

  

        
        </div>
        
        
    </div><!--class="container" -->
    
        
</div>


    
<div class="mid">
<div class="container">
    <div class="row">
        
       <?php echo $__env->yieldContent('how_it_works'); ?> 
        
   <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="col-md-4" style="width: 18rem; margin-top:25px;">
<div class="card">
  <img src="/photos/<?php echo e($asset->asset_id); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo e($asset->asset); ?></h5>
    <p class="card-text"><?php echo e($asset->location); ?></p>
    <p class="card-text">12-month Investment <br> Starting at NGN 250,000.00</p>
    
  </div>
</div>
</div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

        </div>
    
        
</div><!--class="container" -->
</div>


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    

<script src="<?php echo e(URL::asset('js/bootstrap.js')); ?>"></script>    


<!-- <script type='text/javascript'>
$k = jQuery.noConflict(); 
$k(document).ready(function() {
$k('ul.listinge li:odd').css('background-color','#f8fafb');

$k('ul.listinge li:even').css('background-color','#eee');
$k('ul.listinge li').css('padding','12px');
});
</script> -->


<!-- <script type="text/javascript" src="<?php echo e(URL::asset('js/paginator.js')); ?>" charset="utf-8"></script> -->


<!--nav path selected hack from codepen -->
<!-- 
<script type="text/javascript">
  $x = jQuery.noConflict();
  $x(document).ready(function() {
  var url = window.location;
  $x('ul.cates li a[href="' + url + '"]').parent().addClass('active');
  $x('ul.cates li a').filter(function() {
    return this.href == url;
  }).parent().addClass('nav-path-selected');
  // alert(url);
  //jQuery("#output").html( url );
});
</script>  -->

</div>
</body>
</html>
