@include('includes.site_header')

<body class="single">

    <div class="top">
<div class="container">

@include('includes.logonav')


    </div>


</div><!--class="container" -->
</div>


<div class="mid page">
<div class="container">
    <div class="row">
        <div class="col-md-3">

       @yield('avatar')
        </div>
        <div class="col-md-6">

       
       
       @yield('listing')
        </div>
        </div>


</div><!--class="container" -->
</div>


@include('includes.footer')

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script><!--for pagination-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}" charset="utf-8"></script>
<script type="text/javascript" src="{{ URL::asset('js/paginator.js') }}" charset="utf-8"></script>

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
