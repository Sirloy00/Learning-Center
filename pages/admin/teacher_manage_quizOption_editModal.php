<!-- ========= REPLY MODAL ======== -->
 <?php echo'<div id="editquizModal'.$row['id'].'" class="modal fade" >
<form method="post">
  <div class="modal-dialog modal-sm" style="width:500px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(0, 128, 24);color:white;">
	      <h5>Edit Quiz</h5>
		   <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body"  style="height:400px;width:300px;border:solid 1px rgb(0, 128, 24);overflow:scroll;overflow-x:hidden;overflow-y:scroll;">
			<input required name="txt_quizid" id="txt_quizid" class="form-control input-lg" type="hidden"  value="'.$row['id'].'"/>
		    <div class="form-group">
			    <label><strong>Quiz Title:</strong></label><br/>
			    <input required name="txt_quiztitle" id="txt_quiztitle" class="form-control input-lg" type="text" placeholder="Quiz Title"  value="'.$row['quiz_title'].'"/>
            </div>
			<div class="form-group">
			    <label><strong>Quiz Title:</strong></label><br/>
			   <input required name="txt_description" id="txt_description" class="form-control input-lg" type="text" placeholder="Description"  value="'.$row['quiz_description'].'"/>
            </div>
		    <div class="form-group">
				<label><strong>Time Duration:</strong></label><br/>
				<input required name="txt_duration" id="txt_duration" class="form-control input-lg" type="number" placeholder="Time Duration/min" value="'.$row['quiz_duration'].'" />
            </div>
			<div class="form-group">
			    <label><strong>Subject:</strong></label><br/>
				<select required="true" name="ddl_subject" id="ddl_class" data-style="btn-primary" class="form-control input-lg">
			    	<option value="'.$row['subject'].'" selected>'.$row['subject'].'</option>';
				     	 $squery1 = mysqli_query($con, "select * from tblteacheradvisory
					     where teacherid = '".$_SESSION['id']."'");
					     $squery1 = mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id 
				    	 left join tblclass c on ta.classid = c.class_id left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'" );
						 while($row2=mysqli_fetch_array($squery1)){
							echo '<option value="'.$row2['subjectname'].' - '.$row2['Description'].'">'.$row2['subjectname'].' - '.$row2['Description'].'</option>';
						 }
       		  echo'  </select>
			</div>
			<div class="form-group">
				<label><strong>Class Name:</strong></label><br/>
			    <select required="true" name="ddl_class" id="ddl_class" data-style="btn-primary" class="form-control input-lg">
			    	<option value="'.$row['class_name'].'" selected>'.$row['class_name'].'</option>';
						$squery2 = mysqli_query($con, "select * from tblteacheradvisory
					    where teacherid = '".$_SESSION['id']."'");
					    $squery2 = mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id 
					    left join tblclass c on ta.classid = c.class_id left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'" );
						while($row2=mysqli_fetch_array($squery2)){
							echo '<option value="'.$row2['classname'].'">'.$row2['classname'].'</option>';
						}
			 echo'   </select>
			</div>
			<div class="form-group">
				<label><strong>Enabled:</strong></label><br/>
				<select title ="Select true or flase. It is use to make a quiz visible or hide to the respondent." required="true" name="ddl_enabled" id="ddl_enabled" data-style="btn-primary" class="form-control input-lg">
				    <option value="'.$row['enabled'].'">'.$row['enabled'].'</option>
					<option value="ON">ON</option>
					<option value="OFF">OFF</option>
				</select>
			</div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <button type="submit" class="btn btn-primary btn-ml" name="btn_edit_save"></i>Save</button>
        </div>
    </div>
  </div>
</form>
</div>';
?>


<?php
	if(isset($_POST['btn_edit_save']))
	{
		    $txt_quizid = $_POST['txt_quizid'];
			$txt_quiztitle = $_POST['txt_quiztitle'];
			$txt_description = $_POST['txt_description'];
			$txt_duration = $_POST['txt_duration'];
			$ddl_subject = $_POST['ddl_subject'];
			$ddl_class = $_POST['ddl_class'];
			$ddl_enabled = $_POST['ddl_enabled'];
			$teacher_id = $_SESSION['id'];
			$teacher_name = $_SESSION['username'];
			$date_time = date("Y/m/d h:i:sa");
			//updating the selected quiz
				$query = mysqli_query($con,"Update tblsavedquiz set quiz_title ='".$txt_quiztitle."',quiz_description = '".$txt_description."',class_name = '".$ddl_class."',subject = '".$ddl_subject."',quiz_duration = '".$txt_duration."',enabled = '".$ddl_enabled."'
				where id = '$txt_quizid'");
				
				if($query == true){
					$message = "Selected Quiz has been updated successfully!";
						echo "<script type='text/javascript'>
						
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("teacher_manage_quizOption.php");
						</script>';
				}
		
				else{
					$message = "Error! System not responding. Please try again.";
							echo "<script type='text/javascript'>
							
							alert('$message');
							</script>";
							
							echo '<script type="text/javascript">
							location.replace("teacher_manage_quizOption.php");
							</script>';
				}
	}
?>


