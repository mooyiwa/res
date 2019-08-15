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

<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
 bkLib.onDomLoaded(function() {
       new nicEditor().panelInstance('textarea');
       new nicEditor({fullPanel : true}).panelInstance('area2');
       new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
       new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
       new nicEditor({maxHeight : 100}).panelInstance('area5');
 });
 //]]>
 </script>
</body>
</html>
