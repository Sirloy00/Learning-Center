<!-- ========================= Edit User Profile Modal and Function ======================= -->
<div id="admin_change_profileModal" class="modal fade">
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
						<center><input type="file" class="btn btn-primary btn-m" id="btn_changepic" name="image"/></center>
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

<!-- =========  ADD Question FUNCTION  ============== -->

<?php
if(isset($_POST['btn_update'])){
		
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		$path = 'uploads/'; // upload directory
		if(!empty($_POST['name']) || $_FILES['image'])
		{
			$img = $_FILES["image"]["name"]; //stores the original filename from the client
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
				//include database configuration file
            
			$txt_id = $_SESSION['admin_id'];
			$datesent = date("F d, Y /h:i A");
			$description = "Changed his/her profile picture.";
			//update data in the database tblteacher
			 $query = mysqli_query($con,"UPDATE tbladmin SET images ='$path' where id = '$txt_id'");
			
			 if($query == true ){
	       
				  $message = "You change your profile picture successfully!";
							echo "<script type='text/javascript'>
							
							alert('$message');
							</script>";
							
							echo '<script type="text/javascript">
							location.replace("index.php");
							</script>';
			}

			if(mysqli_error($con)){
				
			  $message = "Error! System not responding. Please try again";
						echo "<script type='text/javascript'>
						
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("index.php");
						</script>';
			}
			}
			} 
			else 
			{
		     $message = "Error!Please select valid image!";
							echo "<script type='text/javascript'>
							
							alert('$message');
							</script>";
							
							echo '<script type="text/javascript">
							location.replace("index.php");
							</script>';

			
			
			}
		}
	
}
?>
