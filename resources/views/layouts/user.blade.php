@include('includes.site_header')

<body class="admin">

<div class="container">
    <div class="row">
        <div class="col-md-7 logo">
            <a href="/"><img src="{{ URL::asset('img/logo.png') }}" /></a>
        </div>
    </div>

    <div class="row workspace">

        <div class="col-md-3 dash">
            @yield('logged')
        </div>
    <div class="col-md-8 workarea">
            @yield('user_bio')
            @yield('post')
            @yield('posts')
            @yield('editpost')
            @yield('deletepost')
            @yield('pass')
            @yield('profile')
            @yield('avatar')
    </div>


    </div>




</div>

</body>
</html>
