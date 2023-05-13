<?php echo '

  
<div id="deleteModal'.$row['taid'].'" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(255, 35, 18);color:white;">
		    <h4 class="modal-title">Confirm Delete</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
           
        </div>
        <div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<input type="hidden" value="'.$row['taid'].'" name="hidden_id" id="hidden_id"/>
					<p>Are you sure you want to delete this record?</p>
				</div>
			</div>
        </div>
        <div class="modal-footer">
			<input type="submit" class="btn btn-primary btn-sm" name="btn_delete" value="Yes"/>
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="No"/>
        </div>
	</div>
   </div>
</form>
  </div>
  

';?>

<!-- =========student EDIT function =========== -->
<?php
	if(isset($_POST['btn_delete']))
	{
	    $txt_id = $_POST['hidden_id'];
	   
	    $query = mysqli_query($con,"Delete from tblteacheradvisory where teachad_id = '".$txt_id."' ");

	    if($query == true){
	       
					$message = "Selected record has been deleted!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacheradvisory.php");
					</script>';
	    }

		if(mysqli_error($con)){
			
          $message = "Error!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacheradvisory.php");
					</script>';
		}
	}
?>
