@include('includes.site_header')

<body class="signup">
@include('includes.site_nav')
<div class="container">
    
       <div class="row"> 
        <div class="offset7 col-md-4 login">
            
            @yield('signup')
            @yield('signin')
            @yield('recover')
           
       
        </div>
     </div>   
</div><!--class="container" -->
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/parsely.min.js') }}"></script>

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
</body>
</html>
