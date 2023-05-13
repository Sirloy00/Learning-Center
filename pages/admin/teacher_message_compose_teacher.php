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
		<li class="nav-item">
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


      <div id="content-wrapper">

        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header" style = "background-color:rgb(51, 58, 65);color:white;border:1px solid black;">
              <h4><i class="fas fa-fw fa-edit"></i>
              Compose Message</div></h4>
            <div class="card-body" style="background-color:rgb(250, 229, 138);border:1px solid black;">
			<div class = "container" >
				<br/>
				<center><div class="col-sm-5 col-md-6">	
				<center><h2 class="alert alert-success">Message</h2></center>
				<form method="post" action ="teacher_message_teacher_addfunction.php" >	
				    <div class="form-group">
					    <select  required="true"  name="ddl_teacher_recipient" id="ddl_teacher_recipient" data-style="btn-primary" class="form-control input-sm">
                            <option value ="" selected disabled>-- Select Recipient --</option>
                            <?php
						        $q = mysqli_query($con,"SELECT *, CONCAT(fname, ' ',mname, ' ',lname) as tname from
							         tblteacher
							         order by lname Asc");
									while($row=mysqli_fetch_array($q))
									{
										echo '<option value="'.$row['tname'].'">'.$row['tname'].'</option>';
									}
						    ?>
                        </select>
			        </div>
					<div class="form-group">
						<textarea style ="height: 120px" class="form-control" placeholder="Your Message" name="msg" required></textarea>	
					</div>	
					<div class="form-group">
						<input class="btn btn-success btn-block" name="btn_send"  type="submit" value="Send">	
					</div>	
				</form>	
			</div></center>
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
    <?php include"teacher_modal.php"; ?>

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
