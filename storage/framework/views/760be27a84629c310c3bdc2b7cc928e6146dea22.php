<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('includes.site_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators d-none">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100 sm-height" src="<?php echo e(URL::asset('img/slide3a.jpg')); ?>" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <strong><h2 class="thick"> 12 months typical returns</h2></strong>
            <button class=" btn btn-des d-none">INVEST NOW</button>
        </div>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 sm-height" src="<?php echo e(URL::asset('img/slide2a.jpg')); ?>" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <strong><h2 class="thick">Partner with us in building houses</h2></strong>
            <button class=" btn btn-des d-none">INVEST NOW</button>
        </div>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 sm-height" src="<?php echo e(URL::asset('img/slide1a.jpg')); ?>" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <button class=" btn btn-des d-none">INVEST NOW</button>
        </div>
        </div>
    </div>
    
</div>
<marquee class="mark" behavior="" direction="">Welcome to PEINMONEY, TOGETHER WE'RE BETTER</marquee>


<div class="container">
    <h3 class="text-center mt-5">BECOME A LENDER</h3>
    <div class="row mt-5 mb-5 text-center">
        <div class="col-lg-4 col-md-12">
        <img class="" src="<?php echo e(URL::asset('svg/housing loan.svg')); ?>" height="70px"/>
        
        <p>Invest in our housing projects with as little as ₦250,000.</p>
        </div>
    
        <div class="col-lg-4 col-md-12">
        <img class="" src="<?php echo e(URL::asset('svg/loan note.svg')); ?>" height="70px"/>
        
        <p>Upon payment, you receive loan notes sold at prices par value.</p>
        </div>
    
        <div class="col-lg-4 col-md-12">
        <img class="" src="<?php echo e(URL::asset('svg/return icon.svg')); ?>" height="70px"/>
        
        <p>With a typical term of 12 months, you
                earn up to 30% returns on investment.</p>
        </div>
    </div>

<div class="mt-5 mb-5" id="feat">
    <h3 class="text-center mb-3">FEATURED INVESTMENTS</h3>
    <div class="row">
    
    <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <div class="col-lg-4 col-md-12 my-card pad">
            <!-- <div class="card">
                <img src="<?php echo e(URL::asset('img/featured/03.jpg')); ?>" class="card-img-top" alt="" >
                <div class="card-body">
                    <h4 class="card-title">Grosvenor</h4>
                    <div class="row card-text">
                        <div class="col-md-6 col-sm-6"><p>Min. Investment:</p></div>
                        <div class="col-md-6 col-sm-6"><p>#250,000</p></div>
                    </div>
                    <div class="row card-text">
                        <div class="col-md-6 col-sm-6"><p>Interest Rate:</p></div>
                        <div class="col-md-6 col-sm-6"><p>UpTo 30%</p></div>
                    </div>
                    <div class="row card-text">
                        <div class="col-md-6 col-sm-6"><p>Loan Term:</p></div>
                        <div class="col-md-6 col-sm-6"><p>12 Months</p></div>
                    </div>
                    <div class="row card-text" style="zoom:90%;">
                        <div class="col-md-6 col-sm-6" style="padding-right:0px; padding-left:15px;"><p>Property  Type:</p></div>
                        <div class="col-md-6 col-sm-6"  style="padding-right:0px; padding-left:15px;"><p>Detached House</p></div>
                    </div>
                </div>
            </div> -->
            <div class="card">
<a <?php if (! (session()->get('logged') == '')): ?> href="/user/lend/<?php echo e($asset->id); ?>" <?php endif; ?>><img src="/photos/<?php echo e($asset->asset_id); ?>" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <h5 class="card-title"><?php echo e($asset->asset); ?> </h5>
    <p class="card-text"> Project Type: <?php echo e($asset->type); ?></p>
    <p class="card-text"><?php echo e($asset->location); ?> <br>
       Min. Investment: &#8358; <?php echo e(number_format($asset->amount_1, 2)); ?></p>
    <p class="card-text"> Interest rate: Upto 30% <br>
       Term: <?php echo e($asset->period); ?> months</p>

    <p class="card-text"> Loan Amount: &#8358; <?php echo e(number_format($asset->total_loan, 2)); ?></p>

    <?php if (! (session()->get('logged') == '')): ?>
    <a href="/user/lend/<?php echo e($asset->id); ?>" class="btn btn-primary">Start Lending</a>
    <?php endif; ?>

  </div>
</div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

    </div>

    <div class="text-center mb-5 mt-3">
    <?php if (! (session()->get('logged') != '')): ?>
        <a href="/site/signup"><button class="btn btn-des">Invest Now</button></a>
    <?php endif; ?>
    </div>

 
</div>
</div>
    <div style="background:#287aa7; padding: 30px; color:white;">
        <div class="container">
            <div class="mido text-center">
                <p>Our mission is to transform the real estate financing industry
                        by giving investors the same direct and free access to returns
                        that Multi-Millionaires, Billionaires and Banks have always had.</p>
                <br>
                <h2 style="font-size:30px">Why?</h2>
                <br>
                <p>Because we believe real estate development offers benefits to 
                    investors that no other investment class can.</p>
            </div>
        </div>
    </div>

<div class="container">
    <h3 class="text-center mt-5 mb-5">CLOSED INVESTMENTS</h3>

    <div class="row">
        <div class="col-md-4 my-card">
            <div class="card">
                <img src="<?php echo e(URL::asset('img/closed/00.jpg')); ?>" class="card-img-top" alt="" >
                <div class="card-body">
                <h5 class="card-title">Crown Court</h5>
                <p class="card-text">Penisula Garden Estate</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-card">
            <div class="card">
                <img src="<?php echo e(URL::asset('img/closed/01.jpg')); ?>" class="card-img-top" alt="" >
                <div class="card-body">
                <h5 class="card-title">Ikate</h5>
                <p class="card-text">Penisula Garden Estate</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-card">
            <div class="card">
                <img src="<?php echo e(URL::asset('img/closed/00.jpg')); ?>" class="card-img-top" alt="" >
                <div class="card-body">
                <h5 class="card-title">Kaara Estate</h5>
                <p class="card-text">Penisula Garden Estate</p>
                </div>
            </div>
        </div>
    </div>
</div>

    

<div class="bg-lit">
    <div class="container text-center pb-2">
        <h2 class="text-center mt-5 mb-5 pt-5">Why choose PEIN?</h2>
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="<?php echo e(URL::asset('svg/like icon.svg')); ?>" class="card-img-top" alt="" height="70px" >
                <h3>FOR EVERYONE</h3>
                <p>Provides investment opportunities to 
                    everyone, starting from ₦250,000</p>
            </div>
    
            <div class="col-md-4">
                <img src="<?php echo e(URL::asset('svg/x mark.svg')); ?>" class="card-img-top" alt="" height="70px" >
                <h3>NO HIDDEN COST</h3>
                <p>We beleive in transparency</p>
            </div>
    
            <div class="col-md-4 my-card">
                <img src="<?php echo e(URL::asset('svg/check mark simplified.svg')); ?>" class="card-img-top" alt="" height="70px" >
                <h3>YOU'RE IN CONTROL</h3>
                <p>Monitor your investment, build your portfolio</p>
            </div>
        </div>
    </div>
</div>
    

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
            <img src="<?php echo e(URL::asset('img/avatar2.png')); ?>" class="rounded-circle mob-test col-md-3">
            <div class="col-md-6 mt-3">
            <h3>John Doe</h3>
            <p>...</p>
            </div>
            </div>          
        </div>
    
        <div class="carousel-item">
            <div class="row">
            <div class="col-md-2"></div>
            <img src="<?php echo e(URL::asset('img/avatar2.png')); ?>" class="rounded-circle mob-test col-md-3">
            <div class="col-md-6 mt-3">
            <h3>Jane Doe</h3>
            <p>..</p>
            </div>
            </div>
        </div>
    
        <div class="carousel-item">
            <div class="row">
            <div class="col-md-2"></div>
            <img src="<?php echo e(URL::asset('img/avatar2.png')); ?>" class="rounded-circle mob-test col-md-3">
            <div class="col-md-6 mt-3">
            <h3>John Mac</h3>
            <p>...</p>
            </div>
            </div>
        </div>
        </div>
    </div>




</div>
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    


