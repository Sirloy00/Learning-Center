<!-- ========= REPLY MODAL ======== -->
 <div id="addquizModal" class="modal fade" >
<form method="post">
  <div class="modal-dialog modal-sm" style="width:500px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
	      <h5>Add Quiz</h5>
		   <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
		    <div class="form-group">
			    <label><strong>Quiz Title:</strong></label><br/>
			    <input autofocus required name="txt_quiztitle" id="txt_quiztitle" class="form-control input-lg" type="text" placeholder="Quiz Title" />
            </div>
			<div class="form-group">
				<label><strong>Description:</strong></label><br/>
				<textarea required name="txt_description" id="txt_description" class="form-control input-lg" placeholder="Description" style="height:70px;"></textarea>
            </div>
		    <div class="form-group">
			    <label><strong>Time Duration:</strong></label><br/>
				<input required name="txt_duration" id="txt_duration" class="form-control input-lg" type="number" placeholder="Time Duration/min" />
            </div>
			<div class="form-group">
				<label><strong>Subject</strong></label><br/>
				<select required="true" name="ddl_subject" id="ddl_class" data-style="btn-primary" class="form-control input-lg">
			    	<option value="" selected disabled>Select Subject</option>
					<?php
				     	 $squery = mysqli_query($con, "select * from tblteacheradvisory
					     where teacherid = '".$_SESSION['id']."'");
					     $squery = mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id 
				    	 left join tblclass c on ta.classid = c.class_id left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'" );
						 while($row=mysqli_fetch_array($squery)){
							echo '<option value="'.$row['subjectname'].' - '.$row['Description'].'">'.$row['subjectname'].' - '.$row['Description'].'</option>';
						 }
					?>
       		    </select>
			</div>
			<div class="form-group">
			    <label><strong>Class:</strong></label><br/>
			    <select required="true" name="ddl_class" id="ddl_class" data-style="btn-primary" class="form-control input-lg">
			    	<option value="" selected disabled>Select Class</option>
			     	<?php
						$squery = mysqli_query($con, "select * from tblteacheradvisory
					    where teacherid = '".$_SESSION['id']."'");
					    $squery = mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id 
					    left join tblclass c on ta.classid = c.class_id left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'" );
						while($row=mysqli_fetch_array($squery)){
							echo '<option value="'.$row['classname'].'">'.$row['classname'].'</option>';
						}
					?>
			    </select>
			</div>
			<div class="form-group">
			    <label><strong>Visibility:</strong></label><br/>
				<select title ="Select true or flase. It is use to make a quiz visible or hide to the respondent." required="true" name="ddl_enabled" id="ddl_enabled" data-style="btn-primary" class="form-control input-lg">
				    <option value="" selected disabled>Visibility</option>
					<option value="true">ON</option>
					<option value="false">OFF</option>
				</select>
			</div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <button type="submit" class="btn btn-primary btn-ml" name="btn_add_quiz"></i>Save</button>
        </div>
    </div>
  </div>
</form>
</div>

<?php
	if(isset($_POST['btn_add_quiz'])){
			$txt_quiztitle = $_POST['txt_quiztitle'];
			$txt_description = $_POST['txt_description'];
			$txt_duration = $_POST['txt_duration'];
			$ddl_subject = $_POST['ddl_subject'];
			$ddl_class = $_POST['ddl_class'];
			$ddl_enabled = $_POST['ddl_enabled'];
			$teacher_id = $_SESSION['id'];
			$teacher_name = $_SESSION['username'];
			$date_time = date("Y/m/d h:i:sa");
			//checking the duplicate entry
			$chkduplicate = mysqli_query($con,"Select * from tblsavedquiz where quiz_title = '$txt_quiztitle' and class_name = '$ddl_class' and uploader_id = '$teacher_id'");
			$ct = mysqli_num_rows($chkduplicate);
			if($ct == 0)
			{
				$query = mysqli_query($con,"Insert into tblsavedquiz (uploader_id,uploader_name,quiz_title,quiz_description,class_name,subject,date_time,quiz_duration,enabled)
				values('".$teacher_id."','".$teacher_name."','".$txt_quiztitle."','".$txt_description."','".$ddl_class."','".$ddl_subject."','".$date_time."','".$txt_duration."','".$ddl_enabled."')");
				
				if($query == true){
					$message = "Quiz has been saved!";
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
			else{
				$message = "Duplica Entry! Please try again.";
						echo "<script type='text/javascript'>
						
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("teacher_manage_quizOption.php");
						</script>';
			}
			
	}
?>


