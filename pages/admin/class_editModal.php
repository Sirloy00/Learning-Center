<!-- ========= CLASS MODAL ======== -->
<?php echo '<div id="editModal'.$row['cid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(0, 128, 24);color:white;">
			<h4 class="modal-title">Edit Class</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['cid'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Class Name: </label>
                    <input name="txt_edit_class" id="txt_edit_class" class="form-control input-sm" type="text" value="'.$row['classname'].'" />
                </div>
                <div class="form-group">
                    <label>School Year:</label>
                    <select name="ddl_edit_sy" id="ddl_edit_sy" data-style="btn-primary" class="form-control input-sm">
                        <option value="'.$row['sid'].'" selected>'.$row['schoolyear'].'</option>';
                        $q = mysqli_query($con,"SELECT * from tblschoolyear where schoolyear not in ('".$row['schoolyear']."') ORDER BY schoolyear DESC");
                        while($row1=mysqli_fetch_array($q)){
                            echo '<option value="'.$row1['id'].'">'.$row1['schoolyear'].'</option>';
                        }
                echo '</select>
                </div>
                <div class="form-group">(
                  <label>Year Level:</label>
                        <select name="txt_edit_yl" class="form-control input-sm">
						    <option value="'.$row['yearlevel'].'" selected>'.$row['yearlevel'].'</option>;
                	    	<option>Grade 7</option>
                            <option>Grade 8</option>
                            <option>Grade 9</option>
                            <option>Grade 10</option>
							<option>Grade 11</option>
                            <option>Grade 12</option>
                        </select>
                </div>
				<div class="form-group">
                        <label>Department:</label>
                        <select name="txt_edit_dept" class="form-control input-sm">
						    <option value="'.$row['department'].'" selected>'.$row['department'].'</option>;
                            <option>Junior</option>
                            <option>Senior</option>
                        </select>
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

<!-- classs edit function -->
<?php
	if(isset($_POST['btn_save']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $txt_edit_class = $_POST['txt_edit_class'];
	    $ddl_edit_sy = $_POST['ddl_edit_sy'];
	    $ddl_edit_yl = $_POST['txt_edit_yl'];
		$txt_edit_dept = $_POST['txt_edit_dept'];

	    $query = mysqli_query($con,"UPDATE tblclass SET classname = '".$txt_edit_class."',schoolyearid = '".$ddl_edit_sy."', yearlevel = '".$ddl_edit_yl."', department = '".$txt_edit_dept."' where class_id = '".$txt_id."' ");

	    if($query == true){
	        $_SESSION['edit'] = 1;
	        $message = "Selected record updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("class.php");
					</script>';
	    }

		if(mysqli_error($con)){
			$_SESSION['duplicate'] = 1;
            $message = "Selected record updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("class.php");
					</script>';
		}
	}
?>