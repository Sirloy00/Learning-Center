<!-- ========= SCHOOLYEAR MODAL ======== -->
<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(0, 128, 24);color:white;">
			<h4 class="modal-title">Edit School Year</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>School Year: </label>
                    <input name="txt_edit_sy" id="txt_edit_sy" class="form-control input-sm" type="text" value="'.$row['schoolyear'].'" />
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>

<!-- ========= SCHOOL YEAR EDIT FUNCTION=========== -->
<?php
	if(isset($_POST['btn_save']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $txt_edit_sy = $_POST['txt_edit_sy'];

	    $query = mysqli_query($con,"UPDATE tblschoolyear SET schoolyear = '".$txt_edit_sy."' where id = '".$txt_id."' ");

	    if($query == true){
	        $_SESSION['edit'] = 1;
	         $message = " selected record updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("schoolyear.php");
					</script>';
	    }

		if(mysqli_error($con)){
			$_SESSION['duplicate'] = 1;
           $_SESSION['edit'] = 1;
	         $message = " selected record updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("schoolyear.php");
					</script>';
		}
	}
?>
