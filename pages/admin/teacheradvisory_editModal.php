
<!-- ========= TEACHER ADVISORY EDIT MODAL ======== -->
<?php echo '<div id="editModal'.$row['taid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(0, 128, 24);color:white;">
			<h4 class="modal-title">Edit Teacher Advisory</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['taid'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Teacher:</label>
                    <select name="ddl_edit_teacher" id="ddl_edit_teacher" data-style="btn-primary" class="form-control input-sm">
                        <option value="'.$row['tid'].'" selected>'.$row['tname'].'</option>';
                        $q = mysqli_query($con,"SELECT * from tblteacher where id not in ('".$row['tid']."') ORDER BY lname ASC");
                        while($row2=mysqli_fetch_array($q)){
                            echo '<option value="'.$row2['id'].'">'.$row2['fname'].', '.$row2['lname'].' '.$row2['mname'].'</option>';
                        }
                echo '</select>
                </div>
                <div class="form-group">
                    <label>Class:</label>
                    <select name="ddl_edit_class" id="ddl_edit_class" data-style="btn-primary" class="form-control input-sm">
                        <option value="'.$row['cid'].'" selected>'.$row['classname'].'</option>';
                        $q = mysqli_query($con,"SELECT * from tblclass where class_id not in ('".$row['cid']."') ORDER BY classname ASC");
                        while($row1=mysqli_fetch_array($q)){
                            echo '<option value="'.$row1['class_id'].'">'.$row1['classname'].'</option>';
                        }
                echo '</select>
                </div>
                <div class="form-group">
                    <label>Subject:</label>
                    <select name="ddl_edit_subj" id="ddl_edit_subj" data-style="btn-primary" class="form-control input-sm">
                        <option value="'.$row['sbid'].'" selected>'.$row['subjectname'].' - '.$row['Description'].'</option>';
                        $q = mysqli_query($con,"SELECT * from tblsubjects where s_id not in ('".$row['sbid']."') ORDER BY subjectname ASC");
                        while($row3=mysqli_fetch_array($q)){
                            echo '<option value="'.$row3['s_id'].'">'.$row3['subjectname'].' - '.$row3['Description'].'</option>';
                        }
                echo '</select>
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

<!-- ========= teacher advisory edit function ======== -->

<?php
	if(isset($_POST['btn_save']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $ddl_edit_teacher = $_POST['ddl_edit_teacher'];
	    $ddl_edit_class = $_POST['ddl_edit_class'];
	    $ddl_edit_subj = $_POST['ddl_edit_subj'];

	    $query = mysqli_query($con,"UPDATE tblteacheradvisory SET teacherid = '".$ddl_edit_teacher."',classid = '".$ddl_edit_class."',subjectid = '".$ddl_edit_subj."' where teachad_id = '".$txt_id."' ");

	    if($query == true){
	        $_SESSION['edit'] = 1;
	        $message = "Selected record updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacheradvisory.php");
					</script>';
	    }

		if(mysqli_error($con)){
			$_SESSION['duplicate'] = 1;
           $message = "Selected record updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacheradvisory.php");
					</script>';
		}
	}
?>