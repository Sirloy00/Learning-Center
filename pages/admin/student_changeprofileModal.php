<!-- ========================= Edit User Profile Modal and Function ======================= -->
<div id="student_change_profileModal" class="modal fade">
<form method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-sm" style="width:400px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(5, 69, 110);color:white;">
			<h4 class="modal-title">Upload Image:</h4>
            <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body" >
            <div class="row"> 
			    <div class="col-md-12">
					<div class="form-group">
						<center><input type="file" class="btn btn-primary btn-m" name="image_upload"/></center>
					</div>
				</div>
            </div>
		</div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-m" id="btn_update" name="btn_update" value="Save"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========  FUNCTION  ============== -->

<?php  

if(isset($_POST['btn_update'])){
	if(isset($_FILES["image_upload"]["name"])) 
	{
	 $name = $_FILES["image_upload"]["name"];
	 $size = $_FILES["image_upload"]["size"];
	 $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
	 $allowed_ext = array("png", "jpg", "jpeg");
	 if(in_array($ext, $allowed_ext))
	 {
	  if($size < (1024*1024))
	  {
	   $new_image = '';
	   $new_name = md5(rand()) . '.' . $ext;
	   $path = 'uploads/' . $new_name;
	   list($width, $height) = getimagesize($_FILES["image_upload"]["tmp_name"]);
	   if($ext == 'png')
	   {
		$new_image = imagecreatefrompng($_FILES["image_upload"]["tmp_name"]);
	   }
	   if($ext == 'jpg' || $ext == 'jpeg')  
				{  
				   $new_image = imagecreatefromjpeg($_FILES["image_upload"]["tmp_name"]);  
				}
				$new_width=150;
				$new_height = ($height/$width)*150;
				$tmp_image = imagecreatetruecolor($new_width, $new_height);
				imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
				imagejpeg($tmp_image, $path, 100);
				imagedestroy($new_image);
				imagedestroy($tmp_image);
				$txt_id = $_SESSION['student_id'];
				$txt_username = $_SESSION['student_username'];
				$datesent = date("F d, Y /h:i A");
				$description = "Changed his/her profile picture.";
				//update data in the database tblteacher
				 $query = mysqli_query($con,"UPDATE tblstudent SET images ='$path' where id = '$txt_id'");
				 $notifyquery = mysqli_query($con,"Insert into tblnotification (images,name,description,date_time) values('$path','$txt_username','$description','$datesent')");
				
				 if($query == true and $notifyquery == true ){
			   
				    $message = "You changed your profile picture successfully!";
					echo "<script type='text/javascript'>
					alert('$message');
				    </script>";
					echo '<script type="text/javascript">
					location.replace("student_page.php");
					</script>';
				}

				if(mysqli_error($con)){
					
				  $message = "Error! System not responding. Please try again";
				  echo "<script type='text/javascript'>	
				  alert('$message');
				  </script>";
			      echo '<script type="text/javascript">
				   location.replace("student_page.php");
				  </script>';	
				}
	  }
	  else
	  {
		$message = "Image File size must be less than 1 MB!";
		echo "<script type='text/javascript'>
		alert('$message');
		</script>";
	    echo '<script type="text/javascript">
	    location.replace("student_page.php");
	    </script>';
	  }
	 }
	 else
	 {
	    $message = "Invalid Image File!";
		echo "<script type='text/javascript'>
		alert('$message');
		</script>";
		echo '<script type="text/javascript">
	    location.replace("student_page.php");
	    </script>';
	 }
	}
	else
	{
	  $message = "Please Select Image File!";
		echo "<script type='text/javascript'>
		alert('$message');
		</script>";
		echo '<script type="text/javascript">
	    location.replace("student_page.php");
	    </script>';
	}
	
}

?>
