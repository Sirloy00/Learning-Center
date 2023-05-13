<?php include('admin_header.php'); 

	include'../connection.php';
	session_start();
?>
  <body id="page-top">
  
<!-- search, notification,message and user profile -->
<?php include"student_headerpanel.php";?>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="font-size: 20px;">
		<li class="nav-item">
          <a class="nav-link" href="student_page.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-book"></i>
            <span>Learning Materials</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" title = "Click here to view your lessons" href="student_lessons.php" style="color: blue;"><span>My Lessons</span></a>
			<a class="dropdown-item" title = "Click here to view all learning materials" href="student_learningmaterials.php"style="color: blue;"><span>View all learning materials</span></a>
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
            <a class="dropdown-item" title = "Click here to view current quizzes!" href="student_quiz.php" style="color: blue;"><span>My Quiz</span></a>
			 <a class="dropdown-item" title = "Click here to view your quiz result!" href="student_quiz_result.php"style="color: blue;"><span>Quiz Result</span></a>
            <div class="dropdown-divider"></div>
          </div>
		  </li>
        </li>
		<li class="nav-item active">
          <a class="nav-link" href="student_assigment.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Assignment</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="student_subject.php">
            <i class="fas fa-fw fa-book"></i>
            <span>My Subjects</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="student_classmates.php">
            <i class="fas fa-fw fa-users"></i>
            <span>My Classmates</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#feedbackModal">
            <i class="fas fa-fw fa-paper-plane"></i>
            <span>Feedback</span></a>
        </li>
      </ul>
 <div id="content-wrapper">

        <div class="container-fluid">

          <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header" style = "background-color:rgb(51, 58, 65);color:white;border:1px solid black;">
              <h4><i class="fas fa-fw fa-file"></i>
              Assignment</div></h4>
            <div class="card-body" style="background-color:rgb(250, 229, 138);border:1px solid black;">
            <br/>
			    <div  style="padding-bottom:10px;">                   
					<button class="btn btn-primary btn-m" data-toggle="modal" data-target="#uploadassignModal"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp;Upload Assignment</button> 			
			    </div>
				<div class= "table-responsive">
					<table id="tblstudentassignment" style="border:solid 1px green;"class="table table-striped table-bordered">
						<thead style="background-color: green;color:white;">
							<tr>
							    <th>Action</th>
    							<th>No.</th>
								<th>Subject</th>
								<th>Profile Picture</th>
								<th>Teacher Name</th>
								<th>File Name</th>
                                <th>File</th>
								<th>Date Sent</th>
								<th>Download</th>
                         	</tr>
						</thead>
						<tbody>
						   <?php
								$num=1;
								$assquery = mysqli_query($con,"select *,ass.ass_id as assid,t.images as teacherimg,CONCAT(t.fname,' ',t.mname,' ',t.lname) as teachername,
								CONCAT(sb.subjectname,' - ',sb.Description) as sbname  from tblassignment ass 
								left join tblsubjects sb on ass.subject_id = sb.s_id
								left join tblteacher t on ass.teacher_id = t.id where ass.student_id = '".$_SESSION['student_id']."' order by ass.ass_id DESC");
                                while($row = mysqli_fetch_array($assquery))
                                {
                                    echo '
                                    <tr>
									    <td>
											<center>
											<button title="Edit Assignment" name="Edit" class="btn btn-primary btn-sm" data-target="#editassModal'.$row['assid'].'" data-toggle="modal"><i class="far fa-edit"></i></button>
											<button title="Delete Assignment" name="delete" class="btn btn-danger btn-sm" data-target="#deleteassModal'.$row['assid'].'" data-toggle="modal"><i class="far fa-trash-alt"></i></button></center>
								     	</td>
										<td>'.$num.'</td>
										<td>'.$row['sbname'].'</td>
										<td><center><img src="'.$row['teacherimg'].'"style="height:70px; width:90px;border:2px solid skyblue;"/></center></td>
										<td>'.$row['teachername'].'</td>
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
                                 $num++;             
                                }
							
                           ?>
						</tbody>
					</table>
					<?php include"student_assignment_uploadModal.php"?>
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
	<?php include"student_modal.php";?>

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
