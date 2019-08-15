@include('includes.site_header')

<body class="user">
  <!--off canvas plugin-->
 <div id="wrapper">
  <div class="overlay"></div>
  
  <!-- Sidebar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
  <ul class="sidebar-nav">
  <li></li>
  <br />
  @include('includes.accnav')
  @include('includes.user_dash')<br />

  
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
  
@include('includes.logo')
        
        <!--<div class="row payoff">
            <div class="container">
                <div class="col-md-offset-3 col-md-6">
                <h2 class="intro"> Real Estate Investment Done Right. </h2>
            <span class="earn title"> Secure. Easy Plans.</span>
           
          </div>
         </div>
        </div>-->
        
        
    </div><!--class="container" -->
    
        
</div>


<div class="nav main">
<div class="container">
    <div class="row">
        <div class="col-md-12">
    
      @include('includes.user_dash')
        </div>
      
        </div>
    
        
</div>
</div>


    
<div class="mid">
<div class="container">
    <div class="row">
        <div class="col-md-9">
            
       @yield('listing')
       @yield('bio')
       @yield('pass')
       @yield('post')
       @yield('avatar')
       @yield('posts')
       @yield('editpost')
       @yield('deletepost')
       @yield('all-assets')
       @yield('editasset')
       @yield('deletecate')

       @yield('all_assets')
       @yield('pro_reader')
       

       @yield('pro_author_content')
       @yield('faq_content') 
       @yield('joinus_content') 
       @yield('how_it_works_content') 

       @yield('plans')

       @yield('refer') 
       @yield('subscribe') 
       @yield('earnings')   
        </div>

        <div class="col-md-3">
       @yield('author')
             
                    
        </div>
        </div>
    
        
</div><!--class="container" -->
</div>


@include('includes.footer')

    
                   <!-- Link Bootstrap Js -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script><!--for pagination-->               
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}" charset="utf-8"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/hamburger.js') }}"></script><!-- off canvas hamburger -->



<script src="{{ URL::asset('js/parsely.min.js') }}"></script> 
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


<script type='text/javascript'>
$k = jQuery.noConflict(); 
$k(document).ready(function() {
$k('ul.listing li:odd').css('background-color','#f8fafb');
$k('ul.listing li:even').css('background-color','#e2e2f6');
//$k('ul.listing li:even').css('color','snow');
});
</script>


<script type="text/javascript" src="{{ URL::asset('js/templates.js') }}" charset="utf-8"></script>

<script type="text/javascript" src="{{ URL::asset('js/core.js') }}" charset="utf-8"></script>

<script type="text/javascript" src="{{ URL::asset('js/embeds.js') }}" charset="utf-8"></script>
<script type="text/javascript" src="{{ URL::asset('js/images.js') }}" charset="utf-8"></script>


<script type="text/javascript" src="{{ URL::asset('jodit/jodit.min.js') }}" charset="utf-8"></script>
<script>var editor = new Jodit('#editor');</script>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script><!--for pagination-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}" charset="utf-8"></script>
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


</div></div><!--closing divs for off canvas-->






   




</body>
</html>
