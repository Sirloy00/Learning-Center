<?php
	include ("../connection.php");
	include('admin_header.php');
	session_start();
  ?>
  <body id="page-top">

     <!-- include search,notification,message,user profile -->
	<?php include"admin_headerpanel.php";?>
	
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
			 <a class="dropdown-item" href="https://tockify.com/" style="color: skyblue;"> School Calendar</a>
            <a class="dropdown-item" href="advertisement.php" style="color: skyblue;">Advertisement</a>
            <a class="dropdown-item" href="news_feed.php" style="color: skyblue;"> News Feed</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Social Media Sites</h6>
            <a class="dropdown-item" href="https://www.facebook.com/" style="color: skyblue;"><i class="fa fa-facebook-f"></i><span>&nbsp;Facebook</span></a>
            <a class="dropdown-item" href="https://www.twitter.com/" style="color: skyblue;"><i class="fa fa-twitter"></i><span>&nbsp;Twitter</span></a>
			<a class="dropdown-item" href="https://www.gmail.com/" style="color: skyblue;"><i class="fa fa-google"></i>&nbsp;<span>Gmail</span></a>
          </div>
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
            <span>Home Room Teacher</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="schoolyear.php">
            <i class="fas fa-fw fa-calendar"></i>
            <span>School Year</span></a>
        </li>
		<li class="nav-item active">
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
		<li class="nav-item">
          <a class="nav-link" href="admin_feedback.php">
            <i class="fas fa-fw fa-gear"></i>
            <span>Feedback</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="customer_service.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Client Service</span></a>
        </li>
		
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Subjects</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header"  style = "background-color:rgb(51, 58, 65);color:white;">
              <h4><i class="fas fa-book"></i>
			  Subjects Data Table</h4></div>
			  <div class = "container" >
				<br/>
				<div class= "table-responsive">
				     <div style="padding:10px;">                   
		     			<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addSubjModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Subject</button>  
			   		 </div>
					<table id="tblsubjects" style="border:solid 1px green;"class="table table-striped table-bordered">
				    <thead style="background-color: green;color:white;">
							 <tr>
                                <th style="width: 40px !important;">Action</th>
								<th>No.</th>
   								<th>Subject Code</th>
                                <th>Description</th>
                                <th>Year Level</th>
								<th>Semester</th>
                             </tr>
						</thead>
						<tbody>
						 <?php
								$num = 1;
                                $squery = mysqli_query($con, "select * from tblsubjects");
                                 while($row = mysqli_fetch_array($squery))
                                 {
                                    echo '
                                        <tr>
                                            <td>
												<center><button name="Edit" class="btn btn-primary btn-sm" data-target="#editModal'.$row['s_id'].'" data-toggle="modal"><i class="far fa-edit"></i></button>
												<button name="Edit" class="btn btn-danger btn-sm" data-target="#deleteModal'.$row['s_id'].'" data-toggle="modal"><i class="far fa-trash-alt"></i></button></center>
											</td>
											<td>'.$num.'</td>
											<td>'.$row['subjectname'].'</td>
                                            <td>'.$row['Description'].'</td>
                                            <td>'.$row['yearlevel'].'</td>
											<td>'.$row['semester'].'</td>
                                        </tr>
                                          ';
                                    include "subjects_editModal.php"; 
                                    include "subjects_deleteModal.php";									
                                    $num++;      
                                 }
                         ?>
						</tbody>
						
					</table>
				    <?php include "subjects_addModal.php" ?>
				</div>
			  </div>
			    <br/>                           
				<br/>
			<div class="card-footer small text-muted">Updated <?php echo date('l jS \of F Y h:i:s A'); ?></div>
          </div>
 
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2018 CCC Learning Management System by Power Research Team</span>
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

    <!-- admin modal include log-out and reply modal -->
    <?php include"admin_Modal.php"; ?>
	
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
		$('#tblsubjects').DataTable();
		
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
