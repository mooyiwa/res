@include('includes.site_header')

<body class="home">
 
 @include('includes.site_nav')
    
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
        
       @yield('how_it_works') 
        
   @foreach($assets as $asset)

<div class="col-md-4" style="width: 18rem; margin-top:25px;">
<div class="card">
  <img src="/photos/{{ $asset->asset_id }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $asset->asset }}</h5>
    <p class="card-text">{{ $asset->location }}</p>
    <p class="card-text">12-month Investment <br> Starting at NGN 250,000.00</p>
    
  </div>
</div>
</div>

    @endforeach
    

        </div>
    
        
</div><!--class="container" -->
</div>


@include('includes.footer')
    

<script src="{{ URL::asset('js/bootstrap.js') }}"></script>    


<!-- <script type='text/javascript'>
$k = jQuery.noConflict(); 
$k(document).ready(function() {
$k('ul.listinge li:odd').css('background-color','#f8fafb');

$k('ul.listinge li:even').css('background-color','#eee');
$k('ul.listinge li').css('padding','12px');
});
</script> -->


<!-- <script type="text/javascript" src="{{ URL::asset('js/paginator.js') }}" charset="utf-8"></script> -->


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
