<?php //$currentPage = basename(Request::url()); ?>
<ul class="cates" style="margin-top: 25px">


       
      <?php if(session()->get('who') == 'user'): ?> 

      <!-- <li><a href="/user/post"> New Post </a></li>
       <li><a href="/user/posts"> All Posts </a></li>-->

       <li><a href="/user/avatar"> Attach Avatar</a></li>        
       <li><a href="/user/bio"> Update Bio</a></li>

       <li><a href="/user/pass"> Change Password </a></li>
       
     

        <?php else: ?>
     
       <li><a href="/admin/createAsset"> Create Asset</a></li>       
       <li><a href="/admin/assets"> Manage Assets</a></li>

       <li><a href="/user/pass"> Change Password </a></li>
       

        <?php endif; ?>
       
       </ul>
