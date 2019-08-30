<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('includes.site_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container mt-5 mb-5">
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators float-right mr-auto mt-3">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active dot"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="dot"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="dot"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
            <div class="col-md-2"></div>
            <div class="colmd-3">
                <img src="<?php echo e(URL::asset('img/avatar2.png')); ?>" class="rounded-circle mob-test">
            </div>
            <div class="col-md-6 mt-3">
            <h3>John Doe</h3>
            <p>...</p>
            </div>
            </div>          
        </div>
    
        <div class="carousel-item">
            <div class="row">
            <div class="col-md-2"></div>
            <div class="colmd-3">
                <img src="<?php echo e(URL::asset('img/avatar2.png')); ?>" class="rounded-circle mob-test">
            </div>            
            <div class="col-md-6 mt-3">
            <h3>Jane Doe</h3>
            <p>..</p>
            </div>
            </div>
        </div>
    
        <div class="carousel-item">
            <div class="row">
            <div class="col-md-2"></div>
            <div class="colmd-3">
                <img src="<?php echo e(URL::asset('img/avatar2.png')); ?>" class="rounded-circle mob-test">
            </div>            
            <div class="col-md-6 mt-3">
            <h3>John Mac</h3>
            <p>...</p>
            </div>
            </div>
        </div>
        </div>
    </div>
