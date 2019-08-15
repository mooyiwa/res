<?php //$currentPage = basename(Request::url()); ?>
<ul class="cates" style="margin-top: 25px">


       
      <?php if(session()->get('who') == 'author'){ ?>

       <li><a href="/user/post"> New Post </a></li>
       <li><a href="/user/posts"> All Posts </a></li>

       <li><a href="/user/avatar"> Attach Avatar</a></li>        
       <li><a href="/user/bio"> Update Bio</a></li>


       <li><a href="/user/pass"> Account </a></li>
       
     <?php } 
     
        elseif(session()->get('who') == 'reader'){ ?>
     
       <li><a href="/user/reader_bio"> Update Bio</a></li>

       <li><a href="/user/pass"> Account </a></li>
       
        <?php } 

               elseif(session()->get('who') == 'admin'){ ?>
     
       <li><a href="/user/createCate"> Create Cates</a></li>        
       <li><a href="/user/cates"> Manage Cates</a></li>

       <li><a href="/user/pass"> Account </a></li>
       
        <?php } ?>
       
       </ul>
