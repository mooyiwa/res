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
        <div class="col-md-7">

       @yield('single')
       
        </div>
        <div class="col-md-5">
       @yield('author')
       @include('includes.catnav')
        </div>
        </div>


</div><!--class="container" -->
</div>


@include('includes.footer')


