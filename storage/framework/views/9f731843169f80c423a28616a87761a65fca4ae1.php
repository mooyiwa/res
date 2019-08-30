<?php $currentPage = basename(Request::url());?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
<a class="navbar-brand" href="/"><img src="<?php echo e(URL::asset('svg/peinmoney landscape logo.svg')); ?>" class="my-0 mr-md-auto" alt="" height="50px" ></a>    
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


    <?php if(session()->get('who') == 'user'): ?>

 <div class="btn-group dropleft">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img src="<?php echo e(URL::asset('img/user.png')); ?>" />
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <p style='padding-left: 22px;'>User: <?php echo e(session()->get('logged')); ?></p>

    <li <?php if ($currentPage =='bio') {echo 'id="here"';} ?>>
        <a href="/user/bio" class="dropdown-item"> Update Bio</a>
        <a href="/user/index" class="dropdown-item"> Open Investments </a>
        <a class="dropdown-item" href="/user/plans"> My Investments </a>
        <a class="dropdown-item" href="/user/pass">Change Password</a>
        <a class="dropdown-item" href="/user/signout">Sign Out</a>
  </div>
  </div>
   
    <?php endif; ?>


    <?php if(session()->get('who') == 'admin'): ?>

<div class="btn-group dropleft">
 <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 <img src="<?php echo e(URL::asset('img/user.png')); ?>" />
 </button>
 <div class="dropdown-menu">
   <!-- Dropdown menu links -->
   
       <a class="dropdown-item" href="/admin/createAsset">Create Asset</a>
       <a class="dropdown-item" href="/admin/assets">Manage Assets</a>
       <a class="dropdown-item" href="/user/pass">Change Password</a>
       <a class="dropdown-item" href="/signout">Sign Out</a>

 </div>
 </div>

   <?php endif; ?>

    </ul>
    <?php if(session()->get('logged') == ''): ?>
    
<!--     
        <a class="btn btn-outline-primary mr-2 nav-path-selected btn-nav-des" href="/site/signin">Sign in</a>
        <a class="btn btn-outline-primary btn-nav-des" href="/site/signup">Sign up</a> -->
        <ul class='nav'>
        <li <?php if($currentPage == 'signin'): ?> class = 'nav-path-selected btn-nav-des' <?php endif; ?>><a href="/site/signin"> Sign in</a></li>
        <li <?php if($currentPage == 'signup'): ?> class = 'nav-path-selected btn-nav-des' <?php endif; ?>><a href="/site/signup"> Sign up</a></li>
        </ul> 
  
    <?php endif; ?>
</div>
</nav>



