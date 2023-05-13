<?php
   include'../connection.php';
	if(isset($_POST['btn_submit'])){
		$txt_name = $_POST['txt_name'];
		$txt_email = $_POST['txt_email'];
		$txt_message = $_POST['txt_message'];

		$chk = mysqli_query($con,"SELECT * from tblcontact where name = '$txt_name' and email = '$txt_email' and message = '$txt_message' ");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO tblcontact (name,email,message) values ('".$txt_name."','".$txt_email."','".$txt_message."')"); 
			if($query == true){
	           $message = "Message Sent";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("contact.php");
					</script>';
			}
		}
		else{
           $message = "Error! Duplicate Entry. Please try again.";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("contact.php");
					</script>';
		}
	}
?>