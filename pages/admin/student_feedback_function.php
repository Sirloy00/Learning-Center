<?php
include"../connection.php";
session_start();
//feeback function_exists
if(isset($_POST['btn_sendfeedback']))
{
	$sendername =  $_SESSION['student_username'];
	$senderimage =  $_SESSION['student_images'];
	$datesent = date("F d, Y /h:i A");
	$messagefeedback = $_POST['txt_messagefeedback'];
	$feedbackquery = mysqli_query($con,"Insert into tblfeedback (sender_id,sender_name,sender_image,message,date_sent) values('".$_SESSION['student_id']."','$sendername','$senderimage','$messagefeedback','$datesent')");
	if($feedbackquery == true)
	{
	  $message = "Your feedback has been sent!";
      echo "<script type='text/javascript'>						
	  alert('$message');
	  </script>";
	  echo '<script type="text/javascript">
	  location.replace("student_page.php");
	  </script>';
	}
	else
	{
		$message = "Error! System not responding. Please try again.";
      echo "<script type='text/javascript'>						
	  alert('$message');
	  </script>";
	  echo '<script type="text/javascript">
	  location.replace("student_page.php");
	  </script>';
	}
}

?>