function validateForm() {
   var namea = document.forms["contactForm"]["fname"].value;
  var emailid = document.forms["contactForm"]["femail"].value;
   var password = document.forms["contactForm"]["fpassword"].value;
   var secondpassword=document.forms["contactForm"]["rePassword"].value; 
   var namer = document.forms["contactForm"]["rname"].value;
   var namep = document.forms["contactForm"]["pname"].value;
   var namead = document.forms["contactForm"]["aname"].value;
if(namea==null || namea==""||namea<2) {
       document.getElementById('username_txt').innerHTML = "<div class='error_color'> **Username must be filled out</div> ";
         return false;
}
if(namer==null || namer=="") {
   document.getElementById('rsername_txt').innerHTML = "<div class='error_color'> **Roll No must be filled out</div> ";
     return false;
}
if(emailid==null || emailid=="" ){  
   document.getElementById('email_txt').innerHTML = " **<div class='error_color'>Email can be blank....Please Enter your email id.....</div>";
   return false;  
}
if(emailid.indexOf('@') <= 0){  
   document.getElementById('email_txt').innerHTML = " **<div class='error_color'>@invalid email-id...Please Enter valid email-id....</div>";
   return false;  
}
if((emailid.charAt(emailid.length-4) != '.') && (emailid.charAt(emailid.length-3) != '.')){  
   document.getElementById('email_txt').innerHTML = " **<div class='error_color'>.invalid Email Id....</div>";
   return false;  
}
if(namep==null || namep=="") {
   document.getElementById('psername_txt').innerHTML = "<div class='error_color'> **Phone no must be filled out</div> ";
     return false;
}
if(namead==null || namead==""||namead<2) {
   document.getElementById('adsername_txt').innerHTML = "<div class='error_color'> **Username must be filled out</div> ";
     return false;
}
if(password==null || password==""||password<8) {
   document.getElementById('password_txt').innerHTML = " **<div class='error_color'>Please Enter Password</div>";
   return false;
}
if (secondpassword==null || secondpassword=="" ) {
   document.getElementById('password_txtf').innerHTML = " **<div class='error_color'>Please Enter Re-password</div>";
   return false;
}
if( password!=secondpassword ){  
   document.getElementById('password_txtf').innerHTML = " **<div class='error_color'>password must be same!</div>";
   return false;  
}  
alert("Regstration Submitted Successfully!");
      return true;
}