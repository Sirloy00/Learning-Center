<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$error = array();
$isLoggedin = false;


$db = mysqli_connect('localhost', 'root', '', 'learning');


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['uname']);
  $password = mysqli_real_escape_string($db, $_POST['psw']);
  $origPass = $password;
  $password = md5($password);

  if (count($error) == 0) {

  	$query = "SELECT * FROM tbluserreg WHERE user_name='$username' AND user_password='$password'";
	$query1 = "SELECT * FROM tbluserreg WHERE user_name='$username' AND user_password='$password' AND user_estatus = '1'";
	
  	$results = mysqli_query($db, $query);
	$results1 = mysqli_query($db, $query1);
	
  	if (mysqli_num_rows($results) == 1 && mysqli_num_rows($results1) ==  1) {
		
		$row=mysqli_fetch_row($results);
		$_SESSION['username'] = $row[1];
		$_SESSION['lastname'] = $row[3];
		$_SESSION['middle'] = $row[2];
		$_SESSION['email'] = $row[5];
		$isLoggedin = true;
		$_SESSION['isLoggedin'] = $isLoggedin;
		$_SESSION['student_number'] = $username;
		$_SESSION['currentPass'] = $origPass;

 ?>
	<script>
		alert("Welcome <?php echo $_SESSION['lastname'] . ", " . $_SESSION['username'] . " " . $_SESSION['middle']; ?> !");
		window.location = ("home.php");
	</script>
 
 <?php
 
  	}
	else {
		if(mysqli_num_rows($results) == 0){
			array_push($error, "Wrong username/password combination");
		}
		else if(mysqli_num_rows($results1) == 0){
			array_push($error, "Account has not been verified.");
		}
  		
  	}
  }
}

?>