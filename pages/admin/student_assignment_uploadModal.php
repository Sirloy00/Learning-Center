
<!-- ========================= Upload leaning materials  MODAL ======================= -->
<div id="uploadassignModal" class="modal fade">
<form method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
		    <h4 class="modal-title">Upload Assignment</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
           
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Subject :</label>
                        <select required name="ddl_subject" id="ddl_subject" data-style="btn-primary" class="form-control input-sm">
                            <option  value="" selected disabled>Select Subject</option>
                            
							
							<?php
							    $scquery = mysqli_query($con, "select *,st.images as stimg,t.id as teacherid,c.class_id as cid, st.id as stid,
								  sb.s_id as sbid, sc.studclass_id as sid,CONCAT(st.lname, ', ', st.fname, ' ',st.mname) as sname,
								  CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as teachername from tblstudentclass sc 
								  left join tblclass c on sc.classid = c.class_id
								  left join tblstudent st on sc.studentid = st.id 
								  left join tblsubjects sb on sc.subjectid = sb.s_id 
								  left join tblteacher t on sc.teacherid = t.id  
								  where sc.studentid = '".$_SESSION['student_id']."' order by sc.classid ASC");
								  while($row = mysqli_fetch_array($scquery))
								  {
                                    echo '<option value="'.$row['s_id'].'">'.$row['subjectname'].'-'.$row['Description'].'</option>';
								  }
                               
                            ?>
                        </select>
                    </div>
					<div class="form-group">
                        <label>Subject Teacher :</label>
                        <select required name="ddl_teacher" id="ddl_teacher" data-style="btn-primary" class="form-control input-sm">
                            <option  value="" selected disabled>Select Teacher</option>
                            
							
							<?php
							    $scquery = mysqli_query($con, "select *,st.images as stimg,t.id as teacherid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as teachname,c.class_id as cid, st.id as stid,
								  sb.s_id as sbid, sc.studclass_id as sid,CONCAT(st.lname, ', ', st.fname, ' ',st.mname) as sname,
								  CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as teachername from tblstudentclass sc 
								  left join tblclass c on sc.classid = c.class_id
								  left join tblstudent st on sc.studentid = st.id 
								  left join tblsubjects sb on sc.subjectid = sb.s_id 
								  left join tblteacher t on sc.teacherid = t.id  
								  where sc.studentid = '".$_SESSION['student_id']."' order by sc.classid ASC");
								  while($row = mysqli_fetch_array($scquery))
								  {
                                    echo '<option value="'.$row['id'].'">'.$row['teachname'].'</option>';
								  }
                               
                            ?>
                        </select>
                    </div>
					<div class="form-group">
                        <label>File Name:</label>
						<textarea required name="txt_filename" class="form-control input-sm" type="text"> </textarea>
                    </div>
                    <div class="form-group">
                        <label>File :</label>
                        <input id="uploadImage" type="file" name="image" class="form-control input-sm" style="padding-bottom:30px;" />
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_ass_Save" name="btn_ass_Save" value="SEND"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========  ADD STUDENT function ============== -->
<?php
$valid_extensions = array('bmp' , 'pdf' , 'docx' , 'pptx' , 'ppt'  , 'zip' , 'rar' ,'doc' , 'xlsx' , 'html' ,'php' , 'css' ,'js' ,'sql', 'accdb' ); // valid extensions
$path = 'document/'; // upload directory
	
	if(isset($_POST['btn_ass_Save']))
	{
		
			if(!empty($_POST['name'])||  !empty($_FILES['image']))
			{		
				$img = $_FILES['image']['name']; //stores the original filename from the client
				$tmp = $_FILES["image"]["tmp_name"]; //stores the name of the designated temporary file
				$errorimg = $_FILES["image"]["error"]; //stores any error code resulting from the transfer
					// get uploaded file's extension
				$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
				 
				// can upload same image using rand function
				$final_image = rand(1000,1000000).$img;
			 
				// check's valid format
				if(in_array($ext, $valid_extensions)) 
				{ 
				$path = $path.strtolower($final_image); 
				
					if(move_uploaded_file($tmp,$path)) 
					{
					    $student_senderid = $_SESSION['student_id'];
						$subject = $_POST['ddl_subject'];
						$subjteacher = $_POST['ddl_teacher'];
						$filename = $_POST['txt_filename'];
						$dateupload = date("F d, Y /h:i A");
						
						$chk = mysqli_query($con,"SELECT * from tblassignment where student_id ='".$student_senderid."' and teacher_id = '".$subjteacher."' and subject_id = '".$subject."' and file_name = '".$filename."' and file = '".$path."' ");
						$ct = mysqli_num_rows($chk);

						if($ct == 0)
						{
							$query = mysqli_query($con,"INSERT INTO tblassignment (student_id,subject_id,teacher_id,file_name,file,date_sent) values ('".$student_senderid."','".$subject."','".$subjteacher."','".$filename."','".$path."','".$dateupload."')"); 
							if($query == true){
								$_SESSION['added'] = 1;
								$message = "New files has been sent!";
									echo "<script type='text/javascript'>
									
									alert('$message');
									</script>";
									
									echo '<script type="text/javascript">
									location.replace("student_assignment.php");
									</script>';
							}
						}
						else
						{
							$_SESSION['duplicate'] = 1;
							$message = "Duplicate Entry";
									echo "<script type='text/javascript'>
									
									alert('$message');
									</script>";
									
									echo '<script type="text/javascript">
									location.replace("student_assignment.php");
									</script>';
						}
					}
			
			}
			else
			{
				 $message = "Error! Please select files";
							echo "<script type='text/javascript'>
							
							alert('$message');
							</script>";
							
							echo '<script type="text/javascript">
							location.replace("student_assignment.php");
							</script>';
			}
				
			}	
	}
?>



