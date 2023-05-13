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
		<li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-file-text"></i>
            <span>Quiz</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item active" title = "Click here to manage your quiz!" href="teacher_manage_quizOption.php" style="color: blue;"><span>Manage Quiz</span></a>
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
          <!-- Manage the Quiz -->
          <div class="card mb-3">
            <div class="card-header" style ="background-color:rgb(51, 58, 65,0.2)">
              <h4><i class="fas fa-gears"></i>
             Manage Quiz</h4></div>
            <div class="card-body" style="background-color:rgb(250, 229, 138)">
				<div class= "table-responsive"  style="padding:5px;">
				    <div  style="padding-bottom:10px;">                   
					    <button class="btn btn-primary btn-m" data-toggle="modal" data-target="#addquizModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Quiz</button>   
					</div>
					<table id="tblsavedquiz" class="table table-striped table-bordered">
						<thead>
							<tr>
							    <th style="width: 40px !important;">Action</th>
								<th>No.</th>
                                <th>Class Name</th>
								<th>Quiz Title</th>
								<th>Description</th>
                                <th>Subject</th>
								<th>Date/Time</th>
                                <th>Time/Duration</th>
								<th>Visibility</th>
                         	</tr>
						</thead>
						<tbody>
						  <?php
								$num=1;
                                $squery = mysqli_query($con, "SELECT * FROM tblsavedquiz WHERE uploader_id = '".$_SESSION['id']."' order by id ASC");
                                while($row = mysqli_fetch_array($squery))
                                {
                                    echo '
                                    <tr>
										<td>
											<button title="Edit Quiz" name="Edit" class="btn btn-primary btn-sm" data-target="#editquizModal'.$row['id'].'" data-toggle="modal"><i class="far fa-edit"></i></button>
											<button title="Delete Quiz" name="delete" class="btn btn-danger btn-sm" data-target="#deleteModal'.$row['id'].'" data-toggle="modal"><i class="far fa-trash-alt"></i></button></center>
											<button title="Quiz Testing" name="delete" class="btn btn-info btn-sm" data-target="#quiztestModal'.$row['id'].'" data-toggle="modal" style="margin-top:5px;"><i class="fas fa-check-square" style="height:15px;width:10px;"></i></button>
											<a role="button" title="View and manage quiz items!" name="Add" class="btn btn-success btn-sm" style="margin-top:5px;" href="teacher_manage_quiz_Question.php?quiz_title='.$row['quiz_title'].'&id='.$row['id'].'"><i class="fa fa-folder-open" aria-hidden="true"></i></a>
										</td>
										<td>'.$num.'</td>
										<td>'.$row['class_name'].'</td>
										<td>'.$row['quiz_title'].'</td>
										<td>'.$row['quiz_description'].'</td>
										<td>'.$row['subject'].'</td>
										<td>'.$row['date_time'].'</td>
										<td>'.$row['quiz_duration'].'</td>
										<td>'.$row['enabled'].'</td>
							        </tr>
                                     ';							
                                 $num++; 
								 include"teacher_manage_quizOption_editModal.php";
								 include"teacher_manage_quizOption_deleteModal.php";
								 include"teacher_quiz_takeModal.php";
                                }
                           ?>
						</tbody>
						<?php include"teacher_manage_quizOption_addquizModal.php"; ?>
						
					</table>
				</div>
			  </div>
				 <div class="card-footer small text-muted">Updated <?php echo date('l jS \of F Y h:i:s A'); ?></div>
            </div>
           
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright 2018© CCC E-Learning by Power Research Team</span>
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
    <script>
	$(document).ready(function(){
		$('#tblsavedquiz').DataTable();
	});
	</script>
  </body>

</html>
