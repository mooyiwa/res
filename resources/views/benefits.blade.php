@include('includes.site_header')
@include('includes.site_nav')


<div class="container mt-5">
    <div class="text-center mb-5">
        <h1>INVESTMENT BENEFITS</h1>
        <p class="mt-5">Partner with us, building houses and grow your wealth 
            beyond your previous limits.</p>
        <button class="btn btn-des">INVEST NOW</button>
    </div>

    <div class="bene" id="ben-id">
        <div class="row d-flex mt-4">
            <div class="col-md-2">
                <img src="{{URL::asset('svg/check mark simplified.svg')}}" alt="" height="70px" >
            </div>
            <div class="col-md-10">
                <h2>NO RISK</h2>
                <p>No one ever said ‘safe as the stock market’. Property 
                    Development is a risk free and non-volatile investment, 
                    but still shows the highest reward of the major asset classes.</p>
            </div>
        </div>

        <div class="row d-flex mt-4">
            <div class="col-md-2">
                <img src="{{URL::asset('svg/check mark simplified.svg')}}" alt="" height="70px" >
            </div>
            <div class="col-md-10">
                <h2>GUARANTEED RETURNS</h2>
                <p>Investors are earning up to 30% with no fees and no story.</p>
            </div>
        </div>

        <div class="row d-flex mt-4">
            <div class="col-md-2">
                <img src="{{URL::asset('svg/check mark simplified.svg')}}" alt="" height="70px" >
            </div>
            <div class="col-md-10">
                <h2>PROVEN RESULTS</h2>
                <p>Grow your wealth beyond your previous limits.</p>
            </div>
        </div>

        <div class="row d-flex mt-4">
            <div class="col-md-2">
                <img src="{{URL::asset('svg/check mark simplified.svg')}}" alt="" height="70px" >
            </div>
            <div class="col-md-10">
                <h2>RECESSION PROOF</h2>
                <p>Completely outperform savings, bonds, fixed deposits and treasury bills.</p>
            </div>
        </div>

        <div class="row d-flex mt-4">
            <div class="col-md-2">
                <img src="{{URL::asset('svg/check mark simplified.svg')}}" alt="" height="70px" >
            </div>
            <div class="col-md-10">
                <h2>SECURED</h2>
                <p>Lend, Build, Repay.</p>
            </div>
        </div>

        <div class="row d-flex mt-4">
            <div class="col-md-2">
                <img src="{{URL::asset('svg/check mark simplified.svg')}}" alt="" height="70px" >
            </div>
            <div class="col-md-10">
                <h2>TRUSTWORTHY</h2>
                <p>Partner with us developing properties.</p>
            </div>
        </div>

        <div class="row d-flex mt-4">
            <div class="col-md-2">
                <img src="{{URL::asset('svg/check mark simplified.svg')}}" alt="" height="70px" >
            </div>
            <div class="col-md-10">
                <h2>INSTANT VERIFICATION</h2>
                <p>Through frequent updates on current projects, 
                    it’s easy to see where your money is invested.</p>
            </div>
        </div>

        <div class="row d-flex mt-4">
            <div class="col-md-2">
                <img src="{{URL::asset('svg/check mark simplified.svg')}}" alt="" height="70px" >
            </div>
            <div class="col-md-10">
                <h2>EASY INVESTOR DASHBOARD</h2>
                <p>Giving you access to all relevant information and enabling 
                    you to manage your investments easily.</p>
            </div>
        </div>

        <div class="row d-flex mt-4">
            <div class="col-md-2">
                <img src="{{URL::asset('svg/check mark simplified.svg')}}" alt="" height="70px" >
            </div>
            <div class="col-md-10">
                <h2>DEDICATED CUSTOMER SUPPORT</h2>
                <p>If you’re stuck, unsure what to do or have any questions about 
                    our services, you can contact our friendly 
                    Member Support team.</p>
            </div>
        </div>     
    </div> <!-- row ends-->

    <div class="text-center">
        <p class="ben-top">We offer debt-based investments where you can invest and earn up to 30%</p>
        <button class="btn btn-des mb-3">INVEST NOW</button>
        <p class="mb-4">For more information, contact +2349054444424</p>
    </div>
    
    
</div>
@include('includes.footer')

<script>
    $(window).resize(function(){
    if($(window).width() < 768){
      $('#ben-id').addClass('text-center')
    // alert(5);
    } else{
        $('#ben-id').removeClass('text-center')
    }
    });


    if ($(window).width() < 768){
        $('#ben-id').addClass('text-center')
    }else{
        $('#ben-id').removeClass('text-center')
    }
</script>


