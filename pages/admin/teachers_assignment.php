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
		<li class="nav-item active">
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
            <div class="card-header" style ="background-color:rgb(51, 58, 65,0.2)">
              <h4 ><i class="fas fa-fw fa-file"></i>
              Assignment</h4></div>
              <div class="card-body" style="background-color:rgb(250, 229, 138)" >
				  <br/>
				<div class= "table-responsive">
					<table id="tblstudentassignment" class="table table-striped table-bordered">
						<thead>
							<tr>
							    <th>Action</th>
    							<th>No.</th>
								<th>Subject</th>
								<th>Profile Picture</th>
								<th>Student Name</th>
								<th>File Name</th>
                                <th>File</th>
								<th>Date Sent</th>
								<th>Download</th>
                         	</tr>
						</thead>
						<tbody>
						   <?php
								$num=1;
								$assquery = mysqli_query($con,"select *,ass.ass_id as assid,st.images as studimg,t.images as teacherimg,CONCAT(t.fname,' ',t.mname,' ',t.lname) as teachername,
								CONCAT(st.fname,' ',st.mname,' ',st.lname) as studname,
								sb.subjectname as sbname  from tblassignment ass 
								left join tblsubjects sb on ass.subject_id = sb.s_id
								left join tblstudent st on ass.student_id = st.id
								left join tblteacher t on ass.teacher_id = t.id where ass.teacher_id = '".$_SESSION['id']."' order by ass.ass_id DESC");
                                while($row = mysqli_fetch_array($assquery))
                                {
                                    echo '
                                    <tr>
									    <td>
											<center>
											<button title="Delete Assignment" name="delete" class="btn btn-danger btn-sm" data-target="#deleteassModal'.$row['assid'].'" data-toggle="modal"><i class="far fa-trash-alt"></i></button></center>
								     	</td>
										<td>'.$num.'</td>
										<td>'.$row['sbname'].'</td>
										<td><center><img src="'.$row['studimg'].'"style="height:70px; width:90px;border:2px solid skyblue;"/></center></td>
										<td>'.$row['studname'].'</td>
										<td>'.$row['file_name'].'</td>
										<td>'.$row['file'].'</td>
										<td>'.$row['date_sent'].'</td>
										<td>
											<center>
											<a  name="won" title="Click here to download!" role="button" class="btn btn-primary btn-sm"  href ="'.$row['file'].'"><i class="fas fa-fw fa-download"></i>Download</a>
											</center>
										</td>
							        </tr>
                                     ';	
									include"teachers_assignment_deleteModal.php";
                                 $num++;             
                                }
							
                           ?>
						</tbody>
					</table>
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
              <span>Copyright 2018© CCC E-Learnings by Power Research Team</span>
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
		$('#tblstudentassignment').DataTable();
	});
	</script>
  </body>

</html>
