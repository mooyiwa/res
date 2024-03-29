@include('includes.site_header')
@include('includes.site_nav')


<style>
  
  .sm-pic{
    height: 200px !important;
    width: 257px !important;
  }
  
  /* [sm-card].card{
    margin-right: 7px !important;
    margin-left: 7px !important;
  } */
  .arrow .card{
    margin-right: 7px !important;
    margin-left: 7px !important;
  }
</style>

<div id="how-mob">

<div class="top-bg">
  <div class="about-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h1 class="about-h1">HOW IT WORKS</h1>
          <p class="text-white t-16pt">We offer debt-based investments where you can
              invest and earn up to 30%</p>
          <a href="/site/signup"><button class="btn btn-des">INVEST NOW</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <h2 class="text-center mt-5">Property Development Investment</h2>
  <div class="row mt-5 mb-5 text-center" id="property">
    <div class="col-lg-4 col-md-12">
      <img class="mb-2" src="{{ URL::asset('svg/gear.svg')}}" height="70px"/>
      <p class="t-14px;" style="font-size: 18px;font-weight: bolder; color:#287aa7;">How does it work?</p>
      <p class="t-13px;">You lend us money through loan note offerings to finance the
          building and selling of new properties.</p>
    </div>

    <div class="col-lg-4 col-md-12">
      <img class="mb-2" src="{{ URL::asset('svg/housing loan.svg')}}" height="70px"/>
      <p class="t-14px;" style="font-size: 18px;font-weight: bolder; color:#287aa7;">What am I investing in?</p>
      <p class="t-13px;">You are investing in a loan for an agreed term, with your capital
          and interest paid as agreed.</p>
    </div>

    <div class="col-lg-4 col-md-12">
      <img class="mb-2" src="{{ URL::asset('svg/loan note.svg')}}" height="70px"/>
      <p class="t-14px;" style="font-size: 18px;font-weight: bolder; color:#287aa7;">Why do PEIN issue these loan notes?</p>
      <p class="t-13px;">To develop and sell houses, take advantage of a business opportunity 
        and to our finances towards acquisitions.</p>
    </div>
  </div>
</div>

<div class="mt-5 p-5" style="background-color:#287aa7;">
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-6 mido">
        <h2 class="text-white">How safe is my money?</h2>
        <p class="text-white t-13pt">Every loan note funding is spent on developing a specific real estate project as 
          stipulated in the Investors pack and Loan note agreement. Your
            money is as safe as real estate, you know where and how your money is
            working and how you get repaid.</p>
      </div>
      <div class="col-md-6">
        <img class="img-fluid pic" src="{{ URL::asset('svg/how safe is my money.svg')}}" alt="">
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
<img src="{{URL::asset('img/sample-web.jpg')}}" class="img-fluid web-view" alt="">
<img src="{{URL::asset('img/sample-mobile.jpg')}}" class="img-fluid mobile-view" alt="">
</div>

<div class="mt-5 p-5" style="background-color:#383838; padding: 50px 20px;">
  <div class="container">
    <div class="row" style="color:white;">
      <div class="col-md-3">
      <img src="{{ URL::asset('svg/updates.svg')}}" class="hand-svg" alt="">
      </div>
      <div class="col-md-7">
        <p style="font-size: 17px; color: white;">We will send you updates and payments will be credited to your dashboard account on or before your investment maturity date. From your
          dashboard, you can decide to re-invest or make withdrawals.</p>
      </div>
    </div>
    <div class="text-center" style="color:white;">
      <h3>YOU CAN VIEW DEVELOPMENT UPDATES ON OUR BLOG, FIRST MONDAYS OF EVERY MONTH</h3>
      {{-- <button class="btn btn-des mt-3">Invest Now</button> --}}
    </div>
  </div>
</div>

<div class="container mt-5">
  <h3 class="text-center mb-5">What if I need my money back before maturity?</h3>
  <div class="row text-center" style="border-bottom:20px solid; border-bottom-color:#35b1e0;">
    <div class="col-md-10">
      <p>Inform us on your dashboard whenever you wish to sell some or all of your loan notes.</p>
      <strong><p>Loan notes are sold or repurchased at Par Value:</p></strong>
      <p>It’s easy to access your money when you need to, by selling parts of all
          your investments to other members which usually takes 2 days on
          average, if sold at Par Value</p>
    </div>
    <div class="col-md-2">
      <img src="{{URL::asset('img/what-if-i-need-my-money-back.svg')}}" height="200px" alt="">
    </div>
  </div>
</div>


<div class="container">
  <h3 class="text-center mt-5">What type of properties do we develop?</h3>
  <p class="text-center">We have carefully crafted our investment strategy</p>
  <div class="row mt-5">
    <div class="col-lg-3 col-md-6">
      <img src="{{URL::asset('svg/terraced house.svg')}}" alt="" class="img-fluid">
      <div class="card-body">
        <h5 class="card-title text-center">Terraced Houses</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <img src="{{URL::asset('svg/detached house.svg')}}" alt="" class="img-fluid">
      <div class="card-body">
        <h5 class="card-title text-center">Detached house</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <img src="{{URL::asset('svg/semi detached house.svg')}}" alt="" class="img-fluid">
      <div class="card-body">
        <h5 class="card-title text-center">Semi detached house</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <img src="{{URL::asset('svg/block of flats.svg')}}" alt="" class="img-fluid">
      <div class="card-body">
        <h5 class="card-title text-center">Block of flats</h5>
      </div>
    </div>
  </div>



  <div class="text-center mt-5 mb-5">
    <p>Become an Investor Today!</p>
    <a href="/site/signup"><button class="btn btn-des">Invest Now</button></a>
  </div>


</div>


</div>
@include('includes.footer')
<script>
    $(window).resize(function(){
    if($(window).width() < 480){
      $('#how-mob').addClass('text-center');
    // alert(5);
    } else{
        $('#how-mob').removeClass('text-center');
    }
    });


    if ($(window).width() < 480){
        $('#how-mob').addClass('text-center');
    }else{
        $('#how-mob').removeClass('text-center');
    }
</script>






