<?php $currentPage = basename(Request::url()); ?>
<ul class="cates">
    
           <p class="acctname"><img src="<?php echo e(URL::asset('img/avatar.jpg')); ?>" /> <?php echo e(session()->get('who')); ?>

<br /> <?php echo e(session()->get('logged')); ?> <br /> </p>   
      <?php if(session()->get('who') == 'author'){ ?>

       <li <?php if($currentPage == 'pro_author'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/pro_author"> Become a Pro Author</a></li>

       <li <?php if($currentPage == 'subscribe'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/subscribe"> Subscribe</a></li>  
             
       <li <?php if($currentPage == 'earnings'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/earnings">My Earnings</a></li>

       <li><a href='/'> Sign Out </a></li>

     <?php } 
     
        elseif(session()->get('who') == 'reader'){ ?>
     
       <li <?php if($currentPage == 'pro_reader'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/pro_reader"> Become a Pro Reader</a></li>

       <li <?php if($currentPage == 'subscribe'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/subscribe"> Subscribe</a></li>


       <li <?php if($currentPage == 'refer_friend'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/refer_friend"> Refer a Friend </a></li>


       <li <?php if($currentPage == 'earnings'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/earnings"> My Earnings</a></li>

       <li><a href='/'> Sign Out </a></li>

       
        <?php } 

               elseif(session()->get('who') == 'admin'){ ?>
           <li <?php if($currentPage == 'pro_author_content'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/pro_author_content"> Pro Author</a></li>

       <li <?php if($currentPage == 'pro_reader_content'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/pro_reader_content"> Pro Reader</a></li>

       <li <?php if($currentPage == 'how_it_works_content'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/how_it_works_content"> How it Works</a></li>

       <li><a href='/'> Sign Out </a></li>

       
        <?php } ?>
       
       </ul>
