
<?php $error=""; $msg="" ?>
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CCC Learning Management System</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	<!-- Icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- login style -->
	<link href="css/login_style.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body id="page-top">
   
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html"><span><img src="images/ccc-logo.png" style="height: 50px; width: 60px" alt="ccc-logo" /> &nbsp; Learning  Management System</span></a>

      &nbsp; &nbsp;<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
      </form>
       
	  <!--nav bar-->
      <ul class="navbar-nav ml-auto ml-md-0"> 
		 <!-- sign up --> 
        <li class="nav-item dropdown no-arrow">
            <h5>
			<a class="nav-link" href="sign_up.php">
            <i style="color:blue" class="fa fa-edit text"></i>
            <span>Sign Up</span></a>
			</h5>
        </li>
		<!-- login --> 
        <li class="nav-item dropdown no-arrow active">
            <h5>
			<a class="nav-link" href="login_page.php">
            <i style="color:blue" class="fas fa-fw fa-sign-in-alt"></i>
            <span>Log In</span></a>
			</h5>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="font-size: 25px;">
        <li class="nav-item">
          <a class="nav-link" href="welcome.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="calendar.php">
            <i class="fas fa-fw fa-calendar"></i>
            <span>School Calendar</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="weather.php">
            <i class="fas fa-fw fa-cloud"></i>
            <span>Weather Updates</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="about_lms.php">Learning Management System</a>
            <a class="dropdown-item" href="about.php">Cainta Catholic College</a>
  
          </div>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="academics.php">
            <i class="fas fa-fw fa-book"></i>
            <span>Academics</span></a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="admission.php">
            <i class="fas fa-fw fa-file-text"></i>
            <span>Admission</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="administration.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Administration</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.php">
            <i class="fas fa-fw fa-phone"></i>
            <span>Contact</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- newspeed -->
          <div class="card mb-3">
            <div class="card-header">
             <h4> <i class="fas fa-fw fa-sign-in-alt"></i>
              Login</h4>
			</div>
            <div class="card-body">
					
					  <!-- VERIFY FORM -->
				<form method = "post" action="verify.php" onsubmit = "">
					
						 <div class="container sucmess" style="background-color:#f1f1f1; text-align:center;">
			           	<?php include('error.php'); ?> <p style = "color: rgba(0, 128, 0, 1);"> <?php if($msg != "") echo $msg ?></p>
			            </div>
						 <div class="container regCon">
							<div class="form-group">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
									   <div class="input-group-text"><i class="fa fa-user"></i></div>
									</div>
									<input type="text" class="form-control" id="name" name="uname" placeholder="Username/Student Number" required="true">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
									   <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
									</div>
									<input type="text" class="form-control" id="name" name="vercode" placeholder="Verification Code" required="true">
								</div>
							</div>
							<button class = "loginButtons btn btn-success btn-block" type="submit" name="verify_user">Verify</button>
						</div>
				
				
				</form>
			</div> 
            <div class="container" style="background-color:#f1f1f1; text-align:center;">
				<br/><span class="psw2">Don't have an account? <a href="userreg.php">Register here.</a></span><br/>
				<span class="psw2">Already have an account? <a href="userlogin.php">Login here.</a></span><br/><br/>
			</div>
            </div>
            <div class="card-footer small text-muted">Updated <?php echo date('l jS \of F Y h:i:s A'); ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © CCC Learning Management System by Power Research Team</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
	
	<?php
$msg = "";
$error = "";
include "../connection.php";
	if(isset($_POST['verify_user'])) {
		
		$uname = mysqli_real_escape_string($db, $_POST['uname']);
		$vercode = mysqli_real_escape_string($db, $_POST['vercode']);
		$vercode = md5($vercode);
		
		$query = "SELECT id FROM tbluserreg WHERE user_name = '$uname'";
		$results = mysqli_query($con, $query);
		$query1 = "SELECT id FROM tbluserreg WHERE user_ac = '$vercode'";
		$results1 = mysqli_query($con, $query1);
		$query2 = "SELECT id FROM tbluserreg WHERE user_ac = '$vercode' AND user_name = '$uname' AND user_estatus = '1'";
		$results2 = mysqli_query($conn, $query2);
		
		if(mysqli_num_rows($results) == 1 && mysqli_num_rows($results1) == 1 && mysqli_num_rows($results2) == 0){
			$msg = "Congratulations! Your account has been successfully verified! <a href = 'userlogin.php'>Log in now!</a>";
			$query = "UPDATE tbluserreg
						SET user_estatus = '1'
						WHERE user_name = '$uname';
			";
			mysqli_query($conn, $query);
			
		} else if(mysqli_num_rows($results) == 1 && mysqli_num_rows($results1) == 1 && mysqli_num_rows($results2) == 1) {
			$msg = "Your account has already been verified. <a href = 'login_page.php'>Log in now!</a>";
			
		}	else {
				if(mysqli_num_rows($results) == 0){
					$error = "Username is not registered.";
				}
				else if(mysqli_num_rows($results1) == 0){
					$error = "Invalid Verification code. Please try again.";
				}
		}
			
		
		
	}

?>

  </body>

</html>
