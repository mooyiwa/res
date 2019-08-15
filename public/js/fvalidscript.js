$p = jQuery.noConflict(); 
$p(document).ready(function(){
  $p('form.form').validate({
    rules: {
      fullname: {
        required: true
      },
      user: {
        required: true
      },
      first: {
        required: true
      },
      last: {
        required: true
      },            
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true
      },
      pass: {
        required: true
      },
    
      psw: {
        minlength: 6,
        required: true
      },
      psw2: {
        equalTo: "#pword"
      },
      secret: {
        required: true
      },
	
      who: {
        required: true
        
      },
       newpass: {
        minlength: 6,   
        required: true
        
      },
       newpass2: {
        equalTo: "#pword"
      },
    
      address: {
        required: true
      },
            title: {
        required: true
        
      },
            cate: {
        required: true
        
      },
          
          post: {
        required: true
        
      }
	
	
    },
    success: function(label) {
      label.text('').addClass('valid');
    }
  });
  
   
   
});

