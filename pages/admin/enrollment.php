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
	<!-- Accordion style -->
		<style>
		.accordion {
			background-color:rgb(51, 58, 65);
			color: white;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;
		}

		.accactive, .accordion:hover {
			background-color: blue;
		}

		.accordion:after {
			content: '\002B';
			color: #777;
			font-weight: bold;
			float: right;
			margin-left: 5px;
		}

		.accactive:after {
			content: "\2212";
		}

		.panel {
			padding: 0 18px;
			background-color: white;
			max-height: 0;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
		}
		</style>
   
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html"><span><img src="images/ccc-logo.png" style="height: 50px; width: 60px" alt="ccc-logo" /> &nbsp;CCC-LMS</span></a>

      &nbsp; &nbsp;<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

  
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
      </form>
       
	  <!--nav bar-->
      <ul class="navbar-nav ml-auto ml-md-0"> 
		<!-- login --> 
        <li class="nav-item dropdown no-arrow">
            <h5>
			<a class="nav-link" href="login_page.php">
           <i style="color:blue;font-size:18px;" class="fas fa-fw fa-sign-in-alt"></i>
            <span>LOGIN</span></a>
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
            <a class="dropdown-item" href="about_lms.php" style="color:blue;">Learning Management System</a>
            <a class="dropdown-item" href="about.php" style="color:blue;">Cainta Catholic College</a>
  
          </div>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="academics.php">
            <i class="fas fa-fw fa-book"></i>
            <span>Academics</span></a>
        </li>
		 <li class="nav-item active">
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
            <div class="card-header" style = "background-color:rgb(51, 58, 65);color:white;">
              <h4><i class="fas fa-fw fa-file-text"></i>
              Admission</h4></div>
            <div class="card-body">
				<!-- navs -->
			
				<nav class="nav nav-pills nav-justified">
				  <a class="nav-item nav-link" href="admission.php">Admission Policy </a>
				  <a class="nav-item nav-link active" href="#">Enrollment Steps</a>
				</nav>
				<br/>
			<div class = "container" style = "background-color:rgb(250, 229, 138); padding: 10px 10px 10px 10px;">
				
				<br/><center><u><h4><strong>REGISTRATION PROCEDURES/STEPS</strong></h4></u></center><br/>
				<button class="accordion">Basic Education Department (Grade School / High School)</button>
				<div class="panel">
					<ol>
						<br />
						<li>Present the Report Card to Enrolling Teacher and secure a copy of MODE OF PAYMENT.</li>
						<li>Secure the Checklist of Books from the Librarian assigned near the MIS OFFICE/DATA CENTER (2nd Floor). Then proceed to the following places:</li>
						<li>MIS/DATA CENTER - for Encoding and Assessment. Sign the Enrollment Form to be given by MIS Staff before leaving the area.</li>
						<li>CASHIER'S WINDOW - for receipt and payment.</li>
						<li>REGISTRAR'S OFFICE - for VERIFICATION. Be sure that the Enrollment Form will be marked ENROLLED and cut before leaving.</li>
						<li>Go back to the 2nd Floor for Book Issuance.</li>
						<li>Proceed to Convenience Store for School Uniform and School Supplies.</li>
					</ol><br />
					<center><u><h4><strong>REMINDER</strong></h4></u></center>
					<center>KEEP THE STUDENT ENROLLMENT FORM AND SUBMIT IT TO THE ADVISER ON THE FIRST DAY OF CLASSES.</center><br />
				</div>
				
				<button class="accordion">College Department</button>
				<div class="panel">
					<ol>
						<br />
						<li>Secure and accomplish an Enrollment Clearance Form from the College Secretary.</li>
						<li>Present the accomplished form to secure the Registration and Advising Form from the College Secretary.</li>
						<li>Go to Enrollment Adviser or Program Head for subject loads.</li>
						<li>Choose the desired schedule for the required subjects. Go back to the Course Adviser for validation of subjects.</li>
						<li>Proceed to the Management Information System (MIS) for enlistment and assessment of fees.</li>
						<li>Pay the tuition fee at the Finance Office.</li>
						<li>Present the Registration and Advising Form and Official Receipt at the Registrar's Office to claim the class cards.</li>
						<li>Important: Registration/Enrollment Form and Class Cards must be presented to the Instructors on the opening of classes.</li>
					</ol><br />
				</div><br />
				
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
	
	<!--accourdion script -->
	<script>
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight){
				  panel.style.maxHeight = null;
				} else {
				  panel.style.maxHeight = panel.scrollHeight + "px";
				} 
			  });
			}
		</script>
		<script type="text/javascript">
		  $(document).ready(function() {
		  $('.accordion').click();
		});
		</script>
	
	
	

  </body>

</html>
