<!-- ========= REPLY MODAL ======== -->
<?php

$sender = $_SESSION['sender_name'];
$receiver = $student_tempusername;
 echo '<div id="reply'.$row['message_id'].'" class="modal fade" >
<form method="post">
  <div class="modal-dialog modal-m" style="width:500px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
	        <h5 style ="text-align:center;">
			<img src ="'.$_SESSION['sender_image'].'" style="height: 65px; width: 75px;border-radius:100%;border:solid 2px white;" />
			'.$_SESSION['sender_name'].'</h5>
			<input type="hidden" name="sendername" value="'.$sender.'"/>
			<input type="hidden" name="receivername" value="'.$receiver.'"/>
            <button type="button" title="Close" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body" style="height:470px;width:499px;border:solid 1px blue;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">';
		    
			$squery2 = mysqli_query($con, "select * from message where receiver_name = '$username' and sender_name = '".$_SESSION['sender_name']."' or receiver_name = '".$_SESSION['sender_name']."' and sender_name = '$username' order by message_id ASC");
			while($row = mysqli_fetch_array($squery2))
				{
					$_SESSION['sender_name'] = $row['sender_name'];
				    $_SESSION['sender_image'] = $row['images'];
					$_SESSION['message'] = $row['message'];
					$_SESSION['date_sent'] = $row['date_sent'];
					$_SESSION['message_id']=$row['message_id'];
					echo'
				 <img src = "'.$_SESSION['sender_image'].'" style="height: 45px; width: 55px;border-radius:100%;" />&nbsp;<b>
				  '.$_SESSION['sender_name'].'</b></span>
				  <ul style="list-style: none;">
					 <li><i class="fas fa-fw fa-clock" style="font-size:10px;color:gray"></i>&nbsp  <span style="font-size: 9px; color: red" >'.$_SESSION['date_sent'].'</span></li>
					 <li><i class="fas fa-fw fa-envelope"  style="color:gray"></i> &nbsp; '.$_SESSION['message'].'</li><br/>
				     
				  </ul>
				  <div class="dropdown-divider"></div>
				
				';
				
				}
			
		 echo'	
				
      
        </div>
        <div class="modal-footer">
		   
				<textarea style ="height: 110px width: 600px;" class="form-control" placeholder="Your Reply" name="msgreply" required></textarea>	
			 
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <button type="submit" class="btn btn-primary btn-m" name="btn_send"><i class="fas fa-fw fa-paper-plane"></i>&nbsp;Send</button>
        </div>
    </div>
  </div>
</form>
</div>';?>


