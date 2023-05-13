<?php
if(isset($_POST['btn_send']))
{
		$msgreply = $_POST['msgreply'];
	    $senderid = $_SESSION['admin_id'];
		$sendername = $_POST['receivername'];
		$receivername = $_POST['sendername'];
	    $image = "uploads/admin.png";
		$datesent = date("F d, Y /h:i A");
		$status = "unread";
									
		$query = mysqli_query($con ,"INSERT INTO message (receiver_name,message,date_sent,sender_id,images,sender_name,message_status) values('$receivername','$msgreply','".$datesent."','".$senderid."','".$image."','".$sendername."','$status')");
		if($query == true){
		    $message = "Message Sent!";
     		echo "<script type='text/javascript'>						
			alert('$message');
			</script>";
			echo '<script type="text/javascript">
			location.replace("index.php");
			</script>';
		}	
		else
		{
			 $message = "Error! System not responding. Please try again.";
     		echo "<script type='text/javascript'>						
			alert('$message');
			</script>";
			echo '<script type="text/javascript">
			location.replace("index.php");
			</script>';
		}
		
}
?>