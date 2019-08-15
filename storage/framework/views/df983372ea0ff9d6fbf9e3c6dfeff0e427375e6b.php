<?php $currentPage = basename(Request::url()); ?>
<ul class="cates">
    
           <p class="acctname"><img src="<?php echo e(URL::asset('img/avatar.jpg')); ?>" />
<br /> <?php echo e(session()->get('logged')); ?> <br /> </p>   
      <?php if(session()->get('who') == 'user'){ ?>

       <li><a href='#'> New Plan </a></li>
       <li><a href='#'> All Plans </a></li>
       <li><a href='#'> Account History </a></li>
       <li><a href='/'> Sign Out </a></li>

     <?php } 
     

               elseif(session()->get('who') == 'admin'){ ?>
           <li <?php if($currentPage == 'pro_author_content'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/pro_author_content"> Pro Author</a></li>

       <li <?php if($currentPage == 'pro_reader_content'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/pro_reader_content"> Pro Reader</a></li>

       <li <?php if($currentPage == 'how_it_works_content'): ?> class = 'nav-path-selected' <?php endif; ?>><a href="/user/how_it_works_content"> How it Works</a></li>

       <li><a href='/'> Sign Out </a></li>

       
        <?php } ?>
       
       </ul>
