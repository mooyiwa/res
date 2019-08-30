<div class="footer" style="background:#383838; color: white;">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2>Company</h2>
            <ul class='mnav'>
                <li><a href='/site/about'>About</a></li>
                <li><a href='/site/faqs'>FAQs</a></li>
                <!-- <li>Contact</li> -->
            </ul>
        </div>
        <div class="col-md-3">
            <h2>Invest</h2>
            <ul class='mnav'>
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
        
            <p style="color: #818282;">Stay up to date with the latest project
                developments and new blog posts. We
                promise not to spam you.</p>
            <form action="" id="sub-form">
            <span class='show_success'>User Subscribed. Thank you!</span>
                <input type="text" placeholder="Your name" id="sub-name" class="form-control mb-4" required>
                <input type="text" placeholder="Your email" id="sub-email" class="form-control mb-4" required>
                <button class="btn btn-des">SUBMIT</button>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 d-flex ist-col" id="footer-col">
            <img src="{{URL::asset('svg/peinmoney gray.svg')}}" alt="" class="img-fluid pic">
            <div class="footer-add text-center">
                <ul class="footer-lists">
                    <li>325, Adeyemo Akapo. Omole Estate </li>
                    <li>Phase 1. Lagos State.</li>
                    <li>Tel: +2349054444424</li>
                    <li>Email: info@peinmoney.com</li>
                </ul>
                <ul class="d-flex footer-svg">
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

<script type="text/javascript" src="{{ URL::asset('js/jquery.3.3.1.js') }}" charset="utf-8"></script>
<script>
    $(window).resize(function(){
    if($(window).width() < 411){
      $('#footer-col').removeClass('d-flex')
    // alert(5);
    } else{
        $('#footer-col').addClass('d-flex')
    }
    });


    if ($(window).width() < 411){
        $('#footer-col').removeClass('d-flex')
    }else{
        $('#footer-col').addClass('d-flex')
    }

    var tName = '';
    var tEmail ='';
    $( document ).ready(function() {
        $('.show_success').hide();
        $('.show-failure').hide();

        $('#sub-form').submit(function(e){
            e.preventDefault();
            var tName = $('#sub-name').val();
            var tEmail = $('#sub-email').val();
           
                $.ajax({
            type: "GET",
            url: '/site/newsletter_users',
            data: {user:tName, email:tEmail},
            success: function() {
                $(".show_success").show().delay(5000).fadeOut();
                
            },
            error: function(){
                $('.show-failure').show().delay(5000).fadeOut();
            }
            });


        });
        
        
    });
    
</script>


<script src="{{ URL::asset('js/bootstrap.js') }}"></script>



</body>
</html>