<?php  $currentPage = basename(Request::url()); ?>
<ul class="dash" style="margin-top: 25px">


       
      @if(session()->get('who') == 'user')

       <li <?php if ($currentPage =='avatar') {echo 'id="here"';} ?>>
              
       <li <?php if ($currentPage =='bio') {echo 'id="here"';} ?>>
       <a href="/user/bio"> <img src="{{ URL::asset('img/bio.png') }}" /> Update Bio</a></li>
       <li <?php if ($currentPage =='index') {echo 'id="here"';} ?>>
       <a href="/user/index"> <img src="{{ URL::asset('img/go.png') }}" /> Open Investments </a></li>
       <li <?php if ($currentPage =='plans') {echo 'id="here"';} ?>>
       <a href="/user/plans"> <img src="{{ URL::asset('img/inv.png') }}" /> My Investments </a></li>
       <li <?php if ($currentPage =='#') {echo 'id="here"';} ?>>
       <a href="#"> <img src="{{ URL::asset('img/hist.png') }}" /> Account History </a></li>
       


      @else(session()->get('who') == 'admin')
     
       <li <?php if ($currentPage =='createAsset') {echo 'id="here"';} ?>><a href="/admin/createAsset"> Create Asset</a></li>        
       <li <?php if ($currentPage =='assets') {echo 'id="here"';} ?>><a href="/admin/assets"> Manage Assets</a></li>

       <li <?php if ($currentPage =='pass') {echo 'id="here"';} ?>><a href="/user/pass"> Change Password </a></li>
       
       @endif
       
       </ul>
