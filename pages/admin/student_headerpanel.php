<?php if($_SESSION['role'] == "student")
							{								
								$studentuser = mysqli_query($con,"SELECT *,CONCAT(fname,' ', mname,' ', lname)  as uname from tblstudent where id = '".$_SESSION['userid']."' ");
								while($row = mysqli_fetch_array($studentuser)){
								$_SESSION['student_username'] = $row['uname'];
								$_SESSION['student_pass'] = $row['password'];
								$_SESSION['student_usern'] = $row['username'];
								$_SESSION['student_id'] = $row['id'];
								$_SESSION['student_images'] = $row['images'];
				             
								}							
							}
	$username = $_SESSION['student_username'];	 	
    $student_tempusername = $username;	
 ?>
  <?php if($_SESSION['role'] == "student")
							{								
								$studentuser2 = mysqli_query($con,"SELECT *,CONCAT(lname,', ', fname,' ', mname)  as uname from tblstudent where id = '".$_SESSION['userid']."' ");
								while($row = mysqli_fetch_array($studentuser2)){
								$_SESSION['student_username2'] = $row['uname'];
								$_SESSION['student_id'] = $row['id'];
								$_SESSION['student_images'] = $row['images'];
				             
								}							
							} 
$student_id = $_SESSION['student_id'];							
 ?>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

       <a class="navbar-brand mr-1" href="#"><span><img src="images/ccc-logo.png" style="height: 40px; width: 50px" alt="ccc-logo" /> &nbsp;CCC-LMS</span></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

           <!-- Navbar -->
		<!-- notification -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1" style="margin-top: 5px;">
		  
          <a class="nav-link dropdown-toggle" title="Notification" href="#" id="alertsDropdown" name="btn_notification" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw" style="font-size:20px"></i>
                     <?php
                        $q = mysqli_query($con, "select * from tblnotification");
                        $num_rows = mysqli_num_rows($q);
						$_SESSION['notify_count'] = $num_rows;
						if($_SESSION['notify_count'] <= 9 and $_SESSION['notify_count'] >= 1)
						{
							echo'<span class="badge badge-danger" style="font-size:9px">
						     '.$_SESSION['notify_count'].'
							</span>';
						}
						else if($_SESSION['notify_count']<=0)
						{
							echo'';
						}
						else if($_SESSION['notify_count']>=10)
						{
							echo'<span class="badge badge-danger" style="font-size:9px">
						     9+
							</span>';
						}
			?>
          </a>
		 
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown" style = "border:solid 1px gray;">
		    <div style="background-color:skyblue;padding:10px;"><h4><span style="color: black;"><i class="fas fa-fw fa-bell" style="font-size:23px;color:white"></i>&nbsp; <span>Notification</span></h4>
			</div>
           <div style="height:400px;width:400px;border:solid 0.5px gray;overflow:scroll;overflow-x:hidden;overflow-y:scroll;"><br/>
		    <?php
			                if($_SESSION['notify_count'] == 0)
								{
									echo '<br/><br/></br></br><center><h6>No notification found!</h6><center>';
								}
						    $squery = mysqli_query($con, "select * from tblnotification order by notification_id DESC");
							while($row = mysqli_fetch_array($squery))
							{
								    $_SESSION['notify_image'] = $row['images'];
									$_SESSION['notify_name'] = $row['name'];
									$_SESSION['notify_description'] = $row['description'];
									$_SESSION['notify_date_time']=$row['date_time'];
								 	 ?>
								   <?php 	echo'
									  <a a class="dropdown-item">
									  <img src = "'.$_SESSION['notify_image'].'" style="height: 50px; width: 55px;border-radius:100%;" />&nbsp;<b>
									  '.$_SESSION['notify_name'].'</b></span>
									  <ul style="list-style: none;">
									     <li><i class="fas fa-fw fa-clock" style="font-size:10px;color:gray"></i>&nbsp  <span style="font-size:10px; color: red" >'.$_SESSION['notify_date_time'].'</span></li>
										 <li>'.$_SESSION['notify_description'].'</li><br/>  
									  </ul>
									  <div class="dropdown-divider"></div></a>';
								
							}
							
			
           ?>  
		        </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" data-toggle="modal" data-target="#mark_all_notifyModal" style="color:blue;"><i class="fas fa-fw fa-check" style="font-size:12px;color:gray;"></i> &nbspMark all as read</a>
          </div>
        </li>
		<?php include"mark_all_notifyModal.php"; ?>
		<!--message-->
        <li class="nav-item dropdown no-arrow mx-1" style="margin-top: 5px;">
          <a class="nav-link dropdown-toggle"  title="Messages" href="?update='true'" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw" style="font-size:20px"></i>
            
			<?php
			
				     
                      $q = mysqli_query($con, "select * from message where receiver_name = '$username' and message_status='unread' ");
                        $num_rows = mysqli_num_rows($q);
						$_SESSION['student_message_count'] = $num_rows;
						if($_SESSION['student_message_count'] <= 9 and $_SESSION['student_message_count'] >= 1)
						{
							echo'<span class="badge badge-danger" style="font-size:9px">
						     '.$_SESSION['student_message_count'].'
							</span>';
						}
						else if($_SESSION['student_message_count']<=0)
						{
							echo'';
						}
						else if($_SESSION['student_message_count']>=10)
						{
							echo'<span class="badge badge-danger" style="font-size:9px">
						     9+
							</span>';
						}
			?>	
				
			</span>
          </a>
		  
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown" style = "border:solid 1px gray;">
		  	<div style="background-color:skyblue;padding:10px;"><h4><span style="color: black;"><i class="fas fa-fw fa-envelope" style="font-size:23px;color:white"></i>&nbsp; <span>Messaging</span>
			<a href="#"  title="Compose a Message!" data-toggle="modal" data-target="#recipientModal" style="float:right;"><i class="fas fa-fw fa-edit" style="font-size:23px;color:white"></i></a></h4>
			</div>
		    <div style="height:400px;width:400px;border:solid 0.5px gray;overflow:scroll;overflow-x:hidden;overflow-y:scroll;"><br/>
		    <?php
			                if($_SESSION['student_message_count'] == 0)
								{
									echo '<br/><br/></br></br><center><h6>No message found!</h6><center>';
								}
						    $squery = mysqli_query($con, "select * from message where receiver_name = '$username' and message_status = 'unread' order by message_id DESC");
							while($row = mysqli_fetch_array($squery))
							{
								
							
								$_SESSION['sender_name'] = $row['sender_name'];
								
								
									$_SESSION['sender_image'] = $row['images'];
									$_SESSION['message'] = $row['message'];
									$_SESSION['date_sent'] = $row['date_sent'];
									$msg_display = $_SESSION['message'];
									$_SESSION['message_id']=$row['message_id'];
								 	 ?>
								   <?php 	echo'
									  <a a class="dropdown-item" title="Click here to view conversation!" data-toggle="modal" data-target="#reply'.$_SESSION['message_id'].'">
									  <img src = "'.$_SESSION['sender_image'].'" style="height: 50px; width: 55px;border-radius:100%;" />&nbsp;<b>
									  '.$_SESSION['sender_name'].'</b></span>
									  <ul style="list-style: none;">
									     <li><i class="fas fa-fw fa-clock" style="font-size:10px;color:gray"></i>&nbsp  <span style="font-size:10px; color: red" >'.$_SESSION['date_sent'].'</span></li>
										 <li><i class="fas fa-fw fa-envelope"  style="color:gray"></i> &nbsp; ';?> <?php echo mb_strimwidth($msg_display, 0, 50, "..."); echo'</li><br/>  
									  </ul>
									  <div class="dropdown-divider"></div></a>';
								
							}
							
			
           ?>  
		        </div>
            <a class="dropdown-item" href="teacher_message_inbox.php">
              <div class="dropdown-divider"></div><i class="fas fa-fw fa-eye" style="font-size:12px;color:gray;"></i> &nbsp <span style="color: blue">View all message</span>  
			</a>
			 <a class="dropdown-item" href = "" data-toggle="modal" data-target="#student_markall_Modal">
              <div class="dropdown-divider"></div><i class="fas fa-fw fa-check" style="font-size:12px;color:gray;"></i> &nbsp <span style="color: blue">Mark all as read</span>  
			</a>
          </div>
        </li>
		<?php include "student_mark_all_message.php"; ?>
		<!--profile-->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" title="User Account" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php echo'<img src="'.$_SESSION['student_images'].'" style = " border-radius: 100%;height: 30px; width: 30px; border: 2px solid skyblue;""/>';?>
          </a>
          <?php 
		  echo'<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">';
				if($_SESSION['role'] == "student"){
			        $user = mysqli_query($con,"SELECT *,CONCAT(fname,' ', mname,' ', lname)  as uname from tblstudent where id = '".$_SESSION['userid']."' ");
                    while($row = mysqli_fetch_array($user)){
                        $_SESSION['user'] = "Student" ;
						echo' <a class="dropdown-item" href="#"><center><img src="'.$_SESSION['student_images'].'" style = " border-radius: 100%;height: 80px; width: 80px; border: 2px solid skyblue;""</center><b><center><span style="font-size:15px">'.$row['uname'].'</span></b><br/></a>';
                        }
                    }
           echo' 
		   <b><p> '.$_SESSION['user'].'</p></b>
		   <a data-toggle="modal" data-target="#userprofileModal" class="dropdown-item" href="#" style="color:blue;"><i class="fas fa-fw fa-edit" style="font-size:12px"></i>Edit User Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><center><span style="color: blue">Log out</span> </center></a>
          </div>';
		  ?>
        </li>
		<?php include"student_userprofileModal.php"?>
      </ul>

    </nav>