@include('includes.site_header')

<body class="user" onload="startUp()">
  <!--off canvas plugin-->
 <div id="wrapper">
  <div class="overlay"></div>
  
  <!-- Sidebar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
  <ul class="sidebar-nav">
  <li></li> 
  @include('includes.accnav')
  @include('includes.user_dash')
  </ul>
  </nav>
  <!-- /#sidebar-wrapper for off canvas --> 
    
<!-- main content --> 
<div id="page-content-wrapper"> 
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span> 
            <span class="hamb-middle"></span> 
            <span class="hamb-bottom"></span> 
        </button>
<!--off canvas plugin--> 

    <div class="top">
<div class="container">
  
@include('includes.logo')
        
        <div class="row payoff">
            <div class="container">
                <div class="col-md-offset-3 col-md-6">
            <h2 class="intro"> Real Estate Investment Done Right. </h2>
            <span class="earn title"> Secure. Easy Plans.</span>
          </div>
         </div>
        </div>
        
        
    </div><!--class="container" -->
    
        
</div>


<div class="nav main">
<div class="container">
    <div class="row">
        <div class="col-md-12">
      @include('includes.accnav')
        </div>
      
        </div>
    
        
</div>
</div>


    
<div class="mid">
<div class="container">
    <div class="row">
        <div class="col-md-9">
            
       @yield('subscribe')    
        </div>

        <div class="col-md-3">

           
                    
        </div>
        </div>
    
        
</div><!--class="container" -->
</div>


@include('includes.footer')
    
                   <!-- Link Bootstrap Js -->
    <!--<script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}" charset="utf-8"></script>-->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}" charset="utf-8"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/fvalidscript.js') }}"></script>
    <script src="{{ URL::asset('js/hamburger.js') }}"></script><!-- off canvas hamburger -->
    <script src="{{ URL::asset('js/validatr.js') }}"></script>


<script type='text/javascript'>
$k = jQuery.noConflict(); 
$k(document).ready(function() {
$k('ul.listing li:odd').css('background-color','#f8fafb');
$k('ul.listing li:even').css('background-color','#d91277');
$k('ul.listing li:even').css('color','snow');
});
</script> 


<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
<script type="text/javascript">

//<![CDATA[
 bkLib.onDomLoaded(function() {
       //new nicEditor().panelInstance('textarea');
      //new nicEditor({fullPanel : false}).panelInstance('area2');
       //new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
       new nicEditor({buttonList : ['ol','ul','fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','left','center','right','justify','bgcolor','indent','outdent','forecolor','link']}).panelInstance('textarea');
       //new nicEditor({maxHeight : 100}).panelInstance('area5');
 });
 //]]>
 </script>

</div></div><!--closing divs for off canvas-->



<script src="https://js.paystack.co/v1/inline.js"></script>
  <script>
    // change this to your public key so you 
    // will no more be prompted
    var public_key = 'pk_test_7ff73ebbee8baf48f390f513300b347951a55dac';
    
    /*
     * Start up
     */
    function startUp(){
      checkAmountInKobo();
      promptForPublicKey();
    }
    
    /*
     * check if the public key set is valid
     * 
     * @return bool
     */
    function isValidPublicKey(){
      var publicKeyPattern = new RegExp('^pk_(?:test|live)_','i');
      return publicKeyPattern.test(public_key);
    }
    
    /*
     * Prompt for and set public key to use
     * If public key set is not valid
     */
    function promptForPublicKey(){
      if(!isValidPublicKey()){
        // get a public key to use
        public_key = prompt("To run this sample, you need to provide a public key.\n"+
                            "Please visit https://dashboard.paystack.co/#/settings/developer to get your "+
                            "public key and enter in the box below:", "pk_xxxx_");
        // check that we got a valid public key 
        // (starts with pk_live_ or pk_test_)
        if (!isValidPublicKey()) {
          var error_msg = "You didn't provide a public key. This page will not load.";
          alert(error_msg);
          document.getElementById('pay-form').innerHTML = error_msg;
        }
      }
    }
    /* 
     * Validate before opening Paystack popup
     */
    function validateAndPay(){
      var email = document.getElementById('email').value;
      if(!simpleValidEmail(email)){
        alert("Please provide a valid email");
        return;
      }
      
      var amountinkobo = getAmountInKobo();
      if(!amountinkobo){
        alert("Please provide a valid amount");
        document.getElementById('amountinnaira').style.display="block";
        document.getElementById('static-amount').style.display="none";
        return;
      }
      
      // We are not validating firstname and lastname
      var firstname = document.getElementById('firstname').value;
      var lastname  = document.getElementById('lastname').value;
      
      payWithPaystack(email, amountinkobo, firstname, lastname);
    }
  
    /* Get the query parameters for this window
     * 
     * source: http://stackoverflow.com/a/21210643/671568
     */
    function getParams(){
      var queryDict = {};
      location.search
        .substr(1)
        .split("&")
        .forEach(function(item) {
          queryDict[item.split("=")[0]] = item.split("=")[1];
        });
      return queryDict;
    }
    
    /* Check amount sent by get if it's a valid integer
     * show the amount input box if not
     */
    function checkAmountInKobo(){
      amountinkobo = getParams().amountinkobo;
      
      if(!simpleValidInt(amountinkobo)){
        // show the amount box since an amount was not specified by GET
        document.getElementById('amountinnaira').style.display="block";
        document.getElementById('static-amount').style.display="none";
      } else {
        document.getElementById('amountinngn').innerHTML = amountinkobo / 100;
      }
    }
  
    /* Get amount sent by get if it's a valid integer
     * Get the amount entered in input box  multiplied
     *  by 100. Show alert if no valid amountinkobo can be found
     */
    function getAmountInKobo(){
      amountinkobo = getParams().amountinkobo;
      
      if(!amountinkobo){
        amountinkobo = 100 * +document.getElementById('amount-in-naira').value;
      }
      
      if(!simpleValidInt(amountinkobo)){
        alert("Please provide an amount to pay");
      }
      
      return amountinkobo;
    }
  
    /* Get a random reference number based on the current time
     * 
     * gotten from http://stackoverflow.com/a/2117523/671568
     * replaced UUID with REF
     */
    function generateREF(){
      var d = new Date().getTime();
      if(window.performance && typeof window.performance.now === "function"){
        d += performance.now(); //use high-precision timer if available
      }
      var ref = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = (d + Math.random()*16)%16 | 0;
        d = Math.floor(d/16);
        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
      });
      return ref;
    }
    
    /* Validate integer
     *
     * gotten from http://stackoverflow.com/a/25016143/671568
     */
    function simpleValidInt( data ) {
      if (+data===parseInt(data)) {
        return true;
      } else {
        return false;
      }
    };
    
    /* Validate email address 
     * not meant for really secure email validation
     *
     * gotten from http://stackoverflow.com/a/28633540/671568
     * Had to correct Regex, allowing A-Za-z0-9 to repeat
     */
    function simpleValidEmail( email ) {
      return email.length < 256 && /^[^@]+@[^@]+[A-Za-z0-9]{2,}\.[^@]+[A-Za-z0-9]{2,}$/.test(email);
    };
    /* Show the paystack payment popup
     * 
     * source: https://developers.paystack.co/docs/paystack-inline
     */
    function payWithPaystack(validatedemail, amountinkobo, firstname, lastname){
      var handler = PaystackPop.setup({
        key:       public_key,
        email:     validatedemail,
        firstname: firstname,
        lastname:  lastname,
        amount:    amountinkobo,
        ref:       generateREF(), // This uses a random transaction reference based 
                                  // on the time the "Pay" button was clicked.
        callback:  function(response){
          // payment was received
          // clear away the form, show success message
          //var msg = 'Success. The transaction reference is <b>"' + response.trxref + '"</b>';
         // document.getElementById('alert-holder').innerHTML = '<div class="alert alert-success">' + msg + '</div>';
         // document.getElementById("pay-form").reset();
           window.location = "/user/callback?reference=" + response.trxref;
        },
        onClose:  function(){
          // Visitor cancelled payment
          var msg = 'Cancelled. Please click the \'Pay\' button to try again';
          document.getElementById('alert-holder').innerHTML = '<div class="alert alert-danger">' + msg + '</div>';
        }
      });
      handler.openIframe();
    }
    
 
  </script> 

  <script type="text/javascript">
    $s = jQuery.noConflict(); 
        jQuery(function ($) {
        $s('form').validatr(); 
    });
  </script>
</body>
</html>
