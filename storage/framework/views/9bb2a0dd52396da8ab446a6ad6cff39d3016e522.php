<?php echo $__env->make('includes.site_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('includes.site_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
    <div class="row mb-5">
        <div class="col-md-6 mido text-center">
            <h1>WHO WE ARE</h1>
            <p>We are Property Developers, working with a team of
                    highly skilled professionals and reputable contractors,
                    who ensures all our developments are finished to
                    standard and at a fixed price.</p>
        </div>

        <div class="col-md-6">
        <img src="<?php echo e(URL::asset('svg/header illustration.svg')); ?>" alt="">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <img src="<?php echo e(URL::asset('svg/peinmoney gray.svg')); ?>" alt="" class="img-fluid pic">
        </div>

        <div class="col-md-6 mido text-center">
            <p>Our mission is to transform the real estate financing industry
                    by giving investors the same direct and free access to returns
                    that Multi-Millionaires, Billionaires and Banks have always had.</p>

            <h1>Why?</h1>
            <p>Because we believe real estate development offers benefits to 
                investors that no other investment class can.</p>
        </div>
    </div>
</div>
<br>
<div style="background:#287aa7; padding: 30px; color:white;">
    <div class="container">
        <h6 class="text-center" style="line-height: 150%;">
            We have been frustrated by Banks inefficiency at providing funding for Property Development, leading to loss of opportunities and slow growth.This is where
            PEINMONEY, Prudential Estates Investors Network Limited, found its inspiration and implementation. PEINMONEY was founded on the principle of creating
            needed liquidity through profitable partnerships, offering a simple investment model that allows the highest degree of aligned interests possible, as we enable
            investors to combine their money with ours in developing projects we currently own and acquire others for Developments. As a lender, you are our bank, and the
            first to be paid as soon as the developed houses are sold, or sale of houses in our 100% owned portfolio, on or before Loan Maturity date. Our Loan Note Offering
            excels at creating an environment to facilitate this type of wealth creation for our lenders to benefit.
        </h6>
    </div>
</div>

<div style="background:#efefef; padding: 30px;" class="mb-5">
    <div class="container">
    <img src="<?php echo e(URL::asset('svg/two hands.svg')); ?>" alt="" class="img-fluid pic">
        <h5 class="text-center">
            Partner with us, building houses and GROW YOUR WEALTH BEYOND YOUR LIMITS.
            PEINMONEY LOAN NOTES out-performs Stocks, Bonds, Savings and Fixed Deposits.
        </h5>
    </div>
</div>

<div class="container mb-5 text-center">
    <h3 class="mb-5">Be part of a community of lenders earning upto 30% returns on 
        property development investment.</h3>
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo e(URL::asset('svg/chart.svg')); ?>" alt="" class="img-fluid pic">
        </div>
        
        <div class="col-md-6 mido">
            <h3>HAZZLE-FREE INVESTING</h3>
            <p>This is where people like you come together to take control of their finances and make their money work for
                them, know where their money is working. PEIN Loan
                Note investment makes investing as simple as simple as
                ABC.
            </p>
        </div>
    </div>
    <br>
    <div class="row mb-5 mt-5">
        <div class="col-md-6 mido">
            <h2>RELATIONSHIP THINKING</h2>
            <p>We are focused on building deep, long-term, win-win relationship and less on being solely goals-oriented. At the 
                centre of relationship thinking, our Lenders are the means and the end.</p>
        </div>
        <div class="col-md-6">
        <img src="<?php echo e(URL::asset('svg/business men.svg')); ?>" alt="" class="img-fluid pic">
        </div>
    </div>
    <br>
    <div class="row mb-5 mt-5">
        <div class="col-md-4">
        <img src="<?php echo e(URL::asset('svg/operator.svg')); ?>" alt="" class="img-fuid pic">
        </div>
        <div class="col-md-8 mido">
            <h2>DEDICATED SUPPPORT TEAM</h2>
            <p>Our Dedicated Support team is fully manned during normal office hours of 8.30am-5pm,
                Monday to Friday. Available for Lenders to ensure their satisfaction with the PEIN experience and their total understanding of every aspect of investing with us. We endeavour to
                respond to you as fast as possible, however, during the weekends and late nights/early
                hours of the morning there may be a delay. You can Send us an email or use the live chat
                to get in touch and we will respond as soon as we can.</p>
        </div>
    </div>
    <br>
    <div class="row us mb-5 mt-5">
        <div class="col-md-4">
            <img src="<?php echo e(URL::asset('svg/check mark simplified.svg')); ?>" alt="" height="30px" ><h2>We are</h2>
            <ul>
                <li>Estate Developers</li>
                <li>Business Developers</li>
                <li>Lawyers</li>
                <li>Communication Managers</li>
            </ul>
        </div>
        <div class="col-md-4">
            <img src="<?php echo e(URL::asset('svg/x mark.svg')); ?>" alt="" height="30px"><h2>We are Not</h2>
            <ul>
                <li>Contractors</li>
                <li>Ponzi Schemers</li>
                <li>Zombies</li>
                <li>Robots</li>
                <li>In the Moon</li>
            </ul>
        </div>
        <div class="col-md-4">
            <img src="<?php echo e(URL::asset('svg/Target.svg')); ?>" alt="" height="30px"><h2>What we do</h2>
            <ul>
                <li>Real Estate Investing</li>
                <li>Real Estate Development</li>
            </ul>
        </div>
    </div>
</div>




<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>