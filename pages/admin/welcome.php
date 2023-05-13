<!DOCTYPE html>
<?php 
	include'../connection.php';
	session_start();
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/icon" href="images/ccc-logo.png" />
    <title>E-LEARNING</title>
	
	 <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	<!-- Icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- login style -->
	<link href="css/login_style.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
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
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="#"><span><img src="images/ccc-logo.png" style="height: 40px; width: 50px" alt="ccc-logo" /> &nbsp;E-LEARNING</span></a>

      &nbsp; &nbsp;<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
      </form>
       
	  <!--nav bar-->
      <ul class="navbar-nav ml-auto ml-md-0"> 
		<!-- login --> 
        <li class="nav-item dropdown no-arrow">
            <a href="login_page.php" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                      <i class="fas fa-fw fa-sign-in-alt"></i>
                </span>
                <span class="text">LOGIN</span>
            </a>     
        </li>
      </ul>

    </nav>
	
	<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="font-size: 25px;">
        <li class="nav-item active">
          <a class="nav-link" href="welcome.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="about_lms.php">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.php">
            <i class="fas fa-fw fa-phone"></i>
            <span>Contact Us</span></a>
        </li>
      </ul>
      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- advertisement-->
          <div class="card mb-1">
            <div class="card-body" style = "background-color:rgb(51, 58, 65,0.2);padding:20px;">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
				  <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img class="d-block w-100" src="images/cainta.jpg" style="height: 38em; max-width: 100%;" alt="First slide">
					  <div class="carousel-caption d-none d-md-block" style="background-color:rgba(51, 51, 50,0.5)">
						<h3>Cainta Catholic College</h3>
						<h4>E-Learning</h4>
					  </div>
					</div>
					<div class="carousel-item">
					  <img class="d-bl Sock w-100" src="images/keep_moving_forward.jpg" style="height: 38em;width: 100%;" alt="Second slide">
					  <div class="carousel-caption d-none d-md-block" style="background-color:rgba(51, 51, 50,0.5)">
						<h3>Cainta Catholic College</h3>
						<h4>E-Learning</h4>
					  </div>
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="images/lms2.png" style="height: 38em;width: 100%;" alt="Third slide">
					  <div class="carousel-caption d-none d-md-block" style="background-color:rgba(51, 51, 50,0.5)">
						<h3>Cainta Catholic College</h3>
						<h4>E-Learning</h4>
					  </div>
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="images/lms3.png" style="height: 38em;width: 100%;" alt="Fourth slide">
					  <div class="carousel-caption d-none d-md-block" style="background-color:rgba(51, 51, 50,0.5)">
						<h3>Cainta Catholic College</h3>
						<h4>E-Learning</h4>
					  </div>
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="images/K-12.jpg" style="height: 38em;width: 100%;" alt="$Fourth slide">
					  <div class="carousel-caption d-none d-md-block" style="background-color:rgba(51, 51, 50,0.5)">
						<h3>Cainta Catholic College</h3>
						<h4>Learning Management System</h4>
					  </div>
					</div>
				  </div>
				  
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				 
				</div>
				
		    </div>
          </div>
        </div>
	  
        
     <div id="content-wrapper">
        <div class="container-fluid">
          <!-- about E-Learning -->
          <div class="card mb-3">
            <div class="card-header" style = "background-color:rgb(51, 58, 65,0.2);">
              <h4><i class="fas fa-fw fa-newspaper"></i>
              NEWS AND UPDATES</h4>
			</div>
            <div class="card-body"style="background-color:rgb(250, 229, 138);">
				<?php
						    $squery = mysqli_query($con, "select * from tblnewsfeed order by newsfeed_id DESC");
				          
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
								                      <li><img src="images/ccc-logo.png" style="height: 4em; max-width: 100%;">&nbsp<b><span style="font-size:15px">Cainta Catholic College</b></span></li>
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
													</div
												   
												   
												   
												   ';
							}
							 
			
           ?> 
		    </div>
           </div>
        </div>
         <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © CCC E-Learning by Power Research Team</span>
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
