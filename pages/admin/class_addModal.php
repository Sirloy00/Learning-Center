<!-- ========================= CLASS MODAL ======================= -->
<div id="addClassModal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
			<h4 class="modal-title">Add Class</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Class Name:</label>
                        <input required name="txt_class" id="txt_class" class="form-control input-sm" type="text" placeholder="Class Name" />
                    </div>
                    <div class="form-group">
                        <label>School Year:</label>
                        <select required="true" name="ddl_sy" id="ddl_sy" data-style="btn-primary" class="form-control input-sm">
                            <option value="" selected disabled>-- Select School Year --</option>
                            <?php
                                $q = mysqli_query($con,"SELECT * from tblschoolyear ORDER BY schoolyear DESC");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['id'].'">'.$row['schoolyear'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                         <label>Year Level:</label>
                        <select required="true" name="ddl_yl" id="ddl_yl" data-style="btn-primary" class="form-control input-sm">
                           <option value="" selected disabled>-- Select Year Level --</option>
                	    	<option>Grade 7 </option>
                            <option>Grade 8 </option>
                            <option>Grade 9 </option>
                            <option>Grade 10 </option>
							<option>Grade 11 </option>
                            <option>Grade 12 </option>
                        </select>
                    </div>
					<div class="form-group">
                        <label>Department:</label>
                        <select required="true" name="txt_dept" class="form-control input-sm">
							<option value=""selected disabled>-- Select Department --</option>
                            <option>Junior</option>
                            <option>Senior</option>
                        </select>
                </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add_class" name="btn_add_class" value="Save"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========  ADD CLASS FUNCTION  ============== -->
<?php
	if(isset($_POST['btn_add_class'])){
		$txt_class = $_POST['txt_class'];
		$ddl_sy = $_POST['ddl_sy'];
		$ddl_yl = $_POST['ddl_yl'];
		$txt_dept = $_POST['txt_dept'];

		$chk = mysqli_query($con,"SELECT * from tblclass where classname = '".$txt_class."' and schoolyearid = '$ddl_sy' and yearlevel = '$ddl_yl' and department = '$txt_dept' ");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO tblclass (classname,schoolyearid,yearlevel,department) values ('".$txt_class."','".$ddl_sy."','".$ddl_yl."','".$txt_dept."')"); 
			if($query == true){
	            $_SESSION['added'] = 1;
	            $message = "New record has been added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("class.php");
					</script>';
			}
		}
		else{
			$_SESSION['duplicate'] = 1;
            $message = "New record has been added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("class.php");
					</script>';
		}
	}
?>
