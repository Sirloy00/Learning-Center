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
        <li class="nav-item dropdown no-arrow active">
            <h5>
			<a class="nav-link" href="sign_in.php">
            <i style="color:blue" class="fa fa-edit text"></i>
            <span>Sign Up</span></a>
			</h5>
        </li>
		<!-- login --> 
        <li class="nav-item dropdown no-arrow">
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
            <a class="dropdown-item active" href="about_lms.php">Learning Management System</a>
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

          <!-- about Learning Management System(lms) -->
          <div class="card mb-3">
            <div class="card-header" style ="background-color:rgb(51, 58, 65);color:white;">
              <h4><i class="fas fa-edit"></i>
             Sign Up</div></h4>
            <div class="card-body">
				<!-- REGISTER FORM -->
			    <div>
				   <form method="post">
                        <div class="card border-primary rounded-0" style="background-color:rgb(196, 208, 220);">
                           
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
								   
				                    <div class="container sucmess" style="background-color:#f1f1f1; text-align:center;">
									<p id="error"style="color:red"></p>
			                        </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-edit text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="fname" placeholder="Enter Your First Name" required="true">
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-edit text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="mname" placeholder="Enter Your Middle Name" required="true">
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-edit text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="lname" placeholder="Enter Your Last Name" required="true">
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-edit text-info"></i></div>
                                        </div>
                                        <input type="number" class="form-control" name="age" placeholder="Enter Your Age" required="true">
                                    </div>
                                </div>
								<div class="form-group">
								    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-edit text-info"></i></div>
                                        </div>
                                        <select required="true" name="gender" id="gender" data-style="btn-primary" class="form-control input-lg">
										<option value="">Select Your Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
                                    </div>
								</div>
								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-edit text-info"></i></div>
                                        </div>
                                        <input type="number" class="form-control" name="orname" placeholder="Enter Your O.R. Number" required="true">
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="number" class="form-control" name="uname" placeholder="Enter Your Student Number" required="true">
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-lock text-info"></i></div>
                                        </div>
                                        <input type="password" class="form-control" name="newpass" placeholder="Enter New Password" required="true">
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-lock text-info"></i></div>
                                        </div>
                                        <input type="password" class="form-control" name="confirmpass" placeholder="Confirm Your Password" required="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" name="eml" placeholder="Enter Your Email Address" required="true">
                                    </div>
                                </div>
		

                                <div class="text-center">
                                   <button class="btn btn-primary btn-m btn-block" type="submit" name="btn_register_user" style = "margin-top:10px;"><strong>Register</strong></button>
                                </div>
                            </div>
							<div class="container" style="background-color:#f1f1f1; text-align:center;"><br/>
								<span class="psw2">Already have an account? <a href="login_page.php">Login here.</a></span><br/></br/>
							</div>
                            
                        </div>
                    </form>
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
	
	include"../connection.php";
	session_start();
	
	if(isset($_POST['btn_register_user'])) {
		
		
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$mname = mysqli_real_escape_string($db, $_POST['mname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$ornum = mysqli_real_escape_string($db, $_POST['ornum']);
		$uname = mysqli_real_escape_string($db, $_POST['uname']);
		$eml = mysqli_real_escape_string($db, $_POST['eml']);
		
		$fname = ucwords($fname);
		$mname = ucwords($mname);
		$lname = ucwords($lname);
		
		
		$query = mysqli_query($con,"SELECT * FROM tbluserreg WHERE user_email = '$eml' OR user_name LIKE '$uname'");
		$results = mysqli_num_rows($query);
		
		 if($results > 0){
				echo' 
                     <script>
                      document.getElementById("error").innerHTML = "registration detail is already exist. Please check your input.";
					 </script>
					 ';
		} else 
		{
			$query2 = mysqli_query($con,"SELECT id FROM tb_student_dir WHERE or_number = '$ornum' AND student_number = '$uname' AND student_name like '$fname' AND student_mid like '$mname' AND student_last like '$lname'");
			$results2 = mysqli_num_rows($query2);
			if ($results2 > 0)
			{
				
					$samplepass = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";
					$samplepass = str_shuffle($samplepass);
					$samplepass = substr($samplepass,0, 10);
					$samplepasss = md5($samplepass); // encrypt password
					
					$concode = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";
					$concode = str_shuffle($concode);
					$concode = substr($concode,0, 6);
					$concodes = md5($concode); // encrypt confirmation code
					
					require 'phpmailer/PHPMailerAutoload.php';
					require 'credentials.php';
	

					$mail = new PHPMailer;

					//$mail->SMTPDebug = 4;                               // Enable verbose debug output

					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
					$mail->SMTPDebug  = 1;    
					$mail->SMTPAuth = true;                               // Enable SMTP authentication
					$mail->Username = EMAIL;                 // SMTP username
					$mail->Password = PASS;                           // SMTP password
					$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
					$mail->Port = 587;                                    // TCP port to connect to

					$mail->setFrom(EMAIL, "CCC");
					$mail->addAddress($eml, $fname);     // Add a recipient

					$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
					//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
					$mail->isHTML(true);                                  // Set email format to HTML

					$mail->Subject = 'Verification of account';
					$mail->Body    = "Hi $fname! Thank you for registering at Cainta Catholic College Student Portal! <br><br>
									Your default password is: $samplepass  <br>
									note: You can change your default password at your account settings. <br><br>
									Your verification code is:  $concode  <br><br>
									Click this link to verify your account: <a href = 'http://localhost/CCC2/verify.php'>http://localhost/CCC2/verify.php</a>
					";
					
					
					if($mail->send()){
						$query2 = "INSERT INTO tbluserreg (first_name, middle_name, last_name, user_name, user_email, user_password, user_ac, user_estatus)
								VALUES ('$fname', '$mname', '$lname', '$uname', '$eml', '$samplepasss', '$concodes', '0')";
						mysqli_query($con, $query2);
						
						?>
							<script>
								alert("You have been successfully registered! Please verify your account to acquire your password and log in!");
								window.location = ("verify.php");
							</script>
 
						<?php
						
					} else {
						echo' 
                     <script>
                      document.getElementById("error").innerHTML = "Something wrong has happend.";
					 </script>
					 ';
					}
					
			} 
			else 
			{
				echo' 
                     <script>
                      document.getElementById("error").innerHTML = "Student information not found. Please try again.";
					 </script>
					 ';
			}
		}
		
	}
?>
	

  </body>

</html>
