<?php 
include 'dao.php';
$id=$_GET['id'];
// echo $id;
$u=getUsers($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Update Form</title>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
<header>
	


     
      <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
                <div class="New_E">
			      			<h3 class="mb-4">Edit</h3>
                </div>
			      		</div>
							
			      	</div>
              <form action="index.php" class="signin-form" name="contactForm" onsubmit="return validateForm()" method="post">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" name="fname" value="<?=$u['name']?>" autocomplete="off">
                  <div id="username_txt"></div>
			      		</div>
                     <div class="form-group mb-3">
			      			<label class="label" for="name">Roll Number</label>
			      			<input type="text" class="form-control" name="rname" value="<?=$u['roll']?>" autocomplete="off">
                  <div id="rsername_txt"></div>
			      		</div>
                <div class="form-group mb-3">
		            	<label class="label" for="password">Email</label>
		              <input type="email" class="form-control" name="femail" value="<?=$u['email']?>" autocomplete="off">
                  <div id="email_txt"></div> 
		            </div>
                  <div class="form-group mb-3">
			      			<label class="label" for="name">Phone No</label>
			      			<input type="text" class="form-control" name="pname" value="<?=$u['ph']?>" autocomplete="off">
                  <div id="psername_txt"></div>
			      		</div>
                     <div class="form-group mb-3">
			      			<label class="label" for="name">Address</label>
			      			<input type="text" class="form-control" name="aname" value="<?=$u['addr']?>" autocomplete="off">
                  <div id="adsername_txt"></div>
                  <input type="hidden" class="form-control" name="id" value="<?=$u['id']?>" autocomplete="off">
			      		</div>
		            <div class="form-group">
                <div class="New_E">
                  <input type="submit" class="form-control btn btn-success rounded submit px-3"value="UPDATE" class="submit" name="up">
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
</body>
</html>