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
		<li class="nav-item active">
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
              <h4><i class="fas fa-comments"></i>
				Teacher's Forum
			  </h4></div>
            <div class="card-body" style="background-color:rgb(250, 229, 138)">
			<div class="form-group" style="height: 400px;padding:10pxoverflow:scroll;overflow-x:hidden;overflow-y:scroll;">
			    <div class="dropdown-divider"></div>
			     <?php 
				 $query = 
				  mysqli_query($con, "select *,t.images as timg,tf.id as tfid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacherforum tf left join tblteacher t on tf.sender_id = t.id ");
			    while($row = mysqli_fetch_array($query))
				{
					if($row['sender_id'] == $_SESSION['id']){
					echo'
					<div style="float:right;"title = "Click to select action!" class="dropdown no-arrow">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
						  <div class="dropdown-header">Select Action:</div>
						  <div class="dropdown-divider" ></div>
						  <a class="dropdown-item" data-toggle="modal" data-target="#editMsgForumModal'.$row['tfid'].'">Edit Message</a>
						  <a class="dropdown-item" data-toggle="modal" data-target="#deleteMsgForumModal'.$row['tfid'].'">Delete Message</a>
						</div>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>';}else{} echo'
				 <div><img src = "'.$row['timg'].'" style="height: 45px; width: 55px;border-radius:100%;" />&nbsp;<b>
				  '.$row['tname'].'</b>
				  </div>
				   
				  <ul style="list-style: none;">
					 <li><i class="fas fa-fw fa-clock" style="font-size:10px;color:gray"></i>&nbsp  <span style="font-size: 9px; color: red" >'.$row['date_sent'].'</span></li>
					 <li><i class="fas fa-fw fa-envelope"  style="color:gray"></i> &nbsp; '.$row['message'].'</li><br/>
				     
				  </ul>
				  <div class="dropdown-divider"></div>
				
				';
				include"teachersforumEditModal.php";
				include"teachersforumDeleteModal.php";
				}
				 ?>
			</div>
			<form method="post" action="teacherforumfunction.php">
			<textarea autofocus required name="txt_message" class="form-control input-sm" placeholder="Enter your message here!"></textarea>
			<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-m" id="btn_send" name="btn_send"/><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;SEND</button>
			</div>
			</form>
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
              <span>Copyright 2018 © CCC E-Learning by Power Research Team</span>
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
