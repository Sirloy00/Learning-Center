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
		<li class="nav-item active">
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
			<a class="dropdown-item" title = "Click here to view all learning materials" href="student_learningmaterials"style="color: blue;"><span>View all learning materials</span></a>
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
            <a class="dropdown-item" title = "Click here to view current quizzes!" href="student_quiz" style="color: blue;"><span>My Quiz</span></a>
			 <a class="dropdown-item" title = "Click here to view your quiz result!" href="student_quiz_result"style="color: blue;"><span>Quiz Result</span></a>
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

          <!-- Breadcrumbs-->
          <ol class="breadcrumb" style = "background-color:gray;color:white;">
            <li class="breadcrumb-item" style="color:white;font-size:18px;">
              <b><a href="#" style="color:white;">Home</a></b>
            </li>
            <li class="breadcrumb-item" style="color:white;font-size:18px;" ><b>Overview</b></li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3" >
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5"><h3>Lessons</h3>
				   <span class="badge badge-default" style="font-size:30px;color:white;"> 
				     <?php     
					    $studclassquery = mysqli_query($con,"Select * from tblstudentclass where studentid = '".$_SESSION['student_id']."'");
						$numresult = mysqli_num_rows($studclassquery );
						echo $numresult;										 
								
                    ?>
				
				    </span>
				  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" style="background-color:gray;" href="student_lessons.php">
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
                    <i class="fas fa-fw fa-upload"></i>
                  </div>
                  <div class="mr-5"><h3>Assignment</h3> 
				    <span class="badge badge-default" style="font-size:30px">0</span>
				  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" style="background-color:gray;" href="teacher_page_upload.php">
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
					  <span class="badge badge-default" style="font-size:30px">0</span>
				  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1"style="background-color:gray;" href="teacher_manage_quizOption.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
			 <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-info o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-book"></i>
                  </div>
                  <div class="mr-5"><h3>Subjects </h3>
					  <span class="badge badge-default" style="font-size:30px">
					  <?php
					   $studclassquery = mysqli_query($con,"Select * from tblstudentclass where studentid = '".$_SESSION['student_id']."'");
					   $studentsubjnum = mysqli_num_rows($studclassquery);
					   echo $studentsubjnum;
					  ?>
					  </span>
				  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1"style="background-color:gray;" href="student_subject.php">
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
				  <div class="mr-5"><h3>New Messages</h3>
				    <span class="badge badge-default" style="font-size:30px"><?php
                        echo $_SESSION['student_message_count'];
		            	 ?>
			      </span>
				  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1"style="background-color:gray;" href="teacher_message_inbox.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        <!-- /.container-fluid -->
		
          <!-- Announcement -->
          <div class="card mb-3">
            <div class="card-header"  style = "background-color:rgb(51, 58, 65);color:white;border:1px solid black;">
              <h4><i class="fas fa-microphone"></i>
              Announcement</h4></div>
            <div class="card-body" style="background-color:rgb(250, 229, 138);border:1px solid black;">
              <br/>
			  <?php
			    $studclassquery = mysqli_query($con,"Select * from tblstudentclass where studentid = '".$_SESSION['student_id']."'");
				while($row = mysqli_fetch_array($studclassquery))
				{
					$_SESSION['student_subjectid'] = $row['subjectid'];
					$_SESSION['student_classid'] = $row['classid'];
					$_SESSION['student_teacherid'] = $row['teacherid'];
				$query = mysqli_query($con, "Select *,t.images as timg,CONCAT(sb.subjectname,' - ',sb.Description) as sbname,CONCAT(t.fname,' ', t.mname,' ', t.lname)  as tname  from tblannouncement a left join tblteacher t on a.sender_id = t.id 
				left join tblsubjects sb on a.subject_id = sb.s_id 
				left join tblclass c on a.class_id = c.class_id 
				where a.sender_id = '".$row['teacherid']."' and a.subject_id = '".$row['subjectid']."' order by a.announcement_id DESC
				");
				$numresult = mysqli_num_rows($query);
				$_SESSION['numresult']=$numresult ;
		
					while($row2 = mysqli_fetch_array($query))
					{
						echo'
					 <img src = "'.$row2['timg'].'" style="height: 45px; width: 55px;border-radius:100%;border:2px solid skyblue;" />&nbsp;<b>
					  '.$row2['tname'].'</b></span>
					  <ul style="list-style: none;">
						 <li><i class="fas fa-fw fa-clock" style="font-size:10px;color:gray"></i>&nbsp  <span style="font-size: 12px; color: red" >'.$row2['date_time'].'</span></li><br/>
						 <li><span style="color:blue;"><b>Subject :</b></span>  &nbsp; '.$row2['sbname'].'</li><br/>
						 <li><i class="fas fa-fw fa-envelope"  style="color:gray"></i> &nbsp; '.$row2['announcement'].'</li><br/>
						 
					  </ul>
					  <div class="dropdown-divider"></div>
					
					';
					
					}
				
				}
			
				?>
			
			  <br/>
           
            </div>
          </div>

        

      </div>
      <!-- /.content-wrapper -->
<!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright 2018© CCC Learning Management System by Power Research Team</span>
            </div>
          </div>
        </footer>
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

	
  </body>

</html>
