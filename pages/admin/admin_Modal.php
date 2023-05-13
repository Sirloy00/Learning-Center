 <!-- Logout Modal-->
    <div class="modal fade" id="adminlogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

	
	           <!-- Admin Reply Modal-->
  
	            <?php
			      
								$squery = mysqli_query($con, "select * from message where receiver_name = 'administrator' order by date_sent DESC ");
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
									  
										include "admin_message_replyModal.php";

									
								}
						    include "admin_message_replyfunction.php";
							
							 
			
           ?>  
