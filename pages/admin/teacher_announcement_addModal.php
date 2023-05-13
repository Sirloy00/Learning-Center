<!-- ========= REPLY MODAL ======== -->
 <div id="addannouncementModal" class="modal fade" >
<form method="post">
  <div class="modal-dialog modal-sm" style="width:500px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
	      <h5>Add Announcement</h5>
		   <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
			<div class="form-group">
				<label><strong>Subject:</strong></label><br/>
				<select required="true" name="ddl_subject" id="ddl_subject" data-style="btn-primary" class="form-control input-lg">
			    	<option value="" selected disabled>Select Subject</option>
					<?php
				     	 $squery = mysqli_query($con, "select * from tblteacheradvisory
					     where teacherid = '".$_SESSION['id']."'");
					     $squery = mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id 
				    	 left join tblclass c on ta.classid = c.class_id left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'" );
						 while($row=mysqli_fetch_array($squery)){
							echo '<option value="'.$row['s_id'].'">'.$row['subjectname'].' - '.$row['Description'].'</option>';
						 }
					?>
				</select>
            </div>
			<div class="form-group">
				<label><strong>Class:</strong></label><br/>
				<select required="true" name="ddl_class" id="ddl_class" data-style="btn-primary" class="form-control input-lg">
			    	<option value="" selected disabled>Select Class</option>
					<?php
					    $squery = mysqli_query($con, "select *,c.class_id as cid,c.classname as cname, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta 
						left join tblteacher t on ta.teacherid = t.id 
						left join tblclass c on ta.classid = c.class_id 
						left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."' ");
						while($row=mysqli_fetch_array($squery)){
							echo '<option value="'.$row['class_id'].'">'.$row['cname'].'</option>';
						}
					?>
				</select>
            </div>
			<div class="form-group">
				<label><strong>Announcement:</strong></label><br/>
				<textarea required name="txt_announcement" id="txt_announcement" class="form-control input-lg" placeholder="Your Announcement" style="height:100px;"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <button type="submit" class="btn btn-primary btn-ml" name="btn_addAnnouncement"></i>Save</button>
        </div>
    </div>
  </div>
</form>
</div>

<?php
	if(isset($_POST['btn_addAnnouncement'])){
			$ddl_subject = $_POST['ddl_subject'];
			$ddl_class = $_POST['ddl_class'];
			$txt_announcement = $_POST['txt_announcement'];
			$teacher_id = $_SESSION['id'];
			$teacher_name = $_SESSION['username'];
			$datesent = date("F d, Y /h:i A");
			//checking the duplicate entry
			$chkduplicate = mysqli_query($con,"Select * from tblannouncement where subject_id = '$ddl_subject' and class_id = '$ddl_class' and announcement = '$teacher_id' and sender_id = '$teacher_id'");
			$ct = mysqli_num_rows($chkduplicate);
			if($ct == 0)
			{
				$query = mysqli_query($con,"Insert into tblannouncement (subject_id,class_id,announcement,date_time,sender_id,profile_id)
				values('".$ddl_subject."','".$ddl_class."','".$txt_announcement."','".$datesent."','".$teacher_id."','".$teacher_id."')");
				
				if($query == true){
					$message = "Announcement has been sent!";
						echo "<script type='text/javascript'>
						
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("teacher_announcement.php");
						</script>';
				}
		
				else{
					$message = "Error! System not responding. Please try again.";
							echo "<script type='text/javascript'>
							
							alert('$message');
							</script>";
							
							echo '<script type="text/javascript">
							location.replace("teacher_announcement.php");
							</script>';
				}
			}
			else{
				$message = "Duplica Entry! Please try again.";
						echo "<script type='text/javascript'>
						
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("teacher_announcement.php");
						</script>';
			}
			
	}
?>


