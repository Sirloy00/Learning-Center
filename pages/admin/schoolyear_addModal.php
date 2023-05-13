<!-- ========================= SCHOOLYEAR MODAL ======================= -->
<div id="addSYModal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(5, 69, 110);color:white;">
			<h4 class="modal-title">Add School Year</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
           
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>School Year:</label>
                        <input required name="txt_sy" id="txt_sy" class="form-control input-sm" type="text" placeholder="eg. 2016-2017" />
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add" name="btn_add_sy" value="Add School Year"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========  ADD SCHOOLYEAR FUNCTION ============== -->
<?php
	if(isset($_POST['btn_add_sy'])){
		$txt_sy = $_POST['txt_sy'];

		$query = mysqli_query($con,"INSERT INTO tblschoolyear (schoolyear) values ('".$txt_sy."')"); 
		if($query == true){
            $_SESSION['added'] = 1;
			 $message = "New school year added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("schoolyear.php");
					</script>';
		}
		if(mysqli_error($con)){
			$_SESSION['duplicate'] = 1;
            $message = "New school year added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("schoolyear.php");
					</script>';
		}
	}
?>