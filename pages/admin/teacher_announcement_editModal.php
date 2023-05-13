<!-- ========= edit announcement MODAL ======== -->
 <?php echo'<div id="editannouncementModal'.$row['announcement_id'].'" class="modal fade" >
<form method="post">
  <div class="modal-dialog modal-sm" style="width:500px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(0, 128, 24);color:white;">
	      <h5>Edit Quiz</h5>
		   <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body" >
			<input required name="txt_edit_announcement_id" id="txt_edit_announcement_id" class="form-control input-lg" type="hidden"  value="'.$row['announcement_id'].'"/>
			<div class="form-group">
			    <label><strong>Subject:</strong></label><br/>
				<select required="true" name="ddl_edit_subject" id="ddl_edit_class" data-style="btn-primary" class="form-control input-lg">
			    	<option value="'.$row['sid'].'" selected>'.$row['sbname'].'</option>';
				     	 $squery1 = mysqli_query($con, "select * from tblteacheradvisory
					     where teacherid = '".$_SESSION['id']."'");
					     $squery1 = mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id 
				    	 left join tblclass c on ta.classid = c.class_id left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'" );
						 while($row2=mysqli_fetch_array($squery1)){
							echo '<option value="'.$row2['s_id'].' - '.$row2['Description'].'">'.$row2['subjectname'].' - '.$row2['Description'].'</option>';
						 }
       		  echo'  </select>
			</div>
			<div class="form-group">
				<label><strong>Class:</strong></label><br/>
			    <select required="true" name="ddl_edit_class" id="ddl_edit_class" data-style="btn-primary" class="form-control input-lg">
			    	<option value="'.$row['cid'].'" selected>'.$row['cname'].'</option>';
						$squery2 = mysqli_query($con, "select * from tblteacheradvisory
					    where teacherid = '".$_SESSION['id']."'");
					    $squery2 = mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id 
					    left join tblclass c on ta.classid = c.class_id left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'" );
						while($row2=mysqli_fetch_array($squery2)){
							echo '<option value="'.$row2['class_id'].'">'.$row2['classname'].'</option>';
						}
			 echo'   </select>
			</div>
			<div class="form-group">
				<label><strong>Announcement:</strong></label><br/>
				<textarea required name="txt_edit_announcement" id="txt_edit_announcement" class="form-control input-lg" placeholder="Your Announcement" style="height:100px;" >'.$row['announcement'].'</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <button type="submit" class="btn btn-primary btn-ml" name="btn_edit_announcement"></i>Save</button>
        </div>
    </div>
  </div>
</form>
</div>';
?>


<?php
	if(isset($_POST['btn_edit_announcement']))
	{
		    $txt_edit_announcement_id = $_POST['txt_edit_announcement_id'];
			$ddl_edit_subject = $_POST['ddl_edit_subject'];
			$ddl_edit_class = $_POST['ddl_edit_class'];
			$txt_edit_announcement = $_POST['txt_edit_announcement'];
			$teacher_id = $_SESSION['id'];
			//updating the selected announcement
				$query = mysqli_query($con,"Update tblannouncement set subject_id ='".$ddl_edit_subject."', class_id = '".$ddl_edit_class."', announcement = '".$txt_edit_announcement."'
				where announcement_id = '$txt_edit_announcement_id'");
				
				if($query == true){
					$message = "Selected announcement has been updated successfully!";
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
?>


