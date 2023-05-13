<?php

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
$path = 'uploads/'; // upload directory
 
if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image'])
{
	$img = $_FILES["image"]["name"]; //stores the original filename from the client
	$tmp = $_FILES["image"]["tmp_name"]; //stores the name of the designated temporary file
	$errorimg = $_FILES["image"]["error"]; //stores any error code resulting from the transfer
	if($errorimg > 0){
 
   die('<br/><div class="alert alert-danger" role="alert"> An error occurred while uploading the file </div>');
 
	}

	// get uploaded file's extension
	$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
	 
	// can upload same image using rand function
	$final_image = rand(1000,1000000).$img;
 
	// check's valid format
	if(in_array($ext, $valid_extensions)) 
	{ 
	$path = $path.strtolower($final_image); 
	 
	if(move_uploaded_file($tmp,$path)) 
	{
		//include database configuration file
	include_once '../connection.php';
	session_start();
	echo "<img src='$path'style='height:70px; width:90px;' />";
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$sendername =  $_SESSION['user'];
   $datesent = date("F d, Y /h:i A");
	 
	
	//insert form data in the database
	$insert = $con->query("INSERT tblnewsfeed (subject,message,images,date,sender_name) VALUES ('".$subject."','".$message."','".$path."','".$datesent."','".$sendername."')");
	?>
	<script>
		alert("Message Sent!");
		window.location = ("news_feed_add.php");
	</script>
 
	<?php
	 
	//echo $insert?'ok':'err';
	}
	} 
	else 
	{
	echo 'invalid type of files!.Please select valid type of files.';
	}
}
?>