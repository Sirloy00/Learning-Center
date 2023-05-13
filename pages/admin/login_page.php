<!DOCTYPE html>
<?php 
	include'../connection.php';
	session_start();
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CCC E-Learning">
    <meta name="author" content="Power Research Team">
    <link rel="icon" type="image/ico" href="images/ccc-logo.png" />
    <title>CCC E-Learning</title>

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

      <a class="navbar-brand mr-1" href="index.html"><span><img src="images/ccc-logo.png" style="height: 50px; width: 60px" alt="ccc-logo" /> &nbsp;E-LEARNING</span></a>

      &nbsp; &nbsp;<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
      </form>
      

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
          <a class="nav-link" href="about_lms.php">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.php">
            <i class="fas fa-fw fa-phone"></i>
            <span>Contact Us</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- newspeed -->
          <div class="card mb-3">
            <div class="card-body">
             <div class="wrapper">
			    <form class="login" method="post" role="form" > 
			        <center><img src="images/usericon.png" width = "80px" height = "80px" /></center>
					<center><p class="title">LOGIN TO YOUR ACCOUNT</p></center>
					<center><p id = "error" class="error"></p></center>
					<input type="text" name="txt_username"placeholder="Username" autofocus required />
					<i class="fa fa-user icon"></i>
					<input type="password" name="txt_password" placeholder="Password" required />
					<i class="fa fa-lock icon"></i>
					<style>
						.error{
								color:red;
							}
						.bsize {
								width: 20px;
							}
					</style>
					<a title="Click here!" data-toggle="modal" data-target="#forgotaccountModal"style="color:blue;"><h6><u>Forgot account?</u></h6></a><br/>
					 <input type="submit" class="btn btn-primary btn-sm"  name="btn_login" value="LOGIN"/>
					 <i class="fa fa-key icon"></i>
				    
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
              <span>Copyright © CCC E-Learning by Power Research Team</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
	
	<!-- Forgot Account Modal-->
    <div class="modal fade" id="forgotaccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	 <form method="POST" action="log_out.php">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"  style="background-color:rgb(5, 69, 110);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">FIND YOUR ACCOUNT</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color:white;">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body"> 
			<p>If you are enrolled to Cainta Catholic College you may ask your Class Adviser to retrieve your account, she/he will ask the administrator to get your account.</p><br/>
		    <p>If you are not yet enrolled, you are not authorized to use the system.</p>
		  </ul>
		  
		  </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary btn-m" data-dismiss="modal" value="OK"/>
          </div>
        </div>
      </div>
	  </form>
    </div>
	                   <!-- Modal Greetings -->
	                    <div id="greetModal"  class="modal fade"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						 <form method="POST" >
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
							  <h4 id="role"></h4>
							  <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
							  </div>
							  <div class="modal-body">
							   <div class="form-group">
								 <div class="row">
									 <div class="col">
										 <center>
										 <img id="image"style="padding:10px;"src=""  class="img-thumbnail"/></center>
										 </center>
									 </div>
									 <div class="col">
										<div class="form-group">
											<label><h1>WELCOME</h1></label></br>
											<h5 id="username"></h5>
										</div>
									 </div>
								</div>			
							  </div>
							 <div class="modal-footer">
								<input type="submit" class="btn btn-primary btn-m" id="btn_proceed" name="btn_proceed" value="Proceed"/>
							</div>
							</div>
						   </div>
						  </div>
						  </form>
						</div>

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
	
	<!--php authentication start here -->
		<?php
			
			if(isset($_POST['btn_login']))
			{
				$username = $_POST['txt_username'];
				$password = $_POST['txt_password'];
				
				//select data from tblstudent, tblteacher and tbladmin database table
				$student = mysqli_query($con, "SELECT *,CONCAT(fname,' ',lname) as fullname from tblstudent where username = '$username' and password = '$password' ");
                $numrow = mysqli_num_rows($student);
				
				$teacher = mysqli_query($con, "SELECT *,CONCAT(fname,' ',lname) as fullname from tblteacher where username = '$username' and password = '$password' ");
				$numrow2 = mysqli_num_rows($teacher);
				
				$admin = mysqli_query($con, "SELECT *,CONCAT(fname,' ',lname) as fullname from tbladmin where username = '$username' and password = '$password' and accounttype = 'administrator'");
				$numrow3 = mysqli_num_rows($admin);
				
				
				//check if input have data on tblstudent
				 if($numrow > 0)
                {
                  while($row = mysqli_fetch_array($student))
				  {
                    $_SESSION['role'] = "student";
                    $_SESSION['userid'] = $row['id'];
					$_SESSION['tmpimages'] = $row['images'];
					$_SESSION['fullname'] = $row['fullname'];
                  } 
				    //this code is to proceed student dashboard
					
					 echo'<script type = "text/javascript" >
					 document.getElementById("role").innerHTML = "'.strtoupper($_SESSION['role']).'";
						document.getElementById("username").innerHTML = "'.$_SESSION['fullname'].'";
						document.getElementById("image").src = "'.$_SESSION['tmpimages'].'";
					 </script>';
					 echo '<script type="text/javascript">
					$(document).ready(function(){
						$("#greetModal").modal("show");
					});
					</script>';
					echo '<script type="text/javascript">
					$("#btn_proceed").click(function(){
					$.ajax({url: "login_page.php", success: function(result){
							location.replace("student_page.php");
						}});
					});
					
					</script>';
                }
				elseif($numrow2 > 0)
				{
					while($row = mysqli_fetch_array($teacher))
					{
					 $_SESSION['role'] = "teacher";
					 $_SESSION['userid'] = $row['id'];
					 $_SESSION['tmpimages'] = $row['images'];
					 $_SESSION['fullname'] = $row['fullname'];
					}
					 //this code is to proceed teacher dashboard
					 echo'<script type = "text/javascript" >
					 document.getElementById("role").innerHTML = "'.strtoupper($_SESSION['role']).'";
						document.getElementById("username").innerHTML = "'.$_SESSION['fullname'].'";
						document.getElementById("image").src = "'.$_SESSION['tmpimages'].'";
					 </script>';
					 echo '<script type="text/javascript">
					$(document).ready(function(){
						$("#greetModal").modal("show");
					});
					</script>';
					echo '<script type="text/javascript">
					$("#btn_proceed").click(function(){
					$.ajax({url: "login_page.php", success: function(result){
							location.replace("teacher_page.php");
						}});
					});
					
					</script>';
				
				}
				elseif($numrow3 > 0)
				{
					while($row = mysqli_fetch_array($admin))
					{
					 $_SESSION['role'] = "administrator";
					 $_SESSION['userid'] = $row['id'];
					 $_SESSION['tmpimages'] = $row['images'];
					 $_SESSION['fullname'] = $row['fullname'];
					
					}
					 //this code is to proceed admin dashboard
					 echo'<script type = "text/javascript" >
					 document.getElementById("role").innerHTML = "'.strtoupper($_SESSION['role']).'";
						document.getElementById("username").innerHTML = "'.$_SESSION['fullname'].'";
						document.getElementById("image").src = "'.$_SESSION['tmpimages'].'";
					 </script>';
					 echo '<script type="text/javascript">
					$(document).ready(function(){
						$("#greetModal").modal("show");
					});
					</script>';
					echo '<script type="text/javascript">
					$("#btn_proceed").click(function(){
					$.ajax({url: "login_page.php", success: function(result){
							location.replace("index.php");
						}});
					});
					
					</script>';
				}
				else
				{
					echo' 
                     <script>
                      document.getElementById("error").innerHTML = "Username and Password did not match!";
					 </script>
					 ';
					 
					
				}
			}
			else
			{
				exit();
			}
		
?>

  </body>

</html>
