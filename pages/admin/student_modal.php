 <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	 <form method="POST" action="log_out.php">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"  style="background-color:rgb(5, 69, 110);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color:white;">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Log-out" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <input type="submit" class="btn btn-primary btn-m" id="btn_logout" name="btn_logout" value="Log-out"/>
          </div>
        </div>
      </div>
	  </form>
    </div>
	
	<!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	 <form method="POST" action="student_feedback_function.php">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"  style="background-color:rgb(5, 69, 110);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color:white;">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
			<div class="form-group">
				<textarea required name="txt_messagefeedback"class="form-control input-m" style="height:100px;" placeholder="Please send us your issues or suggestions."></textarea>
			</div>
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
 	        <button type="submit" class="btn btn-primary btn-m" id="btn_sendfeedback" name="btn_sendfeedback"/><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;SEND</button>
          </div>
        </div>
      </div>
	  </form>
    </div>
	
	<!-- Recipient Selection Modal-->
   <div id="recipientModal" class="modal fade">
	<form method="post">
	  <div class="modal-dialog modal-sm" style="width:300px !important;">
		<div class="modal-content">
			<div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
				<h4 class="modal-title">Select Recipient Category</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
			</div>
			<div class="modal-body">
			 <center>
			 <a role="button" class="btn btn-primary" href="student_message_compose_student.php" style="width: 200px;"><b>Student<b></a><br/><br/>
			 <a role="button" class="btn btn-primary" href="student_message_compose_teacher.php" style="width: 200px;"><b>Teacher<b></a><br/><br/>
			 <a role="button" class="btn btn-primary" href="student_message_compose_administrator.php" style="width: 200px;"><b>Administrator<b></a>  
			 </center>
			</div>
			<div class="modal-footer">
				<input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
			</div>
		</div>
	  </div>
	  </form>
	</div>
	
	           <!-- Student Reply Modal-->
  
	            <?php
								$squery = mysqli_query($con, "select * from message where receiver_name = '$username' order by date_sent DESC ");
								while($row = mysqli_fetch_array($squery))
								{
									
								
									    $_SESSION['sender_name'] = $row['sender_name'];
										$_SESSION['sender_image'] = $row['images'];
										$_SESSION['message'] = $row['message'];
										$_SESSION['date_sent'] = $row['date_sent'];
										$msg_display = $_SESSION['message'];
										$_SESSION['message_id']=$row['message_id'];
										 ?>
									   <?php
									  
										include "student_message_replyModal.php";

									
								}
						    include "student_message_replyAddfunction.php";
							
							
                ?>  
