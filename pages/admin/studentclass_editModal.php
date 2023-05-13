<!-- ========= STUDENT CLASS MODAL ======== -->
<?php echo '<div id="editModal'.$row['sid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(0, 128, 24);color:white;">
			 <h4 class="modal-title">Edit Student Class</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['sid'].'" name="hidden_id" id="hidden_id"/>
				<div class="form-group">
                    <label>Student:</label>
                    <select name="ddl_edit_stud" id="ddl_edit_stud" data-style="btn-primary" class="form-control input-sm">
                        <option value="'.$row['stid'].'" selected>'.$row['sname'].'</option>';
                        $q = mysqli_query($con,"SELECT * from tblstudent where id not in ('".$row['sid']."')");
                        while($row2=mysqli_fetch_array($q)){
                            echo '<option value="'.$row2['id'].'">'.$row2['fname'].', '.$row2['lname'].' '.$row2['mname'].'</option>';
                        }
              echo'  </select>
                </div>
                <div class="form-group">
                    <label>Class:</label>
                    <select name="ddl_edit_class" id="ddl_edit_class" data-style="btn-primary" class="form-control input-sm">
                        <option value="'.$row['cid'].'" selected>'.$row['classname'].'</option>';
                         $q =mysqli_query($con, "select *,c.class_id as cid,c.classname as cname, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id 
							 left join tblclass c on ta.classid = c.class_id 
							 left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'");
                        while($row1=mysqli_fetch_array($q)){
                            echo '<option value="'.$row1['class_id'].'">'.$row1['classname'].'</option>';
                        }
                echo'</select>
                </div>
                <div class="form-group">
                    <label>Subject:</label>
                    <select name="ddl_edit_subj" id="ddl_edit_subj" data-style="btn-primary" class="form-control input-sm">
                        <option value="'.$row['sbid'].'" selected>'.$row['subjectname'].'</option>';
                         $q =mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta 
							 left join tblteacher t on ta.teacherid = t.id 
							 left join tblclass c on ta.classid = c.class_id 
							 left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'");
                        while($row3=mysqli_fetch_array($q)){
                            echo '<option value="'.$row3['s_id'].'">'.$row3['subjectname'].'</option>';
                        }
                echo '</select>
                </div>
				<div class="form-group">
                    <label>School Year:</label>
                    <select required="true" name="ddl_edit_sy" id="ddl_edit_sy" data-style="btn-primary" class="form-control input-sm">
                        <option value="'.$row['sy_id'].'" selected disabled>'.$row['syname'].'</option>';
                            $q = mysqli_query($con,"SELECT * from tblschoolyear ORDER BY schoolyear DESC");
                            while($row4=mysqli_fetch_array($q)){
                                echo '<option value="'.$row4['id'].'">'.$row4['schoolyear'].'</option>';
                            }
                echo'</select>
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_savestudentclass" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';
?>

<!-- =========  STUDENT CLASS FUNCTION ============== -->

<?php
	if(isset($_POST['btn_savestudentclass']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $ddl_edit_stud = $_POST['ddl_edit_stud'];
		$ddl_edit_class = $_POST['ddl_edit_class'];
	    $ddl_edit_subj = $_POST['ddl_edit_subj'];
		$ddl_edit_sy = $_POST['ddl_edit_sy'];

	    $query = mysqli_query($con,"UPDATE tblstudentclass SET classid = '".$ddl_edit_class."', sy_id = '".$ddl_edit_sy."', studentid = '".$ddl_edit_stud."', subjectid = '".$ddl_edit_subj."' where studclass_id = '".$txt_id."' ");

	    if($query == true){
	        $message = "Selected record has been updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teachers_student.php");
					</script>';
	    }

		if(mysqli_error($con)){
			 $message = "Error! System not responding. Please try again.";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teachers_student.php");
					</script>';
		}
	}
?>