<?php $currentPage = basename(Request::url()); ?>
<ul class="cates">
    
           <p class="acctname"><img src="<?php echo e(URL::asset('img/avatar.jpg')); ?>" />
<br /> <?php echo e(session()->get('logged')); ?> <br /> </p>   
      <?php if(session()->get('who') == 'user'){ ?>

       <li><a href='#'> New Plan </a></li>
       <li><a href='/user/plans'> All Plans </a></li>
       <li><a href='#'> Account History </a></li>
       <li><a href='/'> Sign Out </a></li>

     <?php } 
     

               elseif(session()->get('who') == 'admin'){ ?>
  

       <li <?php if($currentPage == 'joinus'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/admin/joinus"> Join Us</a></li>

       <li <?php if($currentPage == 'how_it_works_content'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/admin/how_it_works_content"> How it Works</a></li>

       <li <?php if($currentPage == 'faqs'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/admin/faqs"> FAQs</a></li>

       <li><a href='/'> Sign Out </a></li>

       
        <?php } ?>
       
       </ul>
