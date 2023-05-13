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
		<li class="nav-item">
          <a class="nav-link" href="student_assignment.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Assignments</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="student_subject.php">
            <i class="fas fa-fw fa-book"></i>
            <span>My Subjects</span></a>
        </li>
		<li class="nav-item active">
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
              <h4><i class="fas fa-fw fa-users"></i>
              My Classmates</div></h4>
            <div class="card-body" style="background-color:rgb(250, 229, 138);border:1px solid black;">
            <br/>
				<div class= "table-responsive">
					<table id="tblstudentclassmates" style="border:solid 1px green;"class="table table-striped table-bordered">
						<thead style="background-color: green;color:white;">
							<tr>
								<th>Profile Picture</th>
                                <th>Student Name</th>
								<th>Year Level</th>
								<th>Class Name</th>
                                <th>Subject</th>
							</tr>
						</thead>
						<tbody>
						
						  <?php
						   $studclassquery = mysqli_query($con,"Select * from tblstudentclass where studentid = '".$_SESSION['student_id']."'");
								while($row = mysqli_fetch_array($studclassquery))
								{
									$_SESSION['student_subjectid'] = $row['subjectid'];
									$_SESSION['student_classid'] = $row['classid'];
									$_SESSION['student_teacherid'] = $row['teacherid'];
								}
								 $squery = mysqli_query($con, "select *,st.images as stimg,t.id as teacherid,c.class_id as cid, st.id as stid,
								  sb.s_id as sbid, sc.studclass_id as sid,CONCAT(st.lname, ', ', st.fname, ' ',st.mname) as sname,
								  CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as teachername from tblstudentclass sc 
								  left join tblclass c on sc.classid = c.class_id
								  left join tblstudent st on sc.studentid = st.id 
								  left join tblsubjects sb on sc.subjectid = sb.s_id 
								  left join tblteacher t on sc.teacherid = t.id  
								  where sc.classid = '".$_SESSION['student_classid']."' order by sc.classid ASC");
								  while($row = mysqli_fetch_array($squery))
								  {
									echo '
									<tr>
										<td><center><img src="'.$row['stimg'].'"style="height:70px; width:90px;border:2px solid skyblue;"/></center></td>
										<td>'.$row['sname'].'</td>
										<td>'.$row['year_level'].'</td>
										<td>'.$row['classname'].'</td>
										<td>'.$row['subjectname'].' - '.$row['Description'].'</td>
									</tr>
									'; 
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
		$('#tblstudentclassmates').DataTable();
	});
	</script>
  </body>

</html>
