<!-- ========================= YEARLEVEL MODAL ======================= -->
<div id="addYLModal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
	     	<h4 class="modal-title">Add Year Level</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>    
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Year Level:</label>
		
                        <select required = "true"  name="ddl_yl" class="form-control input-sm">
							<option value="" selected disabled>-- Select Year Level --</option>
                	    	<option>Grade 7 </option>
                            <option>Grade 8 </option>
                            <option>Grade 9 </option>
                            <option>Grade 10 </option>
							<option>Grade 11 </option>
                            <option>Grade 12 </option>
							<option>1st College</option>
                            <option>2nd College</option>
                            <option>3rd College</option>
                            <option>4th College</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Class Name:</label>
                        <input required name="txt_desc" id="txt_desc" class="form-control input-sm" type="text" placeholder="e.g: BSCS4-A or St.Jude" />
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add" name="btn_add_yl" value="Add Year Level"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- year level add function -->
<?php
	if(isset($_POST['btn_add_yl'])){
		$ddl_yl = $_POST['ddl_yl'];
		$txt_desc = $_POST['txt_desc'];

		$chk = mysqli_query($con,"SELECT * from tblyearlevel where yearlevel = '$ddl_yl' and description = '$txt_desc' ");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO tblyearlevel (yearlevel,description) values ('".$ddl_yl."','".$txt_desc."')"); 
			if($query == true){
	           $_SESSION['added'] = 1;
	           $message = "New year level record added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("yearlevel.php");
					</script>';
			}
		}
		else{
		   $_SESSION['duplicate'] = 1;
           $message = "New record is existed!. Please check your record.";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("yearlevel.php");
					</script>';
		}
	}
?>

