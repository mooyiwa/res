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
            <strong><h3 class="thick">12 months typical returns</h3></strong>
            <button class=" btn btn-des d-none">INVEST NOW</button>
        </div>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 sm-height" src="<?php echo e(URL::asset('img/slide2a.jpg')); ?>" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <strong><h3 class="thick">Partner with us in building houses</h3></strong>
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

<div class="container mt-5 mb-5" id="feat">
    <h1 class="text-center">FEATURED INVESTMENTS</h1>
    <div class="row">
        <div class="col-lg-4 col-md-12 my-card">
            <div class="card">
                <img src="<?php echo e(URL::asset('img/featured/03.jpg')); ?>" class="card-img-top" alt="" >
                <div class="card-body">
                    <h3 class="card-title">Grosvenor</h3>
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
            </div>
        </div>

        <div class="col-lg-4 col-md-12 my-card">
            <div class="card">
                <img src="<?php echo e(URL::asset('img/featured/04.jpg')); ?>" class="card-img-top" alt="" >
                <div class="card-body">
                    <h3 class="card-title">Nugent Court</h3>
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
                        <div class="col-md-6 col-sm-6" style="padding-right:0px; padding-left:15px;"><p>Property Type:</p></div>
                        <div class="col-md-6 col-sm-6"  style="padding-right:0px; padding-left:15px;"><p>Block of Flats</p></div>
                    </div>
                
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 my-card">
            <div class="card">
                <img src="<?php echo e(URL::asset('img/featured/05.jpg')); ?>" class="card-img-top" alt="" >
                <div class="card-body">
                    <h3 class="card-title">Royal Residence</h3>
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
                        <div class="col-md-6 col-sm-6" style="padding-right:0px; padding-left:15px;"><p>Property Type:</p></div>
                        <div class="col-md-6 col-sm-6"  style="padding-right:0px; padding-left:15px;"><p>Mini Estate</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mb-5 mt-3">
        <button class="btn btn-des">Invest Now</button>
        <h1 class="mt-5">BECOME A LOAN NOTE PROPERTY INVESTOR</h1>
    </div>

    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo e(URL::asset('img/3.png')); ?>" class="card-img-top" alt="" >
            <p>Borrow(PEIN) seeking flexible short-term financing for 
                property development. Issue loan note.
            </p>
        </div>

        <div class="col-md-4">
            <img src="<?php echo e(URL::asset('img/1.png')); ?>" class="card-img-top" alt="" >
            <p>PEIN(Borrower) Loan Note gives lenders opportunity
                to invest in property development.
            </p>
        </div>

        <div class="col-md-4">
            <img src="<?php echo e(URL::asset('img/2.png')); ?>" class="card-img-top" alt="" >
            <p >Investors get access to upto 30% returns via Loan Note 
                investment.</p>
        </div>
    </div>
    <h1 class="text-center mt-5 mb-5">CLOSED INVESTMENTS</h1>

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
    <div class="container text-center">
        <h1 class="text-center mt-5 mb-5  pt-5">Why choose PEIN?</h1>
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="<?php echo e(URL::asset('svg/like icon.svg')); ?>" class="card-img-top" alt="" height="100px" >
                <h3>FOR EVERYONE</h3>
                <p>Provides investment opportunities to 
                    everyone, starting from ₦250,000</p>
            </div>
    
            <div class="col-md-4">
                <img src="<?php echo e(URL::asset('svg/x mark.svg')); ?>" class="card-img-top" alt="" height="100px" >
                <h3>NO HIDDEN COST</h3>
                <p>We beleive in transparency</p>
            </div>
    
            <div class="col-md-4 my-card">
                <img src="<?php echo e(URL::asset('svg/check mark simplified.svg')); ?>" class="card-img-top" alt="" height="100px" >
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
            <img src="<?php echo e(URL::asset('img/avatar2.png')); ?>" class="col-md-3 rounded-circle">
            <div class="col-md-6 mt-3">
            <h1>John Doe</h1>
            <p>Blah blah blah blah blah.....Lorem ipsum
                ist et dolor sit amet filler text more filler
                text okay ideas on this area have fallen
                short</p>
            </div>
            </div>          
        </div>
    
        <div class="carousel-item">
            <div class="row">
            <div class="col-md-2"></div>
            <img src="<?php echo e(URL::asset('img/avatar1.png')); ?>" class="col-md-3 rounded-circle">
            <div class="col-md-6 mt-3">
            <h1>Jane Doe</h1>
            <p>Blah blah blah blah blah.....Lorem ipsum
                ist et dolor sit amet filler text more filler
                text okay ideas on this area have fallen
                short</p>
            </div>
            </div>
        </div>
    
        <div class="carousel-item">
            <div class="row">
            <div class="col-md-2"></div>
            <img src="<?php echo e(URL::asset('img/avatar2.png')); ?>" class="col-md-3 rounded-circle">
            <div class="col-md-6 mt-3">
            <h1>John Doe</h1>
            <p>Blah blah blah blah blah.....Lorem ipsum
                ist et dolor sit amet filler text more filler
                text okay ideas on this area have fallen
                short</p>
            </div>
            </div>
        </div>
        </div>
    </div>


</div>


    


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>