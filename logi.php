<!DOCTYPE html>
<html lang="en">
<head>
  
  <title> Login</title>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/stylelog.css"> -->
</head>
<body>
<header>
  
<div class="b_col">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <div class="New_E">
                <a href="regi.php"><button type="button" class="btn btn-outline-success">Registration</button></a>
              </div>
              </li>
              </ul>
              <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <div class="New_E">
                <a href="logi.php"><button type="button" class="btn btn-danger"> Login</button></a>
                </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>

             -->
          </div>
        </div>
      </nav>
      
      <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(img/img4.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
                <div class="New_E">
			      			<h3 class="mb-4">Sign In</h3>
                </div>
			      		</div>
								
			      	</div>
              <form action="index.php" class="signin-form" name="contactForm" onsubmit="return validateForm()" method="post">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" name="fname" placeholder="Username" autocomplete="off">
                  <div id="username_txt"></div>
			      		</div>
                <div class="form-group mb-3">
		            	<label class="label" for="password">Email</label>
		              <input type="email" class="form-control" name="femail" placeholder="Email" autocomplete="off">
                  <div id="email_txt"></div> 
		            </div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" name="fpassword" placeholder="Password" autocomplete="off">
                  <div id="password_txt"></div> 
		            </div>
		            <div class="form-group">
                <div class="New_E">
                  <input type="submit" class="form-control btn btn-success rounded submit px-3"value="login" class="submit" name="login">
                </div>
		            </div>
		           
		          </form>
		          
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
<div>

</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script >
  function validateForm() {
   var namea = document.forms["contactForm"]["fname"].value;
  var emailid = document.forms["contactForm"]["femail"].value;
   var password = document.forms["contactForm"]["fpassword"].value; 
if(namea==null || namea==""||namea<2) {
       document.getElementById('username_txt').innerHTML = "<div class='error_color'> **Username must be filled out</div> ";
         return false;
}
else if(emailid==null || emailid=="" ){  
   document.getElementById('email_txt').innerHTML = " **<div class='error_color'>Email can be blank....Please Enter your email id.....</div>";
   return false;  
}
else if(emailid.indexOf('@') <= 0){  
   document.getElementById('email_txt').innerHTML = " **<div class='error_color'>@invalid email-id...Please Enter valid email-id....</div>";
   return false;  
}
else if((emailid.charAt(emailid.length-4) != '.') && (emailid.charAt(emailid.length-3) != '.')){  
   document.getElementById('email_txt').innerHTML = " **<div class='error_color'>.invalid Email Id....</div>";
   return false;  
}
 else if(password==null || password=="" ) {
   document.getElementById('password_txt').innerHTML = " **<div class='error_color'>Please Enter Password</div>";
   return false;
} 
// alert("Login Successfully!");
//       return true;
}
</script>
</body>
</html>