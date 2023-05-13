<?php include('admin_header.php'); 

	include'../connection.php';
	session_start();
?>
  <body id="page-top">
  
<!-- search, notification,message and user profile -->
<?php include"teacher_headerpanel.php";?>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="font-size: 20px;">
		<li class="nav-item active">
          <a class="nav-link" href="teacher_page.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-book"></i>
            <span>Learning Materials</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" title = "Click here to manage your Lessons!" href="teacher_page_upload.php" style="color: blue"><span>My Lessons</span></a>
            <a class="dropdown-item" title = "Click here to find and download learning materials you need!" href="learning_materials.php" style="color: blue">View all learning materials</span></a>
            <div class="dropdown-divider"></div>
          </div>
		  </li>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-file-text"></i>
            <span>Quiz</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" title = "Click here to manage your quiz!" href="teacher_manage_quizOption.php" style="color: blue;"><span>Manage Quiz</span></a>
			 <a class="dropdown-item" title = "Click here to view the quiz result!" href="teacher_quizresult.php"style="color: blue;"><span>Quiz Result</span></a>
            <div class="dropdown-divider"></div>
          </div>
		  </li>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="teachers_assignment.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Assignment</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="teacher_announcement.php">
            <i class="fas fa-fw fa-microphone"></i>
            <span>Announcement</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="teachers_student.php">
            <i class="fas fa-fw fa-users"></i>
            <span>My Students</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="teachersforum.php">
            <i class="fas fa-fw fa-comments"></i>
            <span>Teacher's Forum</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#feedbackModal">
            <i class="fas fa-fw fa-paper-plane"></i>
            <span>Feedback</span></a>
        </li>
      </ul>
	  
 <div id="content-wrapper" >

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb"  style = "background-color:rgb(51, 58, 65,0.2);">
            <li class="breadcrumb-item">
              <h4><a href="#" >Home</a></h4>
            </li>
            <li class="breadcrumb-item" style="font-size:17px;" ><b>Overview</b></li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3" >
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5"><h3>Students</h3>
				   <span class="badge badge-default" style="font-size:30px;color:white;"> <?php
                             $squery = mysqli_query($con, "select * from tblstudentclass 
							  where teacherid = '".$_SESSION['id']."'");
						  $num_rows = mysqli_num_rows($squery);
                        echo $num_rows;
                            
                           ?>
				    </span>
				  </div>
                </div>
                <a title="Click here!" class="card-footer text-white clearfix small z-1" style="background-color:gray;" href="teachers_student.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-book"></i>
                  </div>
                  <div class="mr-5"><h3>Lessons</h3> 
				    <span class="badge badge-default" style="font-size:30px"><?php
                        $q = mysqli_query($con, "SELECT * FROM tbllearningmaterials WHERE sender_name = '".$_SESSION['id']."'");
                        $num_rows = mysqli_num_rows($q);
                        echo $num_rows;
                    ?></span>
				  </div>
                </div>
                <a title="Click here!" class="card-footer text-white clearfix small z-1" style="background-color:gray;" href="teacher_page_upload.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-file-text"></i>
                  </div>
                  <div class="mr-5"><h3>Quizzes </h3>
					  <span class="badge badge-default" style="font-size:30px"><?php
                        $q = mysqli_query($con,"SELECT * from tblsavedquiz where uploader_id = '$teacher_id'");
                        $num_rows = mysqli_num_rows($q);
                        echo $num_rows;
                    ?></span>
				  </div>
                </div>
                <a title="Click here!" class="card-footer text-white clearfix small z-1"style="background-color:gray;" href="teacher_manage_quizOption.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-envelope"></i>
                  </div>
				  <div class="mr-5"><h3>Videos</h3>
				    <span class="badge badge-default" style="font-size:30px"><?php
                        echo $_SESSION['message_count'];
		            	 ?>
			      </span>
				  </div>
                </div>
                <a title="Click here!" class="card-footer text-white clearfix small z-1"style="background-color:gray;" href="teacher_message_inbox.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright 2018© CCC Learning Management System by Power Research Team</span>
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
	
	<!-- reply,logout and recipient modal -->
	<?php include"teacher_modal.php";?>

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
