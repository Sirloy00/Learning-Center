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
     		<!-- Accordion style -->
		<style>
		.accordion {
			background-color:rgb(51, 58, 65);
			color: white;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;
		}

		.accactive, .accordion:hover {
			background-color: blue;
		}

		.accordion:after {
			content: '\002B';
			color: #777;
			font-weight: bold;
			float: right;
			margin-left: 5px;
		}

		.accactive:after {
			content: "\2212";
		}

		.panel {
			padding: 0 18px;
			background-color: white;
			max-height: 0;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
		}
		</style>
		
	 
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
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="about_lms.php" style="color:blue;">Learning Management System</a>
            <a class="dropdown-item" href="about.php" style="color:blue;">Cainta Catholic College</a>
  
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
		<li class="nav-item active">
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

          <!-- about Learning Management System(lms) -->
          <div class="card mb-3">
            <div class="card-header" style = "background-color:rgb(51, 58, 65);color:white;">
              <h4><i class="fas fa-fw fa-users"></i>
              Administration</h4></div>
            <div class="card-body">
				<!-- navs -->
				<nav class="nav nav-pills nav-justified">
				  <a class="nav-item nav-link" href="administration.php">Board of trustees </a>
				  <a class="nav-item nav-link" href="mng_committee.php">Management Commitee</a>
				  <a class="nav-item nav-link" href="president.php">CCC President</a>
				  <a class="nav-item nav-link active" href="#">Faculty and Staff</a>
				</nav>
		         <br/>
					<div class="container" class="bot-margin" style = "background-color:rgb(250, 229, 138);"><br/>      
						<center><u><h5>Grade School Department</h5></u></center><br/>
						<button class="accordion">Principal</button>
						<div class="panel">
						  <ol>
							<li>Nenita Q. Viloria</li>
						  </ol>
						</div>

						<button class="accordion">Asst. Principal / Grade 6 Level Coordinator</button>
						<div class="panel">
						  <ol>
							<li>Sergia A. Rivera</li>
						  </ol>
						</div>

						<button class="accordion">Grade School Coordinators</button>
						<div class="panel">
						   <ol>
							<li>Charito C. Cruz</li>
							<li>Josephine D.C. Magsino</li>
						  </ol>
						</div>
						
						<button class="accordion">Subject Area Coordinator</button>
						<div class="panel">
						   <ol>
							<li>Meriza I. Dipalac</li>
							<li>Veronica V. Dote</li>
							<li>Sherly J. Landicho</li>
							<li>Leoncia C. Maranan</li>
							<li>Royna L. Mortel</li>
							<li>Marilou B. Pagkatipunan</li>
							<li>Jerry G. Ruitas</li>
							<li>Lorna G. Ruitas</li>
						  </ol>
						</div>
						
						<button class="accordion">Toddler</button>
						<div class="panel">
						   <ol>
							<li>Elizabeth D.R. Barceñas</li>
							<li>Desiree Day D. Torres</li>
						  </ol>
						</div>
						
						<button class="accordion">Nursery</button>
						<div class="panel">
						   <ol>
							<li>Laika M. Arispe</li>
							<li>Jona-Ann B. Delos Santos</li>
							<li>Jeanne V. Garcia</li>
							<li>Jobel B. Parohinog</li>
						  </ol>
						</div>
						
						<button class="accordion">Kinder</button>
						<div class="panel">
						   <ol>
							<li>Jesselin C. Cacho</li>
							<li>Kristine Louise P. Carimpong</li>
							<li>Josephine B. Mararac</li>
							<li>Joana Marie B. Montañez</li>
							<li>Roveelyn N. Pagalanan</li>
						  </ol>
						</div>
						
						<button class="accordion">Grade 1</button>
						<div class="panel">
						   <ol>
								<li>Devy T. Baquiran</li>
								<li>Julia Aveline M. De Leon</li>
								<li>Roselyn L. Javier</li>
								<li>Jovelyn R. Pascual</li>
								<li>Rosemarie L. Perez</li>
								<li>Ma. Victoria B. Salamat</li>
								<li>Juanamie M. Ubiña</li>
						  </ol>
						</div>
						
						<button class="accordion">Grade 2</button>
						<div class="panel">
						   <ol>
								<li>Jillian R. Cortez</li>
								<li>Mary Jane M. Julian</li>
								<li>Jenifer E. Lamsen</li>
								<li>Melanie L. Padillo</li>
								<li>Jomelyn P. San Buenaventura</li>
								<li>Gemma Marie C. Verzo</li>
						  </ol>
						</div>
						
						<button class="accordion">Grade 3</button>
						<div class="panel">
						   <ol>
								<li>Liezl L. Bataller</li>
								<li>Ethel Grace C. Bautista</li>
								<li>Abegail M. Formalejo</li>
								<li>Elizabeth F. Frias</li>
								<li>Louella D. Jutic</li>
								<li>Jenny Rosa M. Quevedo</li>
								<li>Rose Ann P. Sabordo</li>
								<li>Mahalyn A. Vicente</li>
						  </ol>
						</div>
						
						<button class="accordion">Grade 4</button>
						<div class="panel">
						   <ol>
								<li>Aiza C. Abungan</li>
								<li>Avelina N. Carambas</li>
								<li>Jinkee R. Celerio</li>
								<li>Sheinna M. Mabilin</li>
								<li>May-Ann G. Oseo</li>
								<li>Rachelle C. Romero</li>
								<li>Rosby D. Sedonio</li>
								<li>Angelyn P. Tapiador</li>
						  </ol>
						</div>
						
						<button class="accordion">Grade 5</button>
						<div class="panel">
						   <ol>
						<li>Sonia F. Aquino</li>
						<li>Eric T. Bautista</li>
						<li>Bien Carlo B. Carlos</li>
						<li>Jesuzette D.G. Dela Vega</li>
						<li>Myrvi S. Elejorde</li>
						<li>Chrisyel A. Ilang-ilang</li>
						<li>Sr. Maria Elzen A. Milay</li>
						<li>Marry Chon B. Tagle</li>

								
						  </ol>
						</div>
							
						<button class="accordion">Grade 6</button>
						<div class="panel">
						   <ol>
								<li>Jonalyn S. Bisnar</li>
								<li>Leslie E. Especi</li>
								<li>Ma. Krisna D.L. Estrera</li>
								<li>Lorna A. Haguisan</li>
								<li>Mailyn P. Montante</li>
								<li>Ernesto V. Pidlaoan</li>
								<li>Sharlyn N. Piopongco</li>
								<li>Ma. Eloisa T. Punzal</li>
						  </ol>
						</div>

						<br/><center><u><h5>Highschool Department</h5></u></center><br/>
						<button class="accordion">Principal</button>
						<div class="panel">
						   <ol>
								<li>Lerma S. Fernandez</li>
						  </ol>
						</div>
						<button class="accordion">Asst. Principal</button>
						<div class="panel">
						   <ol>
								<li>Rita M. Ramos</li>
						  </ol>
						</div>
						
						<button class="accordion">Subject Area Coordinators</button>
						<div class="panel">
						   <ol>
								<li>Jennifer B. Abejero</li>
								<li>Eva B. Barbas</li>
								<li>Annalyn A. Barranta</li>
								<li>Jeffery T. Especi</li>
								<li>Ednalyn A. Galang</li>
								<li>Natalia V. Omandac</li>
								<li>Rufina C. Niones</li>
								<li>Vivian V. Tirados</li>
								<li>Rossebeth C. Uy</li>		
						  </ol>
						</div>
						
						<button class="accordion">Grade 7</button>
						<div class="panel">
						   <ol>
								<li>Cory A. Balajadia</li>
								<li>Rose Wenilyn A. Bautista</li>
								<li>Emelyn I. Castillo</li>
								<li>Jose Ariel L. De Guzman</li>
								<li>Armando D. De Leon</li>
								<li>Rizaldy Z. Delos Reyes</li>
								<li>Flor F. Galvez</li>
								<li>Ever L. Latuga</li>
								<li>Aileen C. Logronio</li>
								<li>Rosemarie M. Moyo</li>
								<li>Freddie F. Munar</li>
								<li>Veronica A. Pinpiño</li>
								<li>Sabina T. San Jose</li>
								<li>Melody T. Valdez</li>
								<li>Milkie B. Villanueva</li>	
						  </ol>
						</div>
						
						<button class="accordion">Grade 8</button>
						<div class="panel">
						   <ol>
								<li>Bernadette B. Alanan</li>
								<li>Catherine P. Alipio</li>
								<li>Anabelle G. Biag</li>
								<li>Althea C. Cruz</li>
								<li>Rommel Z. Cruz</li>
								<li>Chanda B. Dilag</li>
								<li>Leonisa P. Fajardo</li>
								<li>Ma. Janice P. Garcia</li>
								<li>Gelvin P. Macario</li>
								<li>Lilia D. Mendoza</li>
								<li>Karen Joy B. Poblacion</li>
								<li>Josephine C. Reginio</li>
								<li>Obdulia Concepcion B. Reyes</li>
								<li>Jordan Jay J. Sison</li>
								<li>Charito V. Usares</li>
						  </ol>
						</div>
						
						<button class="accordion">Grade 9</button>
						<div class="panel">
						   <ol>
								<li>Andres E. Arcilla</li>
								<li>Annaliza F. Basilio</li>
								<li>Joey J. Florendo</li>
								<li>Dennis T. Flores</li>
								<li>Analyn N. Gonzalvo</li>
								<li>Maria Nenita T. Guiuan</li>
								<li>Dario F. Ibañez</li>
								<li>James Kevin R. La Torre</li>
								<li>Rhodel L. Mapa</li>
								<li>Mary Rose J. Marco</li>
								<li>Cenecia P. Moreno</li>
								<li>Rosevie M. Moyo</li>
								<li>Daniel John M. San Pedro</li>
								<li>Oliver D. Sumagpao</li>
								<li>Roditha F. Tabangcura</li>
						  </ol>
						</div>
						
						<button class="accordion">Grade 10</button>
						<div class="panel">
						   <ol>
								<li>Marissa S. Abucot</li>
								<li>Ma. Dolores H. Amalia</li>
								<li>Purificacion F. Bernados</li>
								<li>Victoria S.A. Cruz</li>
								<li>Simon Erik L. Dellosa</li>
								<li>Edralin P. Dizon</li>
								<li>Melanie A. Dodson</li>
								<li>Edgie S. Estacio</li>
								<li>Victorino B. Gammad, Jr.</li>
								<li>Mae Antoinette S. Labitoria</li>
								<li>Jean W. Monje</li>
								<li>Jane Kathleen R. Palma</li>
								<li>Myra P. Peligaria</li>
								<li>Sr. Mary Claire M. Taob</li>
								<li>Teresita V. Valeza</li>
						  </ol>
						</div>
						
						<button class="accordion">College Education Department</button>
						<div class="panel">
						   <ol>
								<li>John Patrick Mari P. Almazan</li>
								<li>Maria Josefina U. Aguilar (PCMed)</li>
								<li>Marichu A. Bautista</li>
								<li>Rosel M. Bianan</li>
								<li>Yanni Angelica G. Mamaril</li>
								<li>Rosemarie C. Parayaoan</li>
								<li>Marissa T. Sichon</li>
						  </ol>
						</div>
						
						<br/><center><u><h5>College Department and Administrative Staff</h5></u></center><br/>
						<button class="accordion">Computer Department</button>
						<div class="panel">
							<ol>
								<li>Dr. Violinda R. Cabaluna (College Dean)</li>
								<li>Dr. Reynaldo J. Cruz</li>
								<li>Chona F. Cruz</li>
								<li>Dulce M. Cruz</li>
								<li>Renato V. Cruz</li>
								<li>Dennis George E. Garais</li>
								<li>Romeo P. Ilao</li>
								<li>Jose Danilo S. Jabon</li>
								<li>Leandro G. Sarmiento</li>
								<li>Rommel L. Terante</li>
								<li>Regina G. Lozano</li>
								<li>Evangeline T. Ilao</li>
								<li>Sr. Marivic L. Malubay</li>
								<li>Sr. Rocelie M. Millorada</li>
							</ol>
						</div>
							
						<button class="accordion">College Part-timers</button>
						<div class="panel">
						   <ol>
								<li>Marinel G. Andres</li>
								<li>Marcelo C. Areniego</li>
								<li>Joseph M. Buentes</li>
								<li>Shijanie H. Calderon</li>
								<li>Adriano C. Caluag</li>
								<li>Teodoro F. Camat</li>
								<li>Lea D. Canivel</li>
								<li>Reynante M. Co</li>
								<li>Chester Glenn P. Crisostomo</li>
								<li>Bernardith B. Cruz</li>
								<li>Dr. George Duran</li>
								<li>Joaana Marie H. Lara</li>
								<li>Dr. Zenaida S. Martinez</li>
								<li>Almer D.R. Mayo</li>
								<li>Mary Anne C. Pinera</li>
								<li>Dr. Reynaldo R. Portillo</li>
								<li>Celia M. Reyes</li>
								<li>Richard D. Rodriguez</li>
								<li>Jerome F. Samson</li>
								<li>Jacqueline Torres</li>
								<li>Martin Angelo G. Vera</li>
						  </ol>
						</div>
						
						<button class="accordion">Office of the President</button>
						<div class="panel">
						   <ol>
								<li>Rev. Msgr. Arnel F. Lagarejos, SThd. (College President)</li>
								<li>Dr. Joel C. Javiniar (VP for Academics)</li>
								<li>Marilou A. Valencia (VP for Administration)</li>
								<li>Theresa B. Esagunde</li>
						  </ol>
						</div>
						
						<button class="accordion">Academic Secretary - Grade School</button>
						<div class="panel">
						   <ol>
								<li>Lolita E. Castro</li>
						  </ol>
						</div>
							<button class="accordion">Secretary - Highschool School</button>
						<div class="panel">
						   <ol>
								<li>Anita C. Gatpayat</li>
						  </ol>
						</div>
						
						<button class="accordion">Secretary - College</button>
						<div class="panel">
						   <ol>
								<li>Juanita M. Gutierrez</li>
						  </ol>
						</div>
						
						<button class="accordion">Speech Laboratory Custodian</button>
						<div class="panel">
						   <ol>
								<li>Maricar C. Manuel</li>
						  </ol>
						</div>
						
						<button class="accordion">Technology & Livelihood Education Laboratory Custodian</button>
						<div class="panel">
						   <ol>
								<li>Reyna S. Reginio</li>
						  </ol>
						</div>
						
						<button class="accordion">Student Affairs Services / Asst. Principal for Discipline</button>
						<div class="panel">
						   <ol>
								<li>Marilyn S. Segubience</li>
						  </ol>
						</div>
						
						<button class="accordion">Office of the Registrar</button>
						<div class="panel">
						   <ol>
								<li>Cecilia C. Cerezo (College Registrar)</li>
								<li>Aurora C. Arciaga</li>
								<li>Cleofe H. Hontonares</li>
								<li>Liezel B. Villanueva</li>
								<li>Besilda T. Zapanta</li>
						  </ol>
						</div>
						
						<button class="accordion">Center for Christian Formation</button>
						<div class="panel">
							<ol>
								<li>Fr. Blaise Jose Ma. E. Garcia, Jr. (College Chaplain)</li>
								<li>Marissa D. Bechayda (CEP)</li>
								<li>Sr. Analyn J. San Gabriel</li>
							</ol>
						</div>
						
						<button class="accordion">Finance Department</button>
						<div class="panel">
							<ol>
								<li>Reldino R. Aquino (VP for Finance)</li>
								<li>Rosella Z. Bernados</li>
								<li>Ester D. Gamad</li>
								<li>Florentina L. Jose</li>
								<li>Ma. Liza B. Lobarbio</li>
								<li>Roselle M. Pamposa</li>
							</ol>
						</div>
						
						<button class="accordion">Human Resource Management Department</button>
						<div class="panel">
							<ol>
								<li>Emelita R. Villanueva (HRMD Coordinator)</li>
								<li>Catherine V. Cerna</li>
								<li>Julieta O. Guaño</li>
								<li>Cecilia V. Vinluan</li>
							</ol>
						</div>
						
						<button class="accordion">Research & Planning Development Office</button>
						<div class="panel">
							<ol>
								<li>Henry P. Santiago</li>
								<li>Maricel D.G. Dela Cruz</li>
								<li>Loida V. Gascon</li>
								<li>Susan D. Calma</li>
							</ol>
						</div>
						
						<button class="accordion">Guidance Office</button>
						<div class="panel">
							<ol>
								<li>Emelita O. Torayno (Guidance Head)</li>
								<li>Keeshan D.G. Cerezo</li>
								<li>Ma. Christal Joy B. Flores</li>
								<li>Mishael B. Doce</li>
								<li>Mary Jane Q. Leal</li>
								<li>Billy Jhon M. Mate</li>
								<li>Marissa Mae C. Mendoza</li>
								<li>Robin M. Pineda</li>
							</ol>
						</div>
						
						<button class="accordion">Learning Resource Center</button>
						<div class="panel">
							<ol>
								<li>Gemma A. Magboo (Chief Librarian)</li>
								<li>Redgima R. Angeles</li>
								<li>Norman P. Bendol</li>
								<li>Zenaida C. Cernero</li>
								<li>Eleonor S. Mangan</li>
							</ol>
						</div>
						
						<button class="accordion">Management Information System</button>
						<div class="panel">
							<ol>
								<li>Diana M. Martino (MIS Head)</li>
								<li>Rey G. Granada</li>
								<li>Jethro D. Gamad</li>
								<li>Jay C. Olayta</li>
								<li>Jervees P. Espartero</li>
							</ol>
						</div>
						
						<button class="accordion">Health Services</button>
						<div class="panel">
							<ol>
								<li>Dr. Alexander B. Diaz</li>
								<li>Dr. Lourdes D.R. Daya</li>
								<li>Dr. Virgilio M. Vasquez</li>
								<li>Rosa Maria S. Andaya</li>
								<li>Emerita J. Encisa</li>
								<li>Yolanda J. Labao</li>
							</ol>
						</div>
						
						<button class="accordion">Purchasing Office</button>
						<div class="panel">
							<ol>
								<li>Lito T. Usares (Purchasing Officer)</li>
								<li>Alexander M. Batan</li>
							</ol>
						</div>
						
						<button class="accordion">Printing Department</button>
						<div class="panel">
							<ol>
								<li>Alejandro T. Cernero</li>
								<li>Ireneo D. Francisco</li>
							</ol>
						</div>
						
						<button class="accordion">General Services</button>
						<div class="panel">
							<ol>
								<li>Romario M. Datiles (General Services Head)</li>
								<li>Ramir S. Arago</li>
								<li>Fernando C. Cagaanan</li>
								<li>Minandro M. Dilag</li>
								<li>Jumar L. Dumancas</li>
								<li>Luz L. Dumancas</li>
								<li>Nida M. Juniosa</li>
								<li>Marilyn L. Maglunob</li>
								<li>Richard D.G. Maglunob</li>
								<li>Erlinda M. Malabega</li>
								<li>Milian P. Osorio</li>
								<li>Rodrigo R. Osorio</li>
								<li>Marivic S.A. Parmerola</li>
							</ol>
						</div>
						
						<button class="accordion">Physical Plant Services</button>
						<div class="panel">
							<ol>
								<li>John G. Pamposa (Physical Plant Head)</li>
								<li>Patrick Gerald R. Alcober</li>
								<li>Zosimo A. De Vera, Jr.</li>
								<li>Jailito C. Deaño</li>
								<li>Ben D. Mangan</li>
								<li>Rodrigo R. Osorio</li>
							</ol>
						</div>
						
						<button class="accordion">Canteen Services</button>
						<div class="panel">
							<ol>
								<li>Elsa C. Suazo (O.I.C.)</li>
								<li>Eleanor F. Cruz</li>
								<li>Anita B. Perez</li>
								<li>Melissa Lyn M. Cabanes</li>
							</ol>
						</div>
						<br/>
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
	
	<script>
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight){
				  panel.style.maxHeight = null;
				} else {
				  panel.style.maxHeight = panel.scrollHeight + "px";
				} 
			  });
			}
		</script>
	
  </body>

</html>
