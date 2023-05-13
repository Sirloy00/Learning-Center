<!-- ========= YEARLEVEL MODAL ======== -->
<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(0, 128, 24);color:white;">
			<h4 class="modal-title">Edit Year Level</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
				<div class="form-group">
                        <label>Year Level:</label>
                        <select name="txt_edit_yl" class="form-control input-sm">
                	    	<option>Grade 7</option>
                            <option>Grade 8</option>
                            <option>Grade 9</option>
                            <option>Grade 10</option>
							<option>Grade 11</option>
                            <option>Grade 12</option>
                        </select>
                </div>
               
                <div class="form-group">
                    <label>Section: </label>
                    <input name="txt_edit_desc" id="txt_edit_desc" class="form-control input-sm" type="text" value="'.$row['description'].'" />
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

<!-- ========= EDIT SCHOOLYEAR function =========== -->
<?php
	if(isset($_POST['btn_save']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $txt_edit_yl = $_POST['txt_edit_yl'];
	    $txt_edit_desc = $_POST['txt_edit_desc'];

	    $query = mysqli_query($con,"UPDATE tblyearlevel SET yearlevel = '".$txt_edit_yl."', description = '".$txt_edit_desc."'  where id = '".$txt_id."' ");

	    if($query == true){
	        $_SESSION['edit'] = 1;
	        $message = "Selected record has been updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("yearlevel.php");
					</script>';
	    }

		if(mysqli_error($con)){
			$_SESSION['duplicate'] = 1;
             $message = "Selected record has been updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("yearlevel.php");
					</script>';
		}
	}
?>