<?php $currentPage = basename(Request::url());?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
<a class="navbar-brand" href="/"><img src="{{URL::asset('svg/peinmoney landscape logo.svg')}}" class="my-0 mr-md-auto" alt="" height="50px" ></a>    
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Invest
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
        <a class="dropdown-item" href="/site/benefits">Benefits</a>
        <a class="dropdown-item" href="/site/faqs">FAQs</a> 
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/site/about">Company</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/site/how_it_works">How It Works</a>
    </li>


    @if(session()->get('who') == 'user')

 <div class="btn-group dropleft">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img src="{{ URL::asset('img/user.png') }}" />
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <p style='padding-left: 22px;'>User: {{ session()->get('logged') }}</p>
    <a class="dropdown-item" href="/user/avatar">Attach Avatar</a>

        <a class="dropdown-item" href="/user/pass">Change Password</a>
        <a class="dropdown-item" href="/">Sign Out</a>
  </div>
  </div>
   
    @endif


    @if(session()->get('who') == 'admin')

<div class="btn-group dropleft">
 <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 <img src="{{ URL::asset('img/user.png') }}" />
 </button>
 <div class="dropdown-menu">
   <!-- Dropdown menu links -->
   
       <a class="dropdown-item" href="/admin/createAsset">Create Asset</a>
       <a class="dropdown-item" href="/admin/assets">Manage Assets</a>
       <a class="dropdown-item" href="/user/pass">Change Password</a>
       <a class="dropdown-item" href="/">Sign Out</a>

 </div>
 </div>

   @endif

    </ul>
    @if(session()->get('logged') == '')
    
<!--     
        <a class="btn btn-outline-primary mr-2 nav-path-selected btn-nav-des" href="/site/signin">Sign in</a>
        <a class="btn btn-outline-primary btn-nav-des" href="/site/signup">Sign up</a> -->
        <ul class='nav'>
        <li @if($currentPage == 'signin') class = 'nav-path-selected btn-nav-des' @endif><a href="/site/signin"> Sign in</a></li>
        <li @if($currentPage == 'signup') class = 'nav-path-selected btn-nav-des' @endif><a href="/site/signup"> Sign up</a></li>
        </ul> 
  
    @endif
</div>
</nav>



