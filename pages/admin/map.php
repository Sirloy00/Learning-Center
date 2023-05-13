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
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/icon" href="images/ccc-logo.png" />
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
       
  <!--nav bar-->
      <ul class="navbar-nav ml-auto ml-md-0"> 
		<!-- login --> 
        <li class="nav-item dropdown no-arrow">
            <a href="login_page.php" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                      <i class="fas fa-fw fa-sign-in-alt"></i>
                </span>
                <span class="text">LOGIN</span>
            </a>     
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
          <a class="nav-link" href="about_lms.php">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span></a>
        </li>
		<li class="nav-item active">
          <a class="nav-link" href="contact.php">
            <i class="fas fa-fw fa-phone"></i>
            <span>Contact Us</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- newspeed -->
          <div class="card mb-3">
            <div class="card-header" style = "background-color:rgb(51, 58, 65,0.2);">
             <h4> <i class="fas fa-fw fa-phone"></i>
              Contact Us</h4>
			</div>
            <div class="card-body">
			    <!-- navs -->
				<nav class="nav nav-pills nav-justified">
				  <a class="nav-item nav-link" href="contact.php"><h4>Contact</h4></a>
				  <a class="nav-item nav-link active" href="#"></h4>Site Map</h4></a>
				</nav><br/><br/>

                   <div   class="map-responsive" style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%20Cainta%20Catholic%20College%201900%20A.%20Bonifacio%20Ave%20Cainta%20Metro%20Manila%20Philippines+(Cainta%20Catholic%20College%20Map)&amp;ie=UTF8&amp;t=&amp;z=18&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Add map to website</a></iframe></div><br />
                   <style>
				   .map-responsive{
						overflow:hidden;
						padding-bottom:56.25%;
						position:relative;
						height:0;
					}
					.map-responsive iframe{
						left:0;
						top:0;
						height:100%;
						width:100%;
						position:absolute;
					}
				   </style>
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


  </body>

</html>
