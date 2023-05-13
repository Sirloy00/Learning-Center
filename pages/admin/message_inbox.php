<?php include('admin_header.php'); 

	include'../connection.php';
	session_start();
?>
  <body id="page-top">
<?php if($_SESSION['role'] == "administrator"){
															
								$user = mysqli_query($con,"SELECT *,CONCAT(fname,' ', mi,' ', lname)  as uname from tbladmin where id = '".$_SESSION['userid']."' ");
								while($row = mysqli_fetch_array($user)){
								$_SESSION['username'] = $row['uname'];
								$_SESSION['id'] = $row['id'];
								$_SESSION['images'] = $row['images'];
				             
								}
															
							}
	$username = $_SESSION['username'];	 										


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
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <a class="nav-link dropdown-toggle" href="?update='true'" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw" style="font-size:20px"></i>
            <span class="badge badge-danger" style="font-size:9px">
			<?php
			
				     
                      $q = mysqli_query($con, "select * from message where receiver_name = 'administrator' and message_status='unread' ");
                        $num_rows = mysqli_num_rows($q);
						$_SESSION['message_count'] = $num_rows;
                        echo $_SESSION['message_count'];
			?>	
				
		
		
			
			</span>
          </a>
		 
			
		  
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown" >
		  	<h3 class="dropdown-item"><span style="color: blue;"><i class="fas fa-fw fa-envelope" style="font-size:20px;color:gray"></i>&nbsp; <span>Messaging</span>
			</h3>
		  <div class="dropdown-divider"></div>
		    <?php
						    $squery = mysqli_query($con, "select * from message where receiver_name = 'administrator' order by date_sent ASC LIMIT 5 ");
				          
							while($row = mysqli_fetch_array($squery))
							{
								$_SESSION['sender_name'] = $row['sender_name'];
								
								
									
									$_SESSION['message'] = $row['message'];
									$_SESSION['date_sent'] = $row['date_sent'];
									$msg_display = $_SESSION['message'];
								 	 ?>
								   <?php 	echo' <a class="dropdown-item" href="admin_message_inbox.php" style="background-color:light-gray"> <i class="fas fa-user-circle fa-fw" style="font-size:30px;color:blue"></i><b><span style="font-size:15px">'.$_SESSION['sender_name'].'</b></span>
									 <br/>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-fw fa-clock" style="font-size:10px;color:gray"></i>&nbsp  <span style="font-size: 9px; color: red" >'.$_SESSION['date_sent'].'</span>
									 <br/> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-fw fa-envelope"  style="color:gray"></i> &nbsp';?>  <?php  echo mb_strimwidth($msg_display, 0, 30, "..."); echo'</a><hr/>';
						    
			
								
							}
							 
			
           ?>  
            <a class="dropdown-item" href="admin_message_inbox.php">
              <div class="dropdown-divider"></div><i class="fas fa-fw fa-eye" style="font-size:12px"></i> &nbsp <span style="color: blue">View all message</span>  
			</a>
			 <a class="dropdown-item" href="#">
              <div class="dropdown-divider"></div><i class="fas fa-fw fa-check" style="font-size:12px"></i> &nbsp <span style="color: blue">Mark all as read</span>  
			</a>
          </div>
        </li>
		<!--profile-->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php echo'<img src="'.$_SESSION['images'].'" style = " border-radius: 100%;height: 30px; width: 30px;"/>';?>
          </a>
          <?php 
		  echo'<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">';
				if($_SESSION['role'] == "administrator"){
			        $user = mysqli_query($con,"SELECT *,CONCAT(fname,' ', mi,' ', lname)  as uname from tbladmin where id = '".$_SESSION['userid']."' ");
                    while($row = mysqli_fetch_array($user)){
                        $_SESSION['user'] = $row['accounttype'];
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
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="admin_page_learningmaterials.php">
            <i class="fas fa-fw fa-book"></i>
            <span>Learning Materials</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header"> Manage Welcome Page</h6>
			 <a class="dropdown-item" href="https://tockify.com/"><i class="fas fa-fw fa-calendar"></i>&nbsp; School Calendar</a>
            <a class="dropdown-item" href="advertisement.php"><i class="fas fa-fw fa-image"></i>&nbsp; Advertisement</a>
            <a class="dropdown-item" href="news_feed.php"><i class="fas fa-fw fa-newspaper"></i>&nbsp; News Feed</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Social Media Sites</h6>
            <a class="dropdown-item" href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i><span>&nbsp;Facebook</span></a>
            <a class="dropdown-item" href="https://www.twitter.com/"><i class="fa fa-twitter"></i><span>&nbsp;Twitter</span></a>
			<a class="dropdown-item" href="https://www.gmail.com/"><i class="fa fa-google"></i>&nbsp;<span>Gmail</span></a>
          </div>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span>Notification</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="compose_notification.php"><i class="far fa-edit"></i><span>&nbsp; Compose</span></a>
            <a class="dropdown-item" href="notification_inbox.php"><i class="fas fa-fw fa-download"></i><span>&nbsp; Inbox</span></a>
            <a class="dropdown-item" href="notification_sent.php"><i class="fas fa-fw fa-list"></i><span>&nbsp; Sent</span></a>
            <div class="dropdown-divider"></div>
          </div>
		  </li>
        </li>
		<li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Messaging</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="compose_message.php"><i class="far fa-edit"></i><span>&nbsp; Compose</span></a>
            <a class="dropdown-item active" href="message_inbox.php"><i class="fas fa-fw fa-download"></i><span>&nbsp; Inbox</span></a>
            <a class="dropdown-item" href="message_sent.php"><i class="fas fa-fw fa-list"></i><span>&nbsp; Sent</span></a>
            <div class="dropdown-divider"></div>
          </div>
		  </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Students</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="studentclass.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Student Class</span></a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="teacher.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Teachers</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="teacheradvisory.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Teacher Advisory</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="schoolyear.php">
            <i class="fas fa-fw fa-calendar"></i>
            <span>School Year</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="subjects.php">
            <i class="fas fa-fw fa-book"></i>
            <span>Subjects</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="yearlevel.php">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Year Level</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="class.php">
            <i class="fas fa-fw fa-door-open"></i>
            <span>Class</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Message Inbox</li>
          </ol>

        
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-download"></i>
              Message Inbox</div>
            <div class="card-body">
			<br/>
				<br/>
				<div class= "table-responsive">
				
					<table id="message_inbox" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Message</th>
                                <th>Date Sent</th>
                                <th style="width: 40px !important;">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							
											
							$userid = $_SESSION['id'];	  
						
						    $squery = mysqli_query($con, "select * from message where receiver_name = 'administrator'  order by receiver_name ASC ");
							while($row = mysqli_fetch_array($squery))
							{
								echo'
								   <tr>
										  <td>'.$row['sender_name'].'</td>
 										  <td>'.$row['message'].'</td>
										   <td>'.$row['date_sent'].'</td>
										   <td>
										   
										   <center><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal'.$row['message_id'].'"><i class="far fa-trash-alt"></i> Delete</button></center>
				                   
										   </td>
										   
								   </tr>
								';	
									include "message_inbox_deleteModal.php";	 
							}
						?>
						</tbody>
						
					</table>
				</div>
			  </div>
			    <br/>                           
				<br/>
			
            </div>
            <div class="card-footer small text-muted">Updated <?php echo date('l jS \of F Y h:i:s A'); ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © CCC Learning Resource Portal by Power Research Team</span>
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
		$('#message_inbox').DataTable();
	});
	</script>
	
  </body>

</html>
