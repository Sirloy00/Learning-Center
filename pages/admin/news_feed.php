<?php include('admin_header.php'); 

	include'../connection.php';
	session_start();
?>
  <body id="page-top">
     <style>
				
				.campusHolder {
					text-align: center;
					
				}
				
				.hovereffect {
				  width: 250px;
				  padding: 10px;
				  overflow: hidden;
				  position: relative;
				  text-align: center;
				  cursor: default;
				  
				}

				.hovereffect .overlay {
				  width: 100%;
				  height: 100%;
				  position: absolute;
				  overflow: hidden;
				  top: 0;
				  left: 0;
				}
				
				.camlist {
					list-style: none;
					padding-left:0;
				}
				
				.camlist li {
					display: inline-block;
				}

				.hovereffect img {
				 
				  position: relative;
				  -webkit-transition: all 0.4s ease-in;
				  transition: all 0.4s ease-in;
				}

				.hovereffect:hover img {
				  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feColorMatrix type="matrix" color-interpolation-filters="sRGB" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0" /><feGaussianBlur stdDeviation="3" /></filter></svg>#filter');
				  filter: grayscale(1) blur(3px);
				  -webkit-filter: grayscale(1) blur(3px);
				  -webkit-transform: scale(1.2);
				  -ms-transform: scale(1.2);
				  transform: scale(1.2);
				}

				.hovereffect h2 {
				  text-transform: uppercase;
				  text-align: center;
				  position: relative;
				  font-size: 17px;
				  padding: 10px;
				  background: rgba(0, 0, 0, 0.6);
				}

				.hovereffect a.info {
				  display: inline-block;
				  text-decoration: none;
				  padding: 7px 14px;
				  border: 1px solid #fff;
				  margin: 25px 0 0 0;
				  background-color: transparent;
				}

				.hovereffect a.info:hover {
				  box-shadow: 0 0 5px #fff;
				}

				.hovereffect a.info, .hovereffect h2 {
				  -webkit-transform: scale(0.7);
				  -ms-transform: scale(0.7);
				  transform: scale(0.7);
				  -webkit-transition: all 0.4s ease-in;
				  transition: all 0.4s ease-in;
				  opacity: 0;
				  filter: alpha(opacity=0);
				  color: #fff;
				  text-transform: uppercase;
				}

				.hovereffect:hover a.info, .hovereffect:hover h2 {
				  opacity: 1;
				  filter: alpha(opacity=100);
				  -webkit-transform: scale(1);
				  -ms-transform: scale(1);
				  transform: scale(1);
				}
				
				@media(max-width: 350px) {
					.hovereffect {
						width: 170px;
					}
					
					.hovereffect h2 {
					  text-transform: uppercase;
					  text-align: center;
					  position: relative;
					  font-size: 7px;
					  padding: 10px;
					  background: rgba(0, 0, 0, 0.6);
					}
					
					.overlay a{
					 font-size: 7px;
					}
				}
				</style>
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
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header"> Manage Welcome Page</h6>
			 <a class="dropdown-item" href="https://tockify.com/" style="color: skyblue;"> School Calendar</a>
            <a class="dropdown-item" href="advertisement.php" style="color: skyblue;">Advertisement</a>
            <a class="dropdown-item active" href="news_feed.php" style="color: skyblue;"> News Feed</a>
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

      <div id="content-wrapper" >

        <div class="container-fluid">

          
          

          <!-- DataTables Example -->
          <div class="card mb-3" >
            <div class="card-header" style = "background-color:rgb(51, 58, 65);color:white;">
              <h4><i class="fas fa-newspaper"></i>
              News Feed</h4></div>
            <div class="card-body">
           	
					
		    <div style="padding:10px;">                   
				
				<a class="btn btn-primary" href="news_feed_add.php" role="button"><i class="fas fa-pen" aria-hidden="true"></i>&nbsp Write a Post</a>
		    </div> 
				<?php
						    $squery = mysqli_query($con, "select * from tblnewsfeed order by date DESC");
				          
							while($row = mysqli_fetch_array($squery))
							{
                                    $_SESSION['newsfeed_id']= $row['newsfeed_id'];
									$_SESSION['date_sent']= $row['date'];
									$_SESSION['message'] = $row['message'];
									$_SESSION['images']=$row['images'];
									$_SESSION['news_sender'] = $row['sender_name'];
									$_SESSION['subject'] = $row['subject'];
									$msg_display = $_SESSION['message'];
								 	 ?>
								   <?php 	echo' <br/><div class="dropdown-divider"></div><br/>
								                  <ul style="list-style: none;"><a  style="background-color:light-gray"> 
								                      <li>
														  <img src="images/ccc-logo.png" style="height: 4em; max-width: 100%;">&nbsp<b><span style="font-size:15px">Cainta Catholic College</b></span>
													  </li>
													  <ul style="list-style: none;">
														  <li><i class="fas fa-fw fa-clock" style="font-size:12px;color:gray"></i>&nbsp  <span style="font-size: 12px; color: red" >'.$_SESSION['date_sent'].'</span></li><br/>
									                      <li><span style="color: blue" ><b>Subject : </b></span>'.$_SESSION['subject'].'</li><br/>
														  <li><i class="fas fa-fw fa-envelope"  style="color:gray"></i>&nbsp';?><?php  echo $msg_display; echo'</li><br/>
														  <li>
														  <div class="hovereffect">
																<img class="img-responsive img-thumbnail" src="'.$_SESSION['images'].'"style = " height:400en; width:100%;">
																<div class="overlay">
																   <h2>'.$_SESSION['subject'].'</h2>
																   <a class="info" href="#myModal'.$_SESSION['newsfeed_id'].'" data-toggle="modal">Click Here</a>
																</div>
														  </div>
														  
															 
														 
														  </li>
														  </a>
														  
														   <a class="btn btn-primary" href="#editModal'.$row['newsfeed_id'].'" data-toggle="modal"><i class="far fa-edit"></i>&nbsp Edit</a>
													       <a  class="btn btn-danger" href="#deleteModal'.$_SESSION['newsfeed_id'].'" data-toggle="modal"><i class="far fa-trash-alt"></i>&nbspDelete</a>
													  </ul>
												   </ul>
												   <div id="myModal'.$_SESSION['newsfeed_id'].'" class="modal fade" role="dialog" tabindex="-1">
													   <div class="modal-dialog">
															<div class="modal-content">
															  <div class="modal-header">
																<h4 class="modal-title">'.$_SESSION['subject'].' </h4>
																<button type="button" class="close" data-dismiss="modal"
																  aria-hidden="true">&times;</button>
															
															  </div>
															  <div class="modal-body">
																<img class="img-responsive" src="'.$_SESSION['images'].'" alt="" style = " height:300px; width:100%;">
																<br/><br/><p>'.$_SESSION['message'].'</p>
															  </div>
															  <div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															  </div>
															</div>
														</div>
													</div>
													
													';	
													include "newsfeed_deleteModal.php";
                                                    include "newsfeed_editModal.php";
												
											 
							}
						
												
				
           ?>
          
            </div>
          
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

   <!-- admin modal include log-out and reply modal -->
    <?php include"admin_Modal.php"; ?>

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
		$(document).ready(function (e) {
		 $("#form").on('submit',(function(e) {
		  e.preventDefault();
		  $.ajax({
				 url: "newsfeed_upload.php",
		   type: "POST",
		   data:  new FormData(this),
		   contentType: false,
				 cache: false,
		   processData:false,
		   beforeSend : function()
		   {
			//$("#preview").fadeOut();
			$("#err").fadeOut();
		   },
		   success: function(data)
			  {
			if(data=='invalid')
			{
			 // invalid file format.
			 $("#err").html("Invalid File !").fadeIn();
			}
			else
			{
			 // view uploaded file.
			 $("#preview").html(data).fadeIn();
			 $("#form")[0].reset(); 
			}
			  },
			 error: function(e) 
			  {
			$("#err").html(e).fadeIn();
			  }          
			});
		 }));
		});
	</script>
  </body>

</html>
