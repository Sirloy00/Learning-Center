
<!-- =========edit newsfeed MODAL ======== -->


<?php
 echo '
<div id="editModal'.$row['newsfeed_id'].'" class="modal fade">
<form method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(0, 128, 24);color:white;">
		    <h4 class="modal-title">Edit Post</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
           
        </div>
        <div class="modal-body">
			<div class="row">
				<div class="col-md-12">
				    
				    <label>Image : </label>
					
					<input type="hidden" value="'.$row['newsfeed_id'].'" name="hidden_id" id="hidden_id"/>
					
					<div class="form-group">
					    <center><img  name = "image" src="'.$row['images'].'" style="height: 100px; max-width:100%"; /></center>
					</div>
					<div class="form-group">
						<input id="uploadImage" type="file"  name="image" />
					</div>
					<div class="form-group">
						<label>Subject :  </label>
						<input name="subject" id="txt_edit_subject" class="form-control input-sm" type="text" value="'.$row['subject'].'" />
					</div>
					<div class="form-group">
						<label>Message : </label>
						<textarea name="message" id="txt_edit_message" class="form-control input-sm" type="text" style="height: 100px;">'.$row['message'].'</textarea>
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

<?php
if(isset($_POST['btn_update'])){
		
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
		$path = 'uploads/'; // upload directory
		if(!empty($_POST['name']) || $_FILES['image'])
		{
			$img = $_FILES["image"]["name"]; //stores the original filename from the client
			$tmp = $_FILES["image"]["tmp_name"]; //stores the name of the designated temporary file
			$errorimg = $_FILES["image"]["error"]; //stores any error code resulting from the transfer
			if($errorimg > 0){
			$txt_id = $_POST['hidden_id'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$sendername =  $_SESSION['user'];
			$datesent = date("Y/m/d h:i:sa");
			 
			
			 $query = mysqli_query($con,"UPDATE tblnewsfeed SET subject ='$subject', message  ='$message' WHERE newsfeed_id = '$txt_id'");
			
				 if($query == true){
			   
					  $message = "Selected post updated successfully!";
								echo "<script type='text/javascript'>
								
								alert('$message');
								</script>";
								
								echo '<script type="text/javascript">
								location.replace("news_feed.php");
								</script>';
				}

				if(mysqli_error($con)){
					 $message = "Error!";
								echo "<script type='text/javascript'>
								
								alert('$message');
								</script>";
		  
							
							echo '<script type="text/javascript">
							location.replace("news_feed.php");
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
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$sendername =  $_SESSION['user'];
			$datesent = date("Y/m/d h:i:sa");
			 
			
			//insert form data in the database
			 $query = mysqli_query($con,"UPDATE tblnewsfeed SET subject ='$subject', message='$message', images ='$path' WHERE newsfeed_id = '$txt_id'");
			
			 if($query == true){
	       
				  $message = "Selected post updated successfully!";
							echo "<script type='text/javascript'>
							
							alert('$message');
							</script>";
							
							echo '<script type="text/javascript">
							location.replace("news_feed.php");
							</script>';
			}

			if(mysqli_error($con)){
				
			  $message = "Error!";
						echo "<script type='text/javascript'>
						
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("news_feed.php");
						</script>';
			}
			
			 
			//echo $insert?'ok':'err';
			}
			} 
			else 
			{
		     $message = "Invalid Input";
							echo "<script type='text/javascript'>
							
							alert('$message');
							</script>";
							
							echo '<script type="text/javascript">
							location.replace("news_feed.php");
							</script>';

			
			
			}
		}
	
}
?>

