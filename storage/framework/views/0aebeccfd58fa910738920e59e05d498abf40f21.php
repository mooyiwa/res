<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="admin">

<div class="container">
    <div class="row">
        <div class="col-md-7 logo">
            <a href="/"><img src="<?php echo e(URL::asset('img/logo.png')); ?>" /></a>
        </div>
    </div>

    <div class="row workspace">

        <div class="col-md-3 dash">
            <?php echo $__env->yieldContent('logged'); ?>
        </div>
    <div class="col-md-8 workarea">
            <?php echo $__env->yieldContent('user_bio'); ?>
            <?php echo $__env->yieldContent('post'); ?>
            <?php echo $__env->yieldContent('posts'); ?>
            <?php echo $__env->yieldContent('editpost'); ?>
            <?php echo $__env->yieldContent('deletepost'); ?>
            <?php echo $__env->yieldContent('pass'); ?>
            <?php echo $__env->yieldContent('profile'); ?>
            <?php echo $__env->yieldContent('avatar'); ?>
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
