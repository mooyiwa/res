<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="home">
 <!--off canvas plugin-->
 <div id="wrapper">
  <div class="overlay"></div>
  
  <!-- Sidebar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
  <ul class="sidebar-nav">
  <li class="sidebar-brand"> </li>   

  <li><a href="/site/how_it_works">How It Works </a></li>

<li class='sign'><a href="/site/signin">Sign In </a></li>
<li class='sign'><a href="/site/signup">Sign up</a></li>

  </ul>
  </nav>
  <!-- /#sidebar-wrapper for off canvas --> 
    
<!-- main content --> 
<div id="page-content-wrapper"> 
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span> 
            <span class="hamb-middle"></span> 
            <span class="hamb-bottom"></span> 
        </button>
<!--off canvas plugin-->

    <div class="top">
<div class="container">

  <div class="row">
    <?php echo $__env->make('includes.logonav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>

        
        <div class="row">

          <div class="col-md-6 greet">
   <h1 class='w'>Real Estate Investments</h1>
   <p class='w'>Easy Plans. Secure. High Yield.</p>
               
            
            </div> 


       
        </div>
        
        
    </div><!--class="container" -->
    
        
</div>


    
<div class="mid">
<div class="container">
    <div class="row">
        
       <?php echo $__env->yieldContent('how_it_works'); ?> 
        
   <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div class="col-md-4">
    <ul style="margin-top: 45px;">
    <li><img src="/photos/<?php echo e($asset->asset_id); ?>" style='width:245px;height:205px;' /></li>
    <li style="margin-top:10px;"><?php echo e($asset->asset); ?></li>
    <li><?php echo e($asset->location); ?></li>
    <li><?php echo e($asset->rate); ?>% interest rate</li>
    <li><?php echo e($asset->period); ?> month investment</li>
        
</ul>
</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

        </div>
    
        
</div><!--class="container" -->
</div>


<div class="debug">
<div class="container">
    <div class="row">
        <div class="col-md-3">
     
   <ul class="ft">
     <li><a href="#">What is RessBank?</a></li>
     <li><a href="#">FAQ</a></li>
     <li><a href="#">Blog</a></li>
   </ul>
   
        </div>

        <div class="col-md-4">
        <ul class="social">
     <li><a href="#"><img src="<?php echo e(URL::asset('img/fb.png')); ?>" /></a> </li>
     <li><a href="#"><img src="<?php echo e(URL::asset('img/twit.png')); ?>" /></a> </li>
     
   </ul>
        
        </div>

    

        </div>
    
        
</div><!--class="container" -->
</div>

<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    

                   <!-- Link Bootstrap Js -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script><!--for pagination-->               
    <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.js')); ?>" charset="utf-8"></script>
    <script src="<?php echo e(URL::asset('js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/hamburger.js')); ?>"></script><!-- off canvas hamburger -->

<script type='text/javascript'>
$k = jQuery.noConflict(); 
$k(document).ready(function() {
$k('ul.listinge li:odd').css('background-color','#f8fafb');

$k('ul.listinge li:even').css('background-color','#eee');
$k('ul.listinge li').css('padding','12px');
});
</script>

<!--<script type='text/javascript'>
$m = jQuery.noConflict(); 
$m(document).ready(function() {
$m('ul.list li:odd').css('background-color','#f8fafb');

$m('ul.list li:even').css('background-color','#d91277');
$m('ul.list li:even').css('color','snow');
});
</script>

<script type='text/javascript'>
$tb = jQuery.noConflict(); 
$tb(document).ready(function() {
$tb('table.list tbody:odd').css('background-color','#f8fafb');

$tb('table.list tbody:even').css('background-color','#d91277');
$tb('table.list tbody:even').css('color','snow');
});
</script>-->

<script type="text/javascript" src="<?php echo e(URL::asset('js/paginator.js')); ?>" charset="utf-8"></script>


<!--nav path selected hack from codepen -->

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
</script> 

</div></div><!--closing divs for off canvas-->
</body>
</html>
