
<!-- =========edit teacher MODAL ======== -->
<?php echo '
 <div id="editModal'.$row['id'].'" class="modal fade">
<form method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(0, 128, 24);color:white;">
		    <h4 class="modal-title">Edit Teacher</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
           
        </div>
        <div class="modal-body">
			<div class="row">
				<div class="col-md-12">
				    <label>Image : </label>
					<input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
					<div class="form-group">
					    <center><img  name = "image" src="'.$row['images'].'" style="height: 100px; max-width:100%"; /></center>
					</div>
					<div class="form-group">
						<input id="uploadImage" type="file"  name="image"  class="form-control input-sm" style="padding-bottom:30px;"/>
					</div>
					<div class="form-group">
						<label>First Name: </label>
						<input name="txt_edit_fname" id="txt_edit_fname" class="form-control input-sm" type="text" value="'.$row['fname'].'" />
					</div>
					<div class="form-group">
						<label>Middle Name: </label>
						<input name="txt_edit_mname" id="txt_edit_mname" class="form-control input-sm" type="text" value="'.$row['mname'].'" />
					</div>
					<div class="form-group">
						<label>Last Name: </label>
						<input name="txt_edit_lname" id="txt_edit_lname" class="form-control input-sm" type="text" value="'.$row['lname'].'" />
					</div>
					<div class="form-group">
						<label>Contact: </label>
						<input name="txt_edit_contact" id="txt_edit_contact" class="form-control input-sm" type="number" value="'.$row['contact'].'" />
					</div>
					<div class="form-group">
						<label>Address: </label>
						<input name="txt_edit_addr" id="txt_edit_addr" class="form-control input-sm" type="text" value="'.$row['address'].'" />
					</div>
					<div class="form-group">
						<label>Username: </label>
						<input name="txt_edit_uname" id="txt_edit_uname" class="form-control input-sm" type="text" value="'.$row['username'].'" />
					</div>
					<div class="form-group">
						<label>Password: </label>
						<input name="txt_edit_pass" id="txt_edit_pass" class="form-control input-sm" type="text" value="'.$row['password'].'" />
					</div>
					
				</div>
			</div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_update" value="Edit"/>
		</div>
    </div>		
	</div>	

</form>
  </div>
  
  

';?>

<!-- ========= teacher edit function =========== -->
<?php 
if(isset($_POST['btn_update'])){
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
		$path = 'uploads/'; // upload directory
		if(!empty($_POST['name']) || !empty($_FILES['image']))
		{
				$img = $_FILES["image"]["name"]; //stores the original filename from the client
				$tmp = $_FILES["image"]["tmp_name"]; //stores the name of the designated temporary file
				$errorimg = $_FILES["image"]["error"]; //stores any error code resulting from the transfer
				if($errorimg > 0){
						$txt_id = $_POST['hidden_id'];
						$txt_edit_fname = $_POST['txt_edit_fname'];
						$txt_edit_mname = $_POST['txt_edit_mname'];
						$txt_edit_lname = $_POST['txt_edit_lname'];
						$txt_edit_contact = $_POST['txt_edit_contact'];
						$txt_edit_addr = $_POST['txt_edit_addr'];
						$txt_edit_uname = $_POST['txt_edit_uname'];
						$txt_edit_pass = $_POST['txt_edit_pass'];

						$query = mysqli_query($con,"UPDATE tblteacher SET  fname = '".$txt_edit_fname."', mname = '".$txt_edit_mname."', lname = '".$txt_edit_lname."', contact = '".$txt_edit_contact."', address = '".$txt_edit_addr."', username = '".$txt_edit_uname."', password = '".$txt_edit_pass."'  where id = '".$txt_id."' ");

						if($query == true){
							$_SESSION['edit'] = 1;
						  
									$message = "Selected record has been updated!";
									echo "<script type='text/javascript'>
									
									alert('$message');
									</script>";
									
									echo '<script type="text/javascript">
									location.replace("teacher.php");
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
						$txt_id = $_POST['hidden_id'];
						$txt_edit_fname = $_POST['txt_edit_fname'];
						$txt_edit_mname = $_POST['txt_edit_mname'];
						$txt_edit_lname = $_POST['txt_edit_lname'];
						$txt_edit_contact = $_POST['txt_edit_contact'];
						$txt_edit_addr = $_POST['txt_edit_addr'];
						$txt_edit_uname = $_POST['txt_edit_uname'];
						$txt_edit_pass = $_POST['txt_edit_pass'];

						$query2 = mysqli_query($con,"UPDATE tblteacher SET images = '".$path."', fname = '".$txt_edit_fname."', mname = '".$txt_edit_mname."', lname = '".$txt_edit_lname."', contact = '".$txt_edit_contact."', address = '".$txt_edit_addr."', username = '".$txt_edit_uname."', password = '".$txt_edit_pass."'  where id = '".$txt_id."' ");

						if($query2 == true){
							$_SESSION['edit'] = 1;
						  
									$message = "Selected record has been updated!";
									echo "<script type='text/javascript'>
									
									alert('$message');
									</script>";
									
									echo '<script type="text/javascript">
									location.replace("teacher.php");
									</script>';
						}

						
					
					}
			} 
			else 
			{
		    $txt_id = $_POST['hidden_id'];
						$txt_edit_fname = $_POST['txt_edit_fname'];
						$txt_edit_mname = $_POST['txt_edit_mname'];
						$txt_edit_lname = $_POST['txt_edit_lname'];
						$txt_edit_contact = $_POST['txt_edit_contact'];
						$txt_edit_addr = $_POST['txt_edit_addr'];
						$txt_edit_uname = $_POST['txt_edit_uname'];
						$txt_edit_pass = $_POST['txt_edit_pass'];

						$query = mysqli_query($con,"UPDATE tblteacher SET fname = '".$txt_edit_fname."', mname = '".$txt_edit_mname."', lname = '".$txt_edit_lname."', contact = '".$txt_edit_contact."', address = '".$txt_edit_addr."', username = '".$txt_edit_uname."', password = '".$txt_edit_pass."'  where id = '".$txt_id."' ");

						if($query == true){
							$_SESSION['edit'] = 1;
						  
									$message = "Selected record has been updated!";
									echo "<script type='text/javascript'>
									
									alert('$message');
									</script>";
									
									echo '<script type="text/javascript">
									location.replace("teacher.php");
									</script>';
						}

			
			
			}
			
		}
}
?>
