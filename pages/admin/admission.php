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
				  <a class="nav-item nav-link active " href="#">Admission Policy </a>
				  <a class="nav-item nav-link" href="enrollment.php">Enrollment Steps</a>
				</nav>
		         <br/>
			<div class = "container" style = "background-color:rgb(250, 229, 138); padding: 10px 10px 10px 10px;"><br/>
				<center><u><h4><strong>ADMISSION POLICY</strong></h4></u></center>
				<p>Admission of students is a sole prerogative of the Institution. Hence, the school reserves the right to admit or reject any student seeking admission in the school. 
					However, a student may only be admitted after he/she has accomplished/submitted the following requirements:
				</p>
				<button class="accordion">BASIC EDUCATION DEPARTMENT (Grade School, Junior High School & Senior High School)</button>
				<div class="panel">
				  <u><h4><strong>List of Requirements</strong></h4></u>
				  <ol  type="a">
						<li>Report Card (F-138) from the school last attended (Original & photocopy)</li>
						<li>NSO Birth Certificate (Original & photocopy)</li>
						<li>Baptismal Certificate (Original & photocopy)</li>
						<li>Two (2) 1 x 1 ID colored pictures</li>
						<li>Certification of passing the Entrance Examination</li>
						<li>Certification of Good Moral Character from the school last attended (Original & photocopy)</li>
						<li>1 Long Folder</li>
						<li>Two hundred Pesos (Php200.00) Entrance Fee</li>
						<li>Appearance of pupil applicants for oral interview</li>
				  </ol>
				  <u><h4><strong>Additional Requirements for Senior High School</strong></h4></u>
				  <ol>
						<li>For ESC Grantee, submit the ESC Certificate.</li>
						<li>For Voucher Recipient, (from Public School), submit the Certificate of Completion (photocopy).</li>
						<li>For Voucher Recipient, (from Private school), submit the QVR (photocopy).</li>
				  </ol>
				  <center><u><h4><strong>ALL REQUIREMENTS MUST BE COMPLETE</strong></h4></u></center>
				  <u><h4><strong>Guidelines for Admission</strong></h4></u>
				  <ol>
						<li>Graduates of CCC (Grade School Dept.) are exempted from taking the entrance examination for high school but are required to submit the original Report Card on or before the specified date.</li>
						<li>A student is officially enrolled upon presentation of the Student's Copy of the official Enrollment Form to the teacher or professor.</li>
						<li>No student will be admitted in the classroom without official Student Enrollment Form duly marked "Enrolled".</li><br />
						For more details, please visit us or contact the Registrar's Office at: 643-2000 / 248-2898
				  </ol><br />
				</div>
				
					  
				<button class="accordion">COLLEGE DEPARTMENT</button>
				<div class="panel">
				<u><h4><strong>FRESHMEN / FIRST YEAR</strong></h4></u>
					<ol  type="a">
						<li>Report Card (F-138) with at least 80% general average.</li>
						<li>NSO Birth Certificate (Original & photocopy).</li>
						<li>Baptismal Certificate (Original & photocopy).</li>
						<li>Two (2) recent 2 x 2 ID colored pictures.</li>
						<li>Php200.00 Testing Fee.</li>
						<li>Certification of Good Moral Character from an authorized school official (Original & photocopy).</li>
						<li>If married, marriage certificate issued by the Catholic Church.</li>
						<li>Personal appearance of College applicants for oral interview.</li>
						<li>Shall meet the specific requirements for the designated course applied for.</li>
					</ol>
				<u><h4><strong>OLD / CONTINUING STUDENTS</strong></h4></u>
					<ol type="a">
						<li>As a general rule, continuing students must have passed at least 60% of the total number of units taken in the previous semester including P.E. & NSTP-CWTS.</li>
						<li>For students seeking readmission after stopping for a semester or more:</li>
						<ol>
							<li>Must have not enrolled in another school.</li>
							<li>Must secure clearance from the Office of Student Affairs (Students found to have serious offenses may be denied re-admission).</li>
							<li>Must secure clearance from the Finance Office.</li>
		 
						</ol>
					</ol>
				<u><h4><strong>TRANSFEREES</strong></h4></u>
					<ol type = "a">
						<li>As a general rule, only students without failure, incomplete marks and dropped subjects may be admitted for academic promotion.</li>
						<li>Must apply within the prescribed period set by the school.
						<li>Must present the following credentials: Transfer Credential (Honorable Dismissal), Good Moral Character (Original & photocopy), Transcript of Records or Certificate of Grades with Remarks: For Evaluation purposes only, NSO Birth Certificate (Original & photocopy), Baptismal Certificate (Original & photocopy) and two (2) recent colored ID pictures (2 x 2).</li>
						<li>Php200.00 Testing Fee
						<li>Must pass the interviews and entrance examination given by the College.</li>
					</ol>
				<u><h4><strong>DEGREE HOLDERS / UNIT EARNERS</strong></h4></u>
					<ol type = "a">
						<li>Official Transcript of Records with Special Order from CHED.</li>
						<li>Two (2) recent ID colored pictures (2 x 2).</li>
						<li>NSO Birth Certificate (Original & photocopy).</li>
						<li>Baptismal Certificate (Original & photocopy).</li>
						<li>If married, marriage certificate issued by the Catholic Church.</li>
					</ol>
				 <u><h4><strong>Admission Procedure for Freshmen / Transferees</strong></h4></u>
					<ol type = "a">
						<li>Apply and present credentials to the Registrar's Office.</li>
						<li>Request for entrance examination schedule.</li>
						<li>Pay entrance examination fee and take examination on date designated at the Guidance Office.</li>
						<li>Depending on entrance examination result, report on designated schedule for interview (by the Guidance Counselor and Program Chairperson or the Dean).</li>
						<li>The Admission Committee shall thereafter review all admission credentials submitted, entrance examination and interview results and the other admission qualifications.</li>
						<li>Depending on the result and decision of the Admission Committee, report to the designated date of enrollment for registration.</li>
						<li>The decision of the Committee is final.</li><br />
						For more details, please visit us or contact the Registrar's Office at: 643-2000 / 248-2898.
					</ol><br />
				</div>
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
