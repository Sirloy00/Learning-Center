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
		<li class="nav-item active">
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

          <!-- about Learning Management System(lms) -->
          <div class="card mb-3">
            <div class="card-header" style = "background-color:rgb(51, 58, 65,0.2);">
              <h4><i class="fas fa-info-circle"></i>
              About</div></h4>
            <div class="card-body" style = "background-color:rgb(250, 229, 138);">
				<h3>What is Learning Management System?</h3>
				<ul>
					<li>The learning management system is a web-based learning ecosystem integrating several schools with technology and processes. With the popularization and expansion of access to the World Wide Web and greater access to devices to access
					through Internet, such as smartphones, laptops, tablets, and computers.The importance of learning management system is now a given fact and it can offer an alternative that is much faster, cheaper and potentially better educational tools.
					</li>
				    <br/>
				    <h5>The system is sub-devided into 5 user group:</h5>
					<br/>
					<h5>Student</h5>
					<ul>
						<li>Students can download learning materials of all their enrolled subjects.</li>
						<li>Taking quiz online.</li>
						<li>Message the subject teachers, administrator and classmates.</li>
						<li>View the announcement or reminders.</li>
						
					</ul>
					<h5>Teacher</h5>
					<ul>
						<li>Teachers can upload/download learning materials in all subjects.</li>
						<li>Create a quiz online.</li>
						<li>Communicate the students and co-teachers.</li>
						<li>Message the administrator.</li>
						<li>View the announcement or reminders.</li>
						<li>Post an announcement.</li>
					</ul>
					<h5>Main Administrator</h5>
					<ul>
					    <li>Manage the admin</li>
						<li>The administrator can manage all data in the system.</li>
						<li>Monitor the teacher's activity.</li>
						<li>Message the teachers.</li>
						<li>Assist the users.</li>
						<li>Post an announcement.</li>
					</ul>
					<h5>Administrator</h5>
					<ul>
						<li>The administrator can manage all data in the system.</li>
						<li>Monitor the teacher's activity.</li>
						<li>Message the teachers.</li>
						<li>Assist the users.</li>
						<li>Post an announcement.</li>
					</ul>
					<h5>Visitor</h5>
					<ul>
						<li>View the Cainta Catholic College information.</li>
						<li>Inquire Online.</li>
					</ul>
				</ul>
				<h3>History</h3>
				<ul>
					<li>In traditional way of learning, normally teachers discussing his/her lesson by writing of lectures in the blackboard and the student taking notes which consumes time that must provide in discussion. Most teachers often deal with using books or modules usually required to have distinct connection between teachers and students for better understanding. When it comes to overall cost of learning materials, it’s expensive for the students and usually used it only for in a whole year or semester. The major problems faces by the students is sometimes being absent in a particular class for some reason and missed the important class discussion, quizzes, activities and exams that affects academic performance of the student. 
					One of the most challenge faces by the teachers is often deals with the enhancing of students’ academic performance. One of the teaching techniques that arise now from integration of technology in education is the availability of learning tools that suitable in different types of learners. Some of techniques engaged with the teaching is provides virtual learning environment. From the typical traditional teaching like teachers explaining a topic and students taking notes during classes, up to using of technology in the classroom in presenting reports or research. But the problem is, some of teachers did not send the learning materials for the student in order to have a copy for them to remind the whole lesson before taking exam or quiz. Some of students taking picture each by each of slide in PowerPoint presentation for each subject which increases the storage capacity of their smartphones and unordered list of information that is hard to understand. Some students asking for their teachers to get the copy of the learning materials through flash drive which is highly potentials to harm your computer or even the data from your flash drive through computer virus. 
								Therefore, the researchers from the Computer Science Department develop a system but with different variation that will contribute to the necessity of both secondary and tertiary students and teachers of Cainta Catholic College.
					 Just to compete with the evolution of the modern technologies that most of time caught the attention of the students. A new way of approaching students to value and give more focus on their studies. The collaboration of technology and education is essentials and an effective way to help improves both teaching and learning.
					The researchers proposed CCC learning management system that will help to improve both teaching-learning processes in Cainta Catholic College with the use of modern technology. The learning management system is a web design system that offers large varieties of learning resources and tools use in the classroom.  The expanded rapidly of electronic devices such as smartphones, tablets, pc and laptops all over the world is giving importance to develop a system for the accessibility for ease which is taken under the specification requirements to run the system.
					In conclusion learning management system offers great promise for enhancing the quality of education beside traditional classroom.
					However, not only separate learning but also face to face learning has advantages as well as downsides. In that case, many researchers believe that combining two pedagogical methods can be effective ways in improving educational future.
					</li>
				</ul>
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
