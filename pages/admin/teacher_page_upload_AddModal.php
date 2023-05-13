
<!-- ========================= Upload leaning materials  MODAL ======================= -->
<div id="addFileModal" class="modal fade">
<form method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
		    <h4 class="modal-title">Add Lessons</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
           
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Subject :</label>
                        <select required name="ddl_subject" id="ddl_subject" data-style="btn-primary" class="form-control input-sm">
                            <option  value="" selected disabled>-- Select Subject --</option>
                            
							
							<?php
							 $q =mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta 
							 left join tblteacher t on ta.teacherid = t.id 
							 left join tblclass c on ta.classid = c.class_id 
							 left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'");
                               
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['s_id'].'">'.$row['subjectname'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
					<div class="form-group">
                        <label>Class :</label>
                        <select required name="ddl_class" id="ddl_class" data-style="btn-primary" class="form-control input-sm">
                            <option  value="" selected disabled>-- Select Class --</option>
                            
							
							<?php
							 $q =mysqli_query($con, "select *,c.class_id as cid,c.classname as cname, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id 
							 left join tblclass c on ta.classid = c.class_id 
							 left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'");
                               
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['class_id'].'">'.$row['cname'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name:</label>
                        <input required name="name" id="name" class="form-control input-sm" type="text" placeholder="Enter Name" />
                    </div>
                   <div class="form-group">
                        <label>File :</label>
                        <input id="uploadImage" type="file" name="image" class="form-control input-sm" style="padding-bottom:30px;" />
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
						<textarea required name="description" id="description" class="form-control input-sm" type="text"> </textarea>
                    </div>
					<div class="form-group">
                        <label>Visibility : </label>
                        <select required name="ddl_visibility" id="ddl_visibility" data-style="btn-primary" class="form-control input-sm">
                            <option  value="" selected disabled>-- Select Option --</option>
				            <option value="ON">ON</option>
							<option value="OFF">OFF</option>
              
                        </select>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_Save" name="btn_Save" value="Save"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========  ADD STUDENT function ============== -->
<?php
$valid_extensions = array('bmp' , 'pdf' , 'docx' , 'pptx' , 'ppt'  , 'zip' , 'rar' ,'doc' , 'xlsx' , 'html' ,'php' , 'css' ,'js' ,'sql', 'accdb' ); // valid extensions
$path = 'document/'; // upload directory
	
	if(isset($_POST['btn_Save']))
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
					    $senderid = $_SESSION['id'];
						$classname = $_POST	['ddl_class'];
						$subject = $_POST['ddl_subject'];
						$filename = $_POST['name'];
						$description = $_POST['description'];
						$sendername =  $_SESSION['username2'];
						$dateupload = date("F d, Y /h:i A");
						$visibility = $_POST['ddl_visibility'];
						
						$chk = mysqli_query($con,"SELECT * from tbllearningmaterials where class_name ='".$classname."' and subject = '".$subject."' and name = '".$filename."' and file = '".$path."' ");
						$ct = mysqli_num_rows($chk);

						if($ct == 0)
						{
							$query = mysqli_query($con,"INSERT INTO tbllearningmaterials (class_name,sender_name,subject,name,file,date_uploaded,description,visible) values ('".$classname."','".$senderid."','".$subject."','".$filename."','".$path."','".$dateupload."','".$description."','$visibility')"); 
							if($query == true){
								$_SESSION['added'] = 1;
								$message = "New files added successful!";
									echo "<script type='text/javascript'>
									
									alert('$message');
									</script>";
									
									echo '<script type="text/javascript">
									location.replace("teacher_page_upload.php");
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
									location.replace("teacher_page_upload.php");
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
							location.replace("teacher_page_upload.php");
							</script>';
			}
				
			}	
	}
?>



