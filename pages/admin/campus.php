<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/icon" href="images/ccc-logo.png" />
    <title>CCC Learning Management System</title>

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
   
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html"><span><img src="images/ccc-logo.png" style="height: 50px; width: 60px" alt="ccc-logo" /> &nbsp;CCC-LMS</span></a>

      &nbsp; &nbsp;<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
      </form>
       
	  <!--nav bar-->
      <ul class="navbar-nav ml-auto ml-md-0"> 
		<!-- login --> 
        <li class="nav-item dropdown no-arrow">
            <h5>
			<a class="nav-link" href="login_page.php">
            <i style="color:blue;font-size:18px;" class="fas fa-fw fa-sign-in-alt"></i>
            <span>LOGIN</span></a>
			</h5>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="font-size: 25px;">
        <li class="nav-item">
          <a class="nav-link" href="welcome.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="calendar.php">
            <i class="fas fa-fw fa-calendar"></i>
            <span>School Calendar</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="weather.php">
            <i class="fas fa-fw fa-cloud"></i>
            <span>Weather Updates</span></a>
        </li>
         <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="about_lms.php" style="color:blue;">Learning Management System</a>
            <a class="dropdown-item active" href="about.php" style="color:blue;">Cainta Catholic College</a>
  
          </div>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="academics.php">
            <i class="fas fa-fw fa-book"></i>
            <span>Academics</span></a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="admission.php">
            <i class="fas fa-fw fa-file-text"></i>
            <span>Admission</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="administration.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Administration</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.php">
            <i class="fas fa-fw fa-phone"></i>
            <span>Contact</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- newspeed -->
          <div class="card mb-3">
            <div class="card-header" style = "background-color:rgb(51, 58, 65);color:white;">
              <h4> <i class="fas fa-fw fa-info-circle"></i>
              About</h4>
			</div>
            <div class="card-body">
			    <!-- navs -->
				<nav class="nav nav-pills nav-justified">
				  <a class="nav-item nav-link" href="about.php">History</a>
				  <a class="nav-item nav-link" href="education.php">Education</a>
				  <a class="nav-item nav-link" href="mission_vision.php">Vision-Mission</a>
				  <a class="nav-item nav-link" href="seal.php">The Seal</a>
				  <a class="nav-item nav-link active" href="#">Campus</a>
				  <a class="nav-item nav-link" href="ccchym.php">CCC Hymn</a>
				</nav>
				<br/>
				<!--TAB CONTENT CAMPUS-->
				
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
				
				<div id="Campus" class="tabcontent">
				<div class = "container"  style = "background-color:rgb(250, 229, 138); padding: 10px 10px 10px 10px;">
				<hr>
					<div class = "campusHolder">
						<ul class = "camlist">
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/cainta.jpg" style ="height: 200px;max-width:100%;" alt="centenialbuilding">
								<div class="overlay">
								   <h2>Centennial Building</h2>
								   <a class="info" href="#myModal" data-toggle="modal">Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic_1.jpg" style ="height: 200px;max-width:100%;" alt="CICM Quadrangle">
								<div class="overlay">
								   <h2>CICM Quadrangle</h2>
								   <a class="info" href="#myModal1" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic2.jpg" style ="height: 200px;max-width:100%;" alt="">
								<div class="overlay">
								   <h2>Grade School Department</h2>
								   <a class="info" href="#myModal2" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic3.jpg" style ="height: 200px;max-width:100%;"alt="">
								<div class="overlay">
								   <h2>Pre-School Department</h2>
								   <a class="info" href="#myModal3" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							
						</ul>
						
						
						<ul class = "camlist">
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic4.jpg" style ="height: 200px;max-width:100%;"alt="">
								<div class="overlay">
								   <h2>Admin Building</h2>
								   <a class="info" href="#myModal4" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic4.jpg" style ="height: 200px;max-width:100%;"alt="">
								<div class="overlay">
								   <h2>College Department</h2>
								  <a class="info" href="#myModal5" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic5.jpg" style ="height: 200px;max-width:100%;"alt="">
								<div class="overlay">
								   <h2>CCC Auditorium</h2>
								   <a class="info" href="#myModal6" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic6.jpg"style ="height: 200px;max-width:100%;"alt="">
								<div class="overlay">
								   <h2>Centennial Gym</h2>
								  <a class="info" href="#myModal7" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
						</ul>
						
						<ul class = "camlist">
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic7.jpg" style ="height: 200px;max-width:100%;"alt="">
								<div class="overlay">
								   <h2>Audio-Visual Room</h2>
								   <a class="info" href="#myModal8" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic8.jpg" style ="height: 200px;max-width:100%;"alt="">
								<div class="overlay">
								   <h2>Computer Laboratory</h2>
								   <a class="info" href="#myModal9" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic9.jpg" style ="height: 200px;max-width:100%;"alt="">
								<div class="overlay">
								   <h2>Learning Resource Center</h2>
								   <a class="info" href="#myModal10" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic10.jpg" style ="height: 200px;max-width:100%;" alt="">
								<div class="overlay">
								   <h2>Dental Clinic</h2>
								   <a class="info" href="#myModal11" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
						</ul>
						
						<ul class = "camlist">
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic10.jpg" style ="height: 200px;max-width:100%;" alt="">
								<div class="overlay">
								   <h2>Medical Clinic</h2>
								   <a class="info" href="#myModal12" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic11.jpg" style ="height: 200px;max-width:100%;" alt="">
								<div class="overlay">
								   <h2>Science Laboratory</h2>
								   <a class="info" href="#myModal13" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic12.jpg" style ="height: 200px;max-width:100%;" alt="">
								<div class="overlay">
								   <h2>Speech Laboratory</h2>
								  <a class="info" href="#myModal14" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
							
							<li>
							<div class="hovereffect">
								<img class="img-responsive img-thumbnail" src="images/pic13.jpg" style ="height: 200px;max-width:100%;" alt="">
								<div class="overlay">
								   <h2>Function Room</h2>
								   <a class="info" href="#myModal15" data-toggle="modal"  >Click Here</a>
								</div>
							</div>
							</li>
						</ul>
					</div>
				</div>
				</div>
						
				
				</div>
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
<div id="myModal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Centennial Building</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
		
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/cainta.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal1" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Fr. Daniel Courtens, CICM Quadrangle</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic_1.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal2" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Grade School Department</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic2.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal3" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Pre-School Department</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic3.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal4" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Admin Building</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic4.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal5" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		  	<h4 class="modal-title">College Department</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
		
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic4.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal6" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		  	<h4 class="modal-title">CCC Auditorium</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
		
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic5.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal7" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		  <h4 class="modal-title">Centennial Gym</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic6.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal8" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		  <h4 class="modal-title">Audio-Visual Room</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic7.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal9" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		  	<h4 class="modal-title">Computer Laboratory</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
		
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic8.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal10" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Learning Resource Center</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic9.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal11" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Dental Clinic</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic10.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal12" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Medical Clinic</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic10.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal13" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		    <h4 class="modal-title">Science Laboratory</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic11.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal14" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Speech Laboratory</h4>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
			
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic12.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>
	<div id="myModal15" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		  <strong><h4 class="modal-title">Function Room</h4></strong>
			<button type="button" class="close" data-dismiss="modal"
			  aria-hidden="true">&times;</button>
		  </div>
		  <div class="modal-body">
			<img class="img-responsive" src="images/pic13.jpg" alt="" style = " height:300px; width:100%;">
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
	</div>