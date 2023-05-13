<?php echo '
<div id="deleteModal'.$row['id'].'" class="modal fade">
<form method="post" >
  <div class="modal-dialog modal-sm" style="width:400px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(255, 35, 18);color:white;">
			<h4 class="modal-title">Confirm Delete</h4>
            <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
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
			  <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="No"/>
			<input type="submit" class="btn btn-primary btn-m" name="btn_delete" value="Yes"/>
        </div>
	</div>
   </div>
</form>
  </div>
  

';?>

<!-- ========= delete function =========== -->
<?php
	if(isset($_POST['btn_delete']))
	{
	    $txt_id = $_POST['hidden_id'];
	    //deleting quiz and its items
	    $query = mysqli_query($con,"Delete from tblsavedquiz where id = '$txt_id' ");
		$query2 = mysqli_query($con,"Delete from tblquiz where quizsaved_id = '$txt_id' ");

	    if($query == true and $query2 == true){
	       
					$message = "Selected record has been deleted!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacher_manage_quizOption.php");
					</script>';
	    }

		if(mysqli_error($con)){
			
          $message = "Error!System not responding. Please try again.";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacher_manage_quizOption.php");
					</script>';
		}
	}
?>
