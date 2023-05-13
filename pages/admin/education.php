<!DOCTYPE html>

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
          <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="about_lms.php" style="color:blue;">Learning Management System</a>
            <a class="dropdown-item active" href="about.php" style="color:blue;">Cainta Catholic College</a>
  
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
            <div class="card-header" style = "background-color:rgb(51, 58, 65);color:white;">
              <h4> <i class="fas fa-fw fa-info-circle"></i>
              About</h4>
			</div>
            <div class="card-body">
			    <!-- navs -->
				<nav class="nav nav-pills nav-justified">
				  <a class="nav-item nav-link" href="about.php">History</a>
				  <a class="nav-item nav-link active" href="#">Education</a>
				  <a class="nav-item nav-link" href="mission_vision.php">Vision-Mission</a>
				  <a class="nav-item nav-link" href="seal.php">The Seal</a>
				  <a class="nav-item nav-link" href="campus.php">Campus</a>
				  <a class="nav-item nav-link" href="ccchym">CCC Hymn</a>
				</nav>
				<br/>
				     	
						
						<!--TAB CONTENT EDUCATION-->
		             <div id="Education" class="tabcontent">
		             <div class = "container" style = "background-color:rgb(250, 229, 138); padding: 10px 10px 10px 10px;">
		           	 <hr>
			         <div  style = "padding-left: 50px;padding-right: 50px; ">
				    <div style = " color: black;">
					<h3 style = "text-align: center">EDUCATIONAL THRUSTS <br> FOR THE ACADEMIC YEARS 2008 - 2011 <h4 style = "text-align: center" > TOWARDS CCC GOLDEN JUBILEE & BEYOND</h4> </h3>
					<br><br>
					<h5><strong> EDUCATIONAL THRUST 1 <br> Communion and Mission in Evangelization: Nurture a vibrant Catholic culture.</strong></h5>
					<br>
					<h5>Objectives</h5>
					<ol>
					  <li>Promote deep spiritual maturity among all the members of the school community through seminars, retreats and liturgical celebrations.</li>
					  <li>Implement orientation and formation strategies for faculty staff, students, parents, and alumni that will communicate the CCC vision-mission and core values.</li>
					  <li>Inspire and foster members of the community to actively integrate the CCC vision-mission and core values in the school environment.
							<ol type="a">
								<li>Develop a deep sense of Honesty & integrity.</li>
								<li>Foster a strong sense of Fairness in the relations with community members and students.</li>
								<li>Nurture the spirit of fellowship, transforming CCC as a community of care, concern and love for each other.</li>
							</ol></li>
					   <li>Create innovative initiatives that will make CCC a true Instrument of Evangelization of Our Lady of Light Parish and the Diocese of Antipolo.</li>
					   <li>Persuade all members of the school community to actively participate in the apostolate, ministries, and mandated organizations of their respective parishes and the diocese.</li>
					</ol> 
					<h5>Performance Indicators</h5>
					<ol>
					  <li>Faculty, staff, students, parents, alumni and members of the parish community collaborate in providing Catechetical Instruction to the youth of Cainta and the Diocese</li>
					  <li>Active and inspired participation of members of the community in the parish ministries and community extension services.</li>
					  <li>Training of Catechists and Lay leaders;</li>
					  <li>Holding of conferences, seminars and symposia on Church affairs.</li>
					</ol> 
				</div>
				<br>
				<div style = " color: black;">
				<h5><strong> EDUCATIONAL THRUST 2 <br> Communion & Mission in Academic Excellence: Advance academic quality and innovation. </strong></h5>
				<br>
				<h5>Objectives</h5>
					<ol>
					  <li>Advance student learning through teaching excellence and a dynamic curriculum.</li>
					  <li>Create a definite program for faculty development and strengthen faculty competencies.</li>
					  <li>Continue efforts to develop technological competency among both faculty and students.</li>
					  <li>Intensify efforts to develop interactive and collaborative teaching and learning.</li>
					  <li>Develop the sense of discipline and passion for learning and teaching among the members of the faculty.</li>
					  <li>Promote a deep Sense of Responsibility among the members of the faculty:
							<ol type="a">
								<li>Maximalism</li>
								<li>Service Orientation</li>
								<li>Client-centered</li>
								<li>Discipline & Punctuality</li>
							</ol></li>
					</ol> 
					<h5>Performance Indicators</h5>
					<ol>
					  <li>Level II Accreditation</li>
					  <li>Functional integration of ICT (computers, Internte, e-learning: computer assisted instruction and learning) into the curriculum.</li>
					  <li>Qualified and competent teachers with dedication and passion for developing the human person</li>
					  <li>Established school of nursing through twinning or ladderized program.</li>
					</ol> 
				</div>
				<br>
				<div style = " color: black;">
					<h5><strong> EDUCATIONAL THRUST 3 <br> Communion & Mission in Governance: Create committed and collaborative leadership for institutional improvement.</strong></h5>
					<br>
					<h5>Objectives</h5>
					<ol>
					  <li>Establish a process for aligning faculty recognition, rewards, retention, promotion and tenure with the mission, vision, and core values.</li>
					  <li>Implement a performance-based incentive program that recognizes excellence and rewards advancement.</li>
					  <li>Establish training and professional development programs that bolster excellence in cross-functional team building, collegiality, shared governance, and effective administration.</li>
					  <li>Encourage school administrators and personnel to become more service-oriented, client-centered and humane.</li>
					</ol> 
					<h5>Performance Indicators</h5>
					<ol>
					  <li>Performance Audit (use of performance appraisal system)</li>
					  <li>Rational System of rewards and compensation</li>
					  <li>Periodic measurements of faculty and staff satisfaction</li>
					  <li>Team and participative management</li>
					</ol> 
				</div>
				<br>
				<div style = " color: black;">
					<h5><strong> EDUCATIONAL THRUST 4 <br> Communion & Mission in Financial Sustainability: Develop stewardship and ownership of Cainta Catholic College.</strong></h5>
					<br>
					<h5>Objectives</h5>
					<ol>
					  <li>Increase the size of enrollment and diversify program offering</li>
					  <li>Enhance student succes while increasing retention and graduation rates</li>
					  <li>Ensure and maintain schools' financial viability</li>
					  <li>Implement a comprehensive facilities management system for campus operations</li>
					  <li>Establish a functional Marketing and public relations program</li>
					</ol> 
					<h5>Performance Indicators</h5>
					<ol>
					  <li>Steady increase of enrollment; less drop-outs and summer graduate students</li>
					  <li>Balance and integrated curriculum with religuos education at the core</li>
					  <li>Promoted the image and reputation of CCC</li>
					  <li>Cost-cutting Program implemented</li>
					  <li>Enhanced quality of the campus environment</li>
					</ol> 
				</div>
				<br>
				<div style = " color: black;">
					<h5><strong> EDUCATIONAL THRUST 5 <br> Communion & Mission in Social Relevance and Responsibility: Build and maintain linkages and community engagement.</strong></h5>
					<br>
					<h5>Objectives</h5>
					<ol>
					  <li>Develop a strong sense of Social Responsibility and Integrity among the employees, faculty, current students and alumni</li>
					  <li>Cultivate a profound sense of Patriotism among the members of the community, especially among the students and alumni</li>
					  <li>Train students to become more concerned with the environment, thereby forming them to become dedicated stewards of creation</li>
					   <li>Develop a culture of giving among current students and alumni</li>
					   <li>Make our outreach/Community extension program more extensive</li>
					   <li>Strengthen alumni affiliation and relations with CCC</li>
					   <li>Enhance social responsibility and community service among our alumni</li>
					</ol> 
					<h5>Performance Indicators</h5>
					<ol>
					  <li>Annual homecoming of Silver and Golden Jubilarians</li>
					  <li>Scholarship grants, donations from alumni associations</li>
					  <li>Expanded interaction and networking between alumni and students and continued assistance of alumni with job placement and career development</li>
					  <li>CCC alumni who are actively practice their Christian faith and are honest, just, socially responsible and faithful stewards of creation</li>
					</ol> 
				</div>
			</div>
		</div>
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


  </body>

</html>
