<?php
	include ("../connection.php");
	session_start();
	include('admin_header.php');
  ?>



  <body id="page-top">
  <?php if($_SESSION['role'] == "administrator"){
															
								$user = mysqli_query($con,"SELECT *,CONCAT(fname,' ', mi,' ', lname)  as uname from tbladmin where id = '".$_SESSION['userid']."' ");
								while($row = mysqli_fetch_array($user)){
								$_SESSION['username'] = $row['uname'];
								$_SESSION['id'] = $row['id'];
				
								}
															
							}
	$username = $_SESSION['username'];	 										


 ?>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Administrator</a>

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
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw" style="font-size:20px"></i>
            <span class="badge badge-danger" style="font-size:9px">
			<?php
			
				     
                      $q = mysqli_query($con, "select * from message where receiver_name = '$username'");
                        $num_rows = mysqli_num_rows($q);
						$_SESSION['message_count'] = $num_rows;
                        echo $_SESSION['message_count'];
			?>
			
			</span>
          </a>
		 
			
		  
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown" >
		  	<h3 class="dropdown-item"><center><span style="color: blue;"><i class="fas fa-fw fa-envelope" style="font-size:20px;color:gray"></i>&nbsp<span>Messages</span> </center></h3>
		  <div class="dropdown-divider"></div>
		    <?php
						    $squery = mysqli_query($con, "select * from message where receiver_name = '$username'order by date_sent ASC ");
				          
							while($row = mysqli_fetch_array($squery))
							{
								 $_SESSION['sender_name'] = $row['sender_name'];
								$_SESSION['message'] = $row['message'];
								$_SESSION['date_sent'] = $row['date_sent'];
								$msg_display = $_SESSION['message'];
							   
						     ?>
								<?php 	echo' <a class="dropdown-item" href="admin_message_inbox.php" style="background-color:light-gray"> <i class="fas fa-user-circle fa-fw" style="font-size:30px;color:blue"></i><b><span style="font-size:15px">'.$_SESSION['sender_name'].'</b></span>
									 <br/>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-fw fa-clock" style="font-size:10px;color:gray"></i>&nbsp  <span style="font-size: 9px; color: red" >'.$_SESSION['date_sent'].'</span>
									 <br/> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-fw fa-envelope"  style="color:gray"></i> &nbsp';?>  <?php  echo mb_strimwidth($msg_display, 0, 50, "..."); echo'</a><hr/>';
								
							}
							 
			
           ?>  
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="admin_message_inbox.php"><center><i class="fas fa-fw fa-eye" style="font-size:12px"></i> &nbsp <span style="color: blue">View all message</span></center></a>
          </div>
        </li>
		<!--profile-->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw" style="font-size:20px"></i>
          </a>
          <?php 
		  echo'<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">';
				if($_SESSION['role'] == "administrator"){
			        $user = mysqli_query($con,"SELECT *,CONCAT(fname,' ', mi,' ', lname)  as uname from tbladmin where id = '".$_SESSION['userid']."' ");
                    while($row = mysqli_fetch_array($user)){
                        $_SESSION['user'] = $row['accounttype'];
						echo' <a class="dropdown-item" href="#"><center><i class="fas fa-user-circle fa-fw" style="font-size:60px;color:blue"></i></center><b><center><span style="font-size:15px">'.$row['uname'].'</span></b><br/></a>';
                        }
                    }
           echo' <a class="dropdown-item" href="#">Profile</a>
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
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
		<li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Message</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="compose_message.php"><i class="far fa-edit"></i><span>Compose</span></a>
            <a class="dropdown-item active" href="admin_message_inbox.php"><i class="fas fa-fw fa-download"></i><span>Inbox</span></a>
            <a class="dropdown-item" href="message_sent.php"><i class="fas fa-fw fa-list"></i><span>Sent</span></a>
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
            <span>Teachers</span>
          </a>
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
              <i class="fas fa-fw fa-download"></i>
			  Message Inbox Data Table</div>
			  <div class = "container" >
				<br/>
				<br/>
				<div class= "table-responsive">
				
					<table id="message_inbox" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Sender Name</th>
								<th>Message</th>
                                <th>Date Sent</th>
                                <th style="width: 40px !important;">Action</th>
							</tr>
						</thead>
						<tbody>
						
						<?php
						    $squery = mysqli_query($con, "select * from message where receiver_name= '$username'order by sender_name ASC ");
							while($row = mysqli_fetch_array($squery))
							{
								$_SESSION['sender_name'] = $row['sender_name'];
								$_SESSION['message'] = $row['message'];
								$_SESSION['date_sent'] = $row['date_sent'];
								echo'
								   <tr>
										  <td>'.$row['sender_name'].'</td>
 										  <td>'.$row['message'].'</td>
										   <td>'.$row['date_sent'].'</td>
										   <td>
										   
										   <center><button class="btn btn-success btn-block" data-toggle="modal" data-target="#deleteModal'.$row['message_id'].'"><i class="far fa-eye"></i>View</button></center>
				                   
										   </td>
										   
								   </tr>
								';	 
							}
						?>
						</tbody>
						
					</table>
				</div>
			  </div>
			    <br/>                           
				<br/>
				
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          
		  

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2018 CCC Learning Resource Portal by Power Research Team</span>
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
            <a class="btn btn-primary" href="login.html">Logout</a>
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
	
    <script>
	$(document).ready(function(){
		$('#message_inbox').DataTable();
		
		$('#checkAll').click(function(){
			if(this.checked){
				$('.checkbox').each(function(){
					this.checked = true;
				});
			}
			else{
				$('.checkbox').each(function(){
					this.checked = false;
				});
			}				
		});
		
		
	});
	</script>
  
   
  </body>

</html>
