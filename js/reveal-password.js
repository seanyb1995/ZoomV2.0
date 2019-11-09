//------------------------------------------------------home page animations--//
jQuery(document).ready(function($) {
  
  $('#hide-password').click(function(){
    var password = $(this);
    password.on('click', function(){
      
      if(password.is('#hide-password')){
        
        $('#password').attr('type', 'text');
        
        $('#password_1').attr('type', 'text');
        
        $('#password_2').attr('type', 'text');
        
        $(this).attr('id', 'reveal-password');
        
        $(this).attr('class', 'fas fa-eye');
        
      } else if (password.is('#reveal-password')){
        
        $('#password').attr('type', 'password');
        
        $('#password_1').attr('type', 'password');
        
        $('#password_2').attr('type', 'password');
        
        $(this).attr('id', 'hide-password');
        
        $(this).attr('class', 'fas fa-eye-slash');
      }
      
    });
    
  });
  
});
