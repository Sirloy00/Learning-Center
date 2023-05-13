<?php echo '

  
<div id="feedbackdeleteModal'.$row['id'].'" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(255, 35, 18);color:white;">
		    <h4 class="modal-title">Confirm Delete</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
           
        </div>
        <div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
					<p>Are you sure you want to delete this record?</p>
				</div>
			</div>
        </div>
        <div class="modal-footer">
			<input type="submit" class="btn btn-primary btn-sm" name="btn_deletefeedback" value="Yes"/>
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="No"/>
        </div>
	</div>
   </div>
</form>
  </div>
  

';?>

<?php
	if(isset($_POST['btn_deletefeedback']))
	{
	    $txt_id = $_POST['hidden_id'];
	   
	    $query = mysqli_query($con,"Delete from tblfeedback where id = '".$txt_id."' ");

	    if($query == true){
	       
					$message = "Selected feedback has been deleted successfully";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("admin_feedback.php");
					</script>';
	    }

		if(mysqli_error($con)){
			
          $message = "Error! System not responding Please try again.";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("admin_feedback.php");
					</script>';
		}
	}
?>
