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
            <a class="dropdown-item" title = "Click here to manage your learning materials!" href="teacher_page_upload.php" style="color: blue"><i class="fas fa-fw fa-upload"></i><span>&nbsp;My uploads</span></a>
            <a class="dropdown-item" title = "Click here to find and download learning materials you need!" href="learning_materials.php" style="color: blue"><i class="fas fa-fw fa-eye"></i><span>&nbsp;View all learning materials</span></a>
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
            <a class="dropdown-item" title = "Click here to manage your quiz!" href="teacher_manage_quizOption.php" style="color: blue;"><i class="fas fa-fw fa-gear"></i><span>&nbsp; Manage Quiz</span></a>
			 <a class="dropdown-item" title = "Click here to view the quiz result!" href="teacher_quizresult.php"style="color: blue;"><i class="far fa-file-text"></i><span>&nbsp;&nbsp;Quiz Result</span></a>
            <div class="dropdown-divider"></div>
          </div>
		  </li>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-file-text"></i>
            <span>Assignment</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" title = "Click here to manage your assignment!" href="teacher_manage_assignment.php" style="color: blue;"><i class="fas fa-fw fa-gear"></i><span>&nbsp; Manage Assignment</span></a>
			<a class="dropdown-item" title = "Click here to view the assignment result!" href="teacher_assignmentresult.php"style="color: blue;"><i class="far fa-file-text"></i><span>&nbsp;&nbsp;Assignment Result</span></a>
          <div class="dropdown-divider"></div>
          </div>
		  </li>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="teachers_student.php">
            <i class="fas fa-fw fa-users"></i>
            <span>My Students</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="teachers_chatroom.php">
            <i class="fas fa-fw fa-comments"></i>
            <span>Chat Room</span></a>
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

        <div class="container-fluid" >
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header" style = "background-color:rgb(51, 58, 65);color:white;">
              <h4><i class="fas fa-fw fa-download"></i>
              Message Inbox</h4></div>
            <div class="card-body" >
			    
            <?php
			           $querynum = mysqli_query($con, "select * from message where receiver_name = '$username'");
                        $num_rows2 = mysqli_num_rows($querynum);
						$_SESSION['total_message'] = $num_rows2;
                        
			                if($_SESSION['total_message'] == 0)
								{
									echo '<center><h6>No message available!</h6><center>';
								}
						    else
							{
								$squery = mysqli_query($con, "select * from message where receiver_name = '$username' order by message_id DESC ");
								while($row = mysqli_fetch_array($squery))
								{
									
								
									    $_SESSION['sender_name'] = $row['sender_name'];
										$_SESSION['sender_image'] = $row['images'];
										$_SESSION['message'] = $row['message'];
										$_SESSION['date_sent'] = $row['date_sent'];
										$msg_display = $_SESSION['message'];
										$_SESSION['message_id']=$row['message_id'];
										 ?>
									   <?php
									   echo'
										<img src = "'.$_SESSION['sender_image'].'" style="height: 45px; width: 55px;border-radius:100%;" />&nbsp;<b><span style="font-size:15px">
										'.$_SESSION['sender_name'].'</b></span> 
										 <ul style="list-style: none;">
											 <li><i class="fas fa-fw fa-clock" style="font-size:10px;color:gray"></i>&nbsp  <span style="font-size: 9px; color: red" >'.$_SESSION['date_sent'].'</span></li>
											 <li><i class="fas fa-fw fa-envelope"  style="color:gray"></i> &nbsp';?>  <?php  echo $msg_display; echo'</li><br/>
											 <li>
												<a class="btn btn-success" href="#reply'.$_SESSION['message_id'].'" data-toggle="modal"><i class="far fa-edit"></i>&nbsp Reply</a>
												<a  class="btn btn-danger" href="" data-toggle="modal"><i class="far fa-trash-alt"></i>&nbsp;Delete</a>
											 </li><div class="dropdown-divider"></div>
										 </ul>
										';
										include "teacher_message_replyModal.php";

									
								}
						    include "teacher_message_replyAddfunction.php";
							}
							 
			
           ?>  
          </div>
          <div class="card-footer small text-muted">Updated <?php echo date('l jS \of F Y h:i:s A'); ?></div>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="welcome.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
	
		<!-- Recipient Selection Modal-->
   <div id="recipientModal" class="modal fade">
	<form method="post">
	  <div class="modal-dialog modal-sm" style="width:300px !important;">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Select Recipient Category</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			 <center>
			 <a role="button" class="btn btn-primary" href="teacher_message_compose_student.php" style="width: 200px;"><b>Student<b></a><br/><br/>
			 <a role="button" class="btn btn-primary" href="teacher_message_compose_teacher.php" style="width: 200px;"><b>Teacher<b></a><br/><br/>
			 <a role="button" class="btn btn-primary" href="teacher_message_compose_administrator.php" style="width: 200px;"><b>Administrator<b></a>  
			 </center>
			</div>
			<div class="modal-footer">
				<input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
			</div>
		</div>
	  </div>
	  </form>
	</div>
	
	
  
	


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
