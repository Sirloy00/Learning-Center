<?php
if(isset($_POST['btn_send']))
{
		$msgreply = $_POST['msgreply'];
	    $senderid = $_SESSION['id'];
		$sendername = $_POST['receivername'];
		$receivername = $_POST['sendername'];
		$image = $_SESSION['images'];
		$datesent = date("F d, Y /h:i A");
		$status = "unread";
									
		$query = mysqli_query($con ,"INSERT INTO message (receiver_name,message,date_sent,sender_id,images,sender_name,message_status) values('$receivername','$msgreply','".$datesent."','".$senderid."','".$image."','".$sendername."','$status')");
		if($query == true){
		    $message = "Message Sent!";
     		echo "<script type='text/javascript'>						
			alert('$message');
			</script>";
			echo '<script type="text/javascript">
			location.replace("teacher_message_inbox.php");
			</script>';
		}	
		
}
?>