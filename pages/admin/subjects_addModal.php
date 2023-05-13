<!-- ========================= SUBJECT MODAL ======================= -->
<div id="addSubjModal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(5, 69, 110);color:white;">
			 <h4 class="modal-title">Add Subject</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Subject Name:</label>
                        <input required name="txt_subj" id="txt_desc" class="form-control input-sm" type="text" placeholder="Description"r/>
                    </div>
                    <div class="form-group">
                        <label>Year Level:</label>
                        <select required="true"name="ddl_yl" id="ddl_yl" data-style="btn-primary" class="form-control input-sm" required>
                            <option value="" selected disabled>-- Select Year Level --</option>
                	    	<option>Grade 7 </option>
                            <option>Grade 8 </option>
                            <option>Grade 9 </option>
                            <option>Grade 10 </option>
                        </select>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add" name="btn_add_subj" value="Add Subject"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========  ADD SUBJECT  ============== -->
<?php
	if(isset($_POST['btn_add_subj'])){
		$txt_desc = $_POST['txt_subj'];
		$ddl_yl = $_POST['ddl_yl'];

		$chk = mysqli_query($con,"SELECT * from tblsubjects where subjectname = '".$txt_sname."' and yearlevel = '$ddl_yl'");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO tblsubjects (subjectname,yearlevel) values ('".$txt_sname."','".$ddl_yl."')"); 
			if($query == true){
	            $_SESSION['added'] = 1;
	           $message = "New subject record added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("subjects.php");
					</script>';
			}
		}
		else{
			$_SESSION['duplicate'] = 1;
            $message = "New subject record added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("subjects.php");
					</script>';
		}
	}
?>