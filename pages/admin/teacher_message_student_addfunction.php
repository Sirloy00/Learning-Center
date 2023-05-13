				    
	<!-- =========  student message add function  ============== -->
<?php
      
	if(isset($_POST['btn_send'])){
	   include "../connection.php";
	   session_start();
	  
																
		$txtrecipient = $_POST['ddl_student_recipient'];
		$txtmsg = $_POST['msg'];
		$senderid = $_SESSION['id'];
		$sendername = $_SESSION['username'];
		$image = $_SESSION['images'];
      	$datesent = date("F d, Y /h:i A");
		$status = "unread";
		
	 
			$query = mysqli_query($con ,"INSERT INTO message (receiver_name,message,date_sent,sender_id,images,sender_name,message_status) values('".$txtrecipient."','".$txtmsg."','".$datesent."','".$senderid."','".$image."','".$sendername."','".$status."')");
			if($query == true){
	            $_SESSION['added'] = 1;
	           $message = "Message Sent!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacher_message_compose_student.php");
					</script>';
			}
		
		
	
	}
?>