
<!-- =========learning materials edit Modal ======== -->


<?php 
echo '
 <div id="editModal'.$row['lid'].'" class="modal fade">
<form method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(0, 128, 24);color:white;">
		    <h4 class="modal-title">Edit Lessons</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
           
        </div>
        <div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<input type="hidden" value="'.$row['lid'].'" name="hidden_id" id="hidden_id"/>
					<div class="form-group">
                        <label><strong>Class :</strong></label>
                        <select required name="ddl_class" id="ddl_class" data-style="btn-primary" class="form-control input-sm">
                            <option  value="'.$row['class_name'].'" selected >'.$row['cname'].'</option>';
                            
							 $q =mysqli_query($con, "select *,c.class_id as cid,c.classname as cname, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id left join tblclass c on ta.classid = c.class_id left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'");
                               
                                while($row1=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row1['class_id'].'">'.$row1['cname'].'</option>';
                                }
                  echo' </select>
                    </div>
					<div class="form-group">
                        <label><strong>Subject :</strong></label>
                        <select required name="ddl_subject" id="ddl_subject" data-style="btn-primary" class="form-control input-sm">
                            <option  value="'.$row['subject'].'" selected>'.$row['sbname'].'</option>';
							 $q =mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid,CONCAT(sb.subjectname,' - ',sb.Description) as subname, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id left join tblclass c on ta.classid = c.class_id left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'");
                               
                                while($row2=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row2['s_id'].'">'.$row2['subname'].'</option>';
                                }
                    
                  echo' </select>
                    </div>
					 <div class="form-group">
						<label><strong>Name : </strong></label>
						<input name="name" id="name" class="form-control input-sm" type="text" value="'.$row['name'].'" />
					</div>
					<div class="form-group">
                        <label><strong>File : </strong></label>
                        <input id="uploadImage" type="file" name="image" class="form-control input-sm" style="padding-bottom:30px;" />
                    </div>
					<div class="form-group">
						<label><strong>Description :</strong> </label>
						<input name="description" id="description" class="form-control input-sm" type="text" value="'.$row['description'].'" />
					</div>
					<div class="form-group">
                        <label>Visibility : </label>
                        <select required name="ddl_visible" data-style="btn-primary" class="form-control input-sm">
                            <option value="'.$row['visible'].'" selected>'.$row['visible'].'</option>';
							echo'
				            <option value="ON">ON</option>
							<option value="OFF">OFF</option>
              
                        </select>
                    </div>
					
				</div>
				
			</div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_update_file" value="Edit"/>
		</div>
    </div>		
	</div>	

</form>
  </div>

';?>

<!-- =========learning materials edit function =========== -->
<?php 
if(isset($_POST['btn_update_file'])){
	
	    $txt_id = $_POST['hidden_id'];
    	$classname = $_POST	['ddl_class'];
		$subject = $_POST['ddl_subject'];
		$filename = $_POST['name'];
		$description = $_POST['description'];
		$visibility = $_POST['ddl_visible'];
		
        $valid_extensions = array('bmp' , 'pdf' , 'docx' , 'pptx' , 'ppt'  , 'zip' , 'rar' ,'doc' , 'xlsx' , 'html' ,'php' , 'css' ,'js' ,'sql', 'accdb' ); // valid extensions
		$path = 'document/'; // upload directory
		
		if(!empty($_POST['name']) || !empty($_FILES['image']))
		{
				$img = $_FILES["image"]["name"]; //stores the original filename from the client
				$tmp = $_FILES["image"]["tmp_name"]; //stores the name of the designated temporary file
				$errorimg = $_FILES["image"]["error"]; //stores any error code resulting from the transfer
				if($errorimg > 0){
						
						$query = mysqli_query($con,"UPDATE tbllearningmaterials SET  class_name = '".$classname."', subject = '".$subject."', name = '".$filename."', description = '".$description."', visible = '$visibility' where id = '".$txt_id."' ");

						if($query == true){
									$message = "Selected Record has been updated!";
									echo "<script type='text/javascript'>
									
									alert('$message');
									</script>";
									
									echo '<script type="text/javascript">
									location.replace("teacher_page_upload.php");
									</script>';
						}

					
			}

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
						//include database configuration file
						

						$query2 = mysqli_query($con,"UPDATE tbllearningmaterials SET  class_name = '".$classname."', subject = '".$subject."', name = '".$filename."', file = '".$path."', description = '".$description."',visible = '".$visibility."' where id = '".$txt_id."' ");

						if($query2 == true){
							$_SESSION['edit'] = 1;
						  
									$message = "Selected Record has been updated!";
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
		               $query3 = mysqli_query($con,"UPDATE tbllearningmaterials SET  class_name = '".$classname."', subject = '".$subject."', name = '".$filename."', description = '".$description."',visible = '".$visibility."' where id = '".$txt_id."' ");

						if($query3 == true){
									$message = "Selected Record has been updated!";
									echo "<script type='text/javascript'>
									
									alert('$message');
									</script>";
									
									echo '<script type="text/javascript">
									location.replace("teacher_page_upload.php");
									</script>';
						}
			}
			
		}
}
?>
