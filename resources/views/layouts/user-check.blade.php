@include('includes.site_header')

<body class="user">
@include('includes.site_nav')
  
<!-- main content --> 
<div id="page-content-wrapper"> 
    <div class="top">
<div class="container">
        
        
</div><!--class="container" -->
         
</div>


<div class="nav main">
<div class="container">
    <div class="row">
        <div class="col-md-12">
  
        </div>
      
        </div>
    
        
</div>
</div>


    
<div class="mid">
<div class="container">
    <div class="row">
      <div class="col-md-3 aside">
  
      @include('includes.user_dash')
    
        </div>

        <div class="col-md-9 workarea">

        @yield('lend_check')
    
        </div>

     </div>
    
        
</div><!--class="container" -->
</div>


@include('includes.footer')

    <!-- Link Bootstrap Js -->
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}" charset="utf-8"></script> -->
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>


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


<script type="text/javascript" src="{{ URL::asset('js/templates.js') }}" charset="utf-8"></script>

<script type="text/javascript" src="{{ URL::asset('js/core.js') }}" charset="utf-8"></script>

<script type="text/javascript" src="{{ URL::asset('js/embeds.js') }}" charset="utf-8"></script>
<script type="text/javascript" src="{{ URL::asset('js/images.js') }}" charset="utf-8"></script>


<script type="text/javascript" src="{{ URL::asset('jodit/jodit.min.js') }}" charset="utf-8"></script>
<script>var editor = new Jodit('#editor');</script>


<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
<script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.js') }}" charset="utf-8"></script>
<script type="text/javascript" src="{{ URL::asset('js/paginator.js') }}" charset="utf-8"></script>

<script type='text/javascript'>
$j = jQuery.noConflict(); 
$j(document).ready(function() {
$j('ul.listing').pagination();

 });
</script>

<script type='text/javascript'>
$g = jQuery.noConflict(); 
$g(document).ready(function() {
$g('tbody#go').pagination();

 });
</script>

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




</body>
</html>
