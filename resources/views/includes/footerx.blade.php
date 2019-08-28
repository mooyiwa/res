<div class="footer" style="background:#383838; color: white;">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2>Company</h2>
            <ul>
                <li><a href='/site/about'>About</a></li>
                <li>Join Us</li>
                <li><a href="mailto:pein@peinmoney.com">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h2>Invest</h2>
            <ul>
                <li><a href='/site/benefits'>Benefits</a></li>
                <li><a href='/site/how_it_works'>How It Works</a></li>
                <!-- <li>How To Invest</li> -->
            </ul>
        </div>
        <div class="col-md-3">
            <h2>Blog</h2>
        </div>
        <div class="col-md-3">
            <h2>Sign Up for our newsletter</h2>
            {{-- #dbdbdb or #dfdfdf --}}
            <p style="color: #818282;">Stay up to date with the latest project
                developments and new blog posts. We
                promise not to spam you.</p>

      <form action="" id="dd">
            <span class="msg"></span>
            <input type="text" placeholder="Your name" name="user" id="s-user" class="form-control mb-4">
            <input type="text" placeholder="Your email" name="email" id="s-email" class="form-control mb-4">
            <button class="btn btn-des">SUBMIT</button>
      </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 d-flex ist-col">
            <img src="{{URL::asset('svg/peinmoney gray.svg')}}" alt="" class="img-fluid pic">
            <div>
                <ul class="footer-lists">
                    <li>325, Adeyemo Akapo. Omole Estate </li>
                    <li>Phase 1. Lagos State.</li>
                    <li>Tel: +2349054444424</li>
                    <li>Email: info@peinmoney.com</li>
                </ul>
                <ul class="d-flex flex-row">
                <a href=""><li class="m-1"><img src="{{URL::asset('svg/linkedin.svg')}}" alt="" height="30px"></li></a>
                <a href=""><li class="m-1"><img src="{{URL::asset('svg/facebook.svg')}}" alt="" height="30px"></li></a>
                <a href=""><li class="m-1"><img src="{{URL::asset('svg/twitter.svg')}}" alt="" height="30px"></li></a>
                <a href=""><li class="m-1"><img src="{{URL::asset('svg/instagram.svg')}}" alt="" height="30px"></li></a>
                </ul>
            </div>
        </div>
    </div>
    <hr>

    <p style="color: #efefef; padding-bottom:1rem; margin-bottom: 0;"> PEINMONEY &copy; 2019. All rights reserved</p>
        
</div><!--class="container" -->
</div>
<!-- <script type="text/javascript" src="{{ URL::asset('js/jquery-3.js') }}" charset="utf-8"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>


<script>

var user = '';
var email = ''; 
// $w = jQuery.noConflict();
$('#dd').submit(function (e) {
       e.preventDefault(); 
        var user = $('#s-user').val();
        alert(user);
    //    $.ajax({
    //        type: "GET",
    //        url: '/site/newsletter_users',
    //        data: {user:user, email:email},
    //        success: function( msg ) {
    //         $("body").append("<div>"+msg+"</div>");
    //        }
    //    });

   });
</script>