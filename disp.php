<?php include 'index.php'; 
session_start();
$n=$_SESSION['n'];
 if(empty($n)){
    header("location:logi.php");
 }
 else{
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Reg D Table</title>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    <!-- Custom styles for this template-->
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styled.css"> -->
</head>
<body id="page-top">
 
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <div class="New_E">
                <a href="regi.php"><button type="button" class="btn btn-outline-success">Registration</button></a>
              </div>
              </li>
              </ul> -->
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <div class="New_E">
                <a href="logi.php"><button type="button" class="btn btn-danger"> Login</button></a>
                </div>
              </li>
              </ul>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
          </div>
        </div>
      </nav>
  <!-- Page Wrapper -->
  <!-- <div id="wrapper"> -->
  <center>
   <br>
        <table border="1px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Email</th>
            <th>Phone no</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php foreach($u as $a){?>
        <tr>
            <td><?=$a['id']?></td>
            <td><?=$a['name']?></td>
            <td><?=$a['roll']?></td>
            <td><?=$a['email']?></td>
            <td><?=$a['ph']?></td>
            <td><?=$a['addr']?></td>
            <td><form action="index.php" method="post">
                <input type="hidden" name="id" value="<?=$a['id']?>">
                <input type="submit" value="DELETE" name="d" >
                <a href="edit.php?id=<?php echo $a['id'];?>">Edit</a>
                </form>
                
            </td>
        </tr>
        <?php } ?>
        </table>
  


     
    </div>
  </div>
  </div>
    
</header>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
<?php }
// session_destroy(); ?>