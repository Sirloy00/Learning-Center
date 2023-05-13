<?php
include"../connection.php";
session_start();
//teacher's forum send message function
if(isset($_POST['btn_send']))
{
	$datesent = date("F d, Y /h:i A");
	$message = $_POST['txt_message'];
	$sendquery = mysqli_query($con,"Insert into tblteacherforum (message,date_sent,sender_id) values('".$message."','$datesent','".$_SESSION['id']."')");
	if($sendquery == true)
	{
	  $message = "Message Sent!";
      echo "<script type='text/javascript'>						
	  alert('$message');
	  </script>";
	  echo '<script type="text/javascript">
	  location.replace("teachersforum.php");
	  </script>';
	}
	else
	{
		$message = "Error! System not responding.Please do not use single quote on your message or you had reached maximum of 256 input character. Please try again.";
      echo "<script type='text/javascript'>						
	  alert('$message');
	  </script>";
	  echo '<script type="text/javascript">
	  location.replace("teachersforum.php");
	  </script>';
	}
}
?>