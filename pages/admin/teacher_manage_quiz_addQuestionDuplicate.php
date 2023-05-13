<?php include('admin_header.php'); 

	include'../connection.php';
	session_start();
?>
  <body id="page-top">
  
<?php if($_SESSION['role'] == "teacher")
							{								
								$user = mysqli_query($con,"SELECT *,CONCAT(fname,' ', mname,' ', lname)  as uname from tblteacher where id = '".$_SESSION['userid']."' ");
								while($row = mysqli_fetch_array($user)){
								$_SESSION['username'] = $row['uname'];
								$_SESSION['id'] = $row['id'];
								$_SESSION['images'] = $row['images'];
				             
								}							
							}
	$username = $_SESSION['username'];	 	
    $tempusername = $username;	
 ?>
  <?php if($_SESSION['role'] == "teacher")
							{								
								$user2 = mysqli_query($con,"SELECT *,CONCAT(lname,', ', fname,' ', mname)  as uname from tblteacher where id = '".$_SESSION['userid']."' ");
								while($row = mysqli_fetch_array($user2)){
								$_SESSION['username2'] = $row['uname'];
								$_SESSION['id'] = $row['id'];
								$_SESSION['images'] = $row['images'];
				             
								}							
							} 										
 ?>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

       <a class="navbar-brand mr-1" href="#"><span><img src="images/ccc-logo.png" style="height: 40px; width: 50px" alt="ccc-logo" /> &nbsp; Learning  Management System</span></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

           <!-- Navbar -->
		<!-- notification -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" title="Notification" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw" style="font-size:20px"></i>
            <span class="badge badge-danger"style="font-size:9px">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
		<!--message-->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle"  title="Messages" href="?update='true'" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw" style="font-size:20px"></i>
            <span class="badge badge-danger" style="font-size:9px">
			<?php
			
				     
                      $q = mysqli_query($con, "select * from message where receiver_name = '$username' and message_status='unread' ");
                        $num_rows = mysqli_num_rows($q);
						$_SESSION['message_count'] = $num_rows;
                        echo $_SESSION['message_count'];
			?>	
				
			</span>
          </a>
		
      
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown" style = "border:solid 1px blue;">
		  	<div style="background-color:skyblue;padding:10px;"><h4><span style="color: black;"><i class="fas fa-fw fa-envelope" style="font-size:23px;color:white"></i>&nbsp; <span>Messaging</span>
			<a href="#"  title="Compose a Message!" data-toggle="modal" data-target="#recipientModal" style="float:right;"><i class="fas fa-fw fa-edit" style="font-size:23px;color:white"></i></a></h4>
			</div>
		    <div style="height:470px;width:415px;border:solid 0.5px blue;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">
		    <?php
			                if($_SESSION['message_count'] == 0)
								{
									echo '<br/><br/></br></br><center><h6>No message available!</h6><center>';
								}
						    $squery = mysqli_query($con, "select * from message where receiver_name = '$username' and message_status = 'unread' order by message_id DESC");
							while($row = mysqli_fetch_array($squery))
							{
								
							
								$_SESSION['sender_name'] = $row['sender_name'];
								
								
									$_SESSION['sender_image'] = $row['images'];
									$_SESSION['message'] = $row['message'];
									$_SESSION['date_sent'] = $row['date_sent'];
									$msg_display = $_SESSION['message'];
									$_SESSION['message_id']=$row['message_id'];
								 	 ?>
								   <?php 	echo' <a a class="dropdown-item" title="Click here to view conversation!" href="#" data-toggle="modal" data-target="#reply'.$_SESSION['message_id'].'"><img src = "'.$_SESSION['sender_image'].'" style="height: 45px; width: 55px;border-radius:100%;" />&nbsp;<b><span style="font-size:15px">'.$_SESSION['sender_name'].'</b></span>
									 <br/>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-fw fa-clock" style="font-size:10px;color:gray"></i>&nbsp  <span style="font-size: 9px; color: red" >'.$_SESSION['date_sent'].'</span>
									 <br/> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-fw fa-envelope"  style="color:gray"></i> &nbsp';?>  <?php  echo mb_strimwidth($msg_display, 0, 50, "..."); echo'</a><hr/>';

								
							}
							
			
           ?>  
		        </div>
            <a class="dropdown-item" href="teacher_message_inbox.php">
              <div class="dropdown-divider"></div><i class="fas fa-fw fa-eye" style="font-size:12px"></i> &nbsp <span style="color: blue">View all message</span>  
			</a>
			 <a class="dropdown-item" href = "" data-toggle="modal" data-target="#markall_Modal">
              <div class="dropdown-divider"></div><i class="fas fa-fw fa-check" style="font-size:12px"></i> &nbsp <span style="color: blue">Mark all as read</span>  
			</a>
          </div>
        </li>
		<?php include "mark_all.php"; ?>
		<!--profile-->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" title="User Account" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php echo'<img src="'.$_SESSION['images'].'" style = " border-radius: 100%;height: 30px; width: 30px;"/>';?>
          </a>
          <?php 
		  echo'<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">';
				if($_SESSION['role'] == "teacher"){
			        $user = mysqli_query($con,"SELECT *,CONCAT(fname,' ', mname,' ', lname)  as uname from tblteacher where id = '".$_SESSION['userid']."' ");
                    while($row = mysqli_fetch_array($user)){
                        $_SESSION['user'] = "Teacher" ;
						echo' <a class="dropdown-item" href="#"><center><img src="'.$_SESSION['images'].'" style = " border-radius: 100%;height: 80px; width: 80px;"</center><b><center><span style="font-size:15px">'.$row['uname'].'</span></b><br/></a>';
                        }
                    }
           echo' 
		   <b><p> '.$_SESSION['user'].'</p></b>
		   <a class="dropdown-item" href="#">Profile</a>
		   <a class="dropdown-item" href="#">Setting</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><center><span style="color: blue">Log out</span> </center></a>
          </div>';
		  ?>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

       <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="font-size: 20px;">
		<li class="nav-item">
          <a class="nav-link" href="teacher_page.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="teachers_student.php">
            <i class="fas fa-fw fa-users"></i>
            <span>My Students</span></a>
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
		<li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-file-text"></i>
            <span>Quiz</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item active" title = "Click here to manage your quiz!" href="teacher_manage_quiz.php" style="color: blue;"><i class="far fa-file-text"></i><span>&nbsp; Create a Quiz</span></a>
            <a class="dropdown-item" title = "Click here to view your quiz!" href="teacher_myQuiz.php"style="color: blue;"><i class="far fa-file-text"></i><span>&nbsp;&nbsp;My Quiz</span></a>
			<a class="dropdown-item" title = "Click here to view the quiz result!" href=""style="color: blue;"><i class="far fa-file-text"></i><span>&nbsp;&nbsp;Quiz Result</span></a>
            <div class="dropdown-divider"></div>
          </div>
		  </li>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-bell"></i>
            <span>Notification</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="compose_message.php" style="color: blue"><i class="far fa-edit"></i><span>&nbsp; Compose</span></a>
            <a class="dropdown-item" href="message_inbox.php" style="color: blue"><i class="fas fa-fw fa-download"></i><span>&nbsp; Inbox</span></a>
            <a class="dropdown-item" href="message_sent.php" style="color: blue"><i class="fas fa-fw fa-list"></i><span>&nbsp; Sent</span></a>
            <div class="dropdown-divider"></div>
          </div>
		  </li>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Messaging</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#recipientModal" style="color: blue;"><i class="far fa-edit"></i><span>&nbsp; Compose</span></a>
            <a class="dropdown-item" href="teacher_message_inbox.php" style="color: blue;"><i class="fas fa-fw fa-download" ></i><span>&nbsp; Inbox</span></a>
            <div class="dropdown-divider"></div>
          </div>
		  </li>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-pie-chart"></i>
            <span>Student Progress Report</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-comments"></i>
            <span>Teacher's Forum</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-paper-plane"></i>
            <span>Feedback</span></a>
        </li>
      </ul>
 <div id="content-wrapper">

        <div class="container-fluid">
          <!-- Manage the Questionaire -->
          <div class="card mb-3">
            <div class="card-header" style ="background-color:rgb(51, 58, 65);">
              <h4 style="color:white;"><i class="fas fa-file-text"></i>
             <?php 
			 
			 $_SESSION['quiz_id']= $_SESSION['quiz_id_temp'];
			 $_SESSION['quiz_title']= $_SESSION['quiz_title_temp'];
			 $quiz_id_holder =  $_SESSION['quiz_id'];
			    if($_SESSION['quiz_id'] == "")
				{
					echo'Please select a Quiz';
				}
				else{
					echo $_SESSION['quiz_title'];
				}
			  ?></h4></div>
            <div class="card-body" style="padding:10px;">
				<div class= "table-responsive"  style="padding:5px;">
				    <div  style="padding-bottom:10px;">                   
					    <button class="btn btn-primary btn-m" data-toggle="modal" data-target="#addquestionModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Questionaire</button>  
                        <a class="btn btn-primary btn-m" href="teacher_manage_quizOption.php">Go Back</a>   						
					</div>
					<table id="tblquiz" class="table table-hover table-bordered">
						<thead>
							<tr>
							    <th style="width: 40px !important;">Action</th>
								<th>No.</th>
								<th>Question</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
								<th>Option 3</th>
                                <th>Option 4</th>
								<th>correct_answer</th>
                         	</tr>
						</thead>
						<tbody>
						  <?php
								$num=1;
                                $squery = mysqli_query($con, "SELECT * FROM tblquiz WHERE quizsaved_id = '$quiz_id_holder' order by quiz_id ASC");
                                while($row = mysqli_fetch_array($squery))
                                {
                                    echo '
                                    <tr>
										<td>
											<center>
											<button title="Edit Question" name="Edit" class="btn btn-primary btn-sm" data-target="#editModalDuplicate'.$row['quiz_id'].'" data-toggle="modal"><i class="far fa-edit"></i></button>
											<button title="Delete Question" name="delete" class="btn btn-danger btn-sm" data-target="#deleteModal'.$row['quiz_id'].'" data-toggle="modal"><i class="far fa-trash-alt"></i></button></center>
										</td>
										<td>'.$num.'</td>
										<td>'.$row['question'].'</td>
										<td>'.$row['option1'].'</td>
										<td>'.$row['option2'].'</td>
										<td>'.$row['option3'].'</td>
										<td>'.$row['option4'].'</td>
										<td>'.$row['correct_answer'].'</td>
							        </tr>
                                     ';	
									include"teacher_manage_quiz_editQuestionDuplicateModal.php";
									include"teacher_manage_quiz_deleteQuestionModal.php";									 
                                 $num++; 
                                }
                           ?>
						</tbody>
						<?php include "teacher_manage_quiz_addQuestionModal.php" ?>
					</table>
				</div>
			  </div>
			    <br/> 
				 <div class="card-footer small text-muted">Updated <?php echo date('l jS \of F Y h:i:s A'); ?></div>
            </div>
           
          </div>

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
	           <!-- Teacher Reply Modal-->
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
								$squery = mysqli_query($con, "select * from message where receiver_name = '$username' order by date_sent DESC ");
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
									  
										include "teacher_message_replyModal.php";

									
								}
						    include "teacher_message_replyAddfunction.php";
							}
           ?>  
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
		$('#tblquiz').DataTable();
	});
	</script>
  </body>

</html>
