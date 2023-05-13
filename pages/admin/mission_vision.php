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
            <div class="card-body" >
			    <!-- navs -->
				<nav class="nav nav-pills nav-justified">
				  <a class="nav-item nav-link" href="about.php">History</a>
				  <a class="nav-item nav-link" href="education.php">Education</a>
				  <a class="nav-item nav-link active" href="#">Vision-Mission</a>
				  <a class="nav-item nav-link" href="seal.php">The Seal</a>
				  <a class="nav-item nav-link" href="campus.php">Campus</a>
				  <a class="nav-item nav-link" href="ccchym.php">CCC Hymn</a>
				</nav>
			    <br/>   	
						
					<!--TAB CONTENT Vision-Mission-->
				<div id="Vision-Mission" class="tabcontent">
				<div class = "container"  style = "background-color:rgb(250, 229, 138); padding: 10px 10px 10px 10px;">
					<hr>
					<div  style = "padding-left: 50px;padding-right: 50px; ">
						<center><h3 style = "color: black" id = "vision">VISION</h3></center>
						<br>
						<center><p style = "color: black">A community of Christ's faithful in communion and mission <br> and an instrument of the local church,  <br>
						Cainta Catholic College proclaims  <br> the Good News of Truth, Justice and Love,  <br> integrates faith and life to form human persons, 
						<br> and thereby build a society of integrity and peace. </p></center>
						<br><br>
						<hr style = "border-color:yellow;">
						<center><h3 style = "color: black" id = "mission">MISSION</h3></center>
						<br>
						<center><p style = "color: black">Under the patronage of Mary, Our Lady of Light, <br> Cainta Catholic College strives to become   <br>
						the preferred educational institution and   <br> center of evangelization and religious formation   <br> of the Diocese of Antipolo.  
						<br><br> In a collaborative and committed community of faith, <br> it offers learner-centered and technology-enabled programs and services,<br>
						with Religion at the core, to form competent and socially responsible human <br> persons who are faithful stewards of creation. <br> </p></center>
						<br>
						<hr style = "border-color:yellow;">
						<center><h3 style = "color: black" id = "goals">GOALS</h3></center>
						<br>
						<center><p style = "color: black">Strengthen Christ-centered formation that integrates faith and life <br> in a balanced curriculum.  <br><br>
						Promote the spirit of collaboration where individual charism  <br> is shared and commitment is enhanced.   <br><br> Develop socially responsible persons who are faithful stewards , 
						<br> of creation and advocates of truth, justice and love.</p></center>
						<br>
						<hr style = "border-color:yellow;">
						<center><h3 style = "color: black" id = "insti">CCC INSTITUTIONAL CORE VALUES</h3></center>
						<br>
						<center><div style = "display: inline-block;">
							<ol style = "list-style-position: inside; text-align: left;">
								<li>CHRIST-CENTERED</li>
								<li>COMMUNION</li>
								<li>MISSION</li>
								<li>FAITH</li>
								<li>TRUTH</li>
								<li>JUSTICE</li>
								<li>LOVE</li>								
							</ol>
						</div></center>
						<br>
						<hr style = "border-color:yellow;">
						<center><h2 style = "color: black" id = "obj">CCC OBJECTIVES</h2></center>
						<br>
						<ol style = "text-align:justify;">
							<li>Provide students with experience that will allow them to witness in their 
							daily lives the gospel ideas of love and justice; discover their personal worth 
							persons and relate meaningfully with their family, school and the church community.</li>
							<li>Encourage students to achieve academic excellence and develop the necessary values,
							habits and attitudes that will help them face the challenges of the constantly changing society.</li>
							<li>Enhance different interests and aptitudes so as to equip the students with skills for productive endeavors.</li>
							<li>Develop the students' utmost physical well being, self-discipline and self-transformation in their daily life.</li>
							<li>Develop leadership skills among students showing refinement in their bearing and character.</li>										
						</ol>
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
