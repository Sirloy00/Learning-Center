
<!-- ========================= TEACHER ADVISORY MODAL ======================= -->
<div id="addteachAdModal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(5, 69, 110);color:white;">
			<h4 class="modal-title">Add Teacher Advisory</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Teacher:</label>
                        <select required="true" name="ddl_teacher" id="ddl_teacher" data-style="btn-primary" class="form-control input-sm">
                            <option  value= "" selected disabled>-- Select Teacher --</option>
                            <?php
                                $q = mysqli_query($con,"SELECT * from tblteacher ORDER BY lname ASC");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['id'].'">'.$row['lname'].', '.$row['fname'].' '.$row['mname'].'</option>';
                                }
                            ?>
                        </select>
						
                    </div>
                    <div class="form-group">
                        <label>Class:</label>
                        <select required="true" name="ddl_class" id="ddl_class" data-style="btn-primary" class="form-control input-sm">
                            <option value="" selected disabled>-- Select Class --</option>
                            <?php
                                $q = mysqli_query($con,"SELECT * from tblclass ORDER BY classname ASC");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['class_id'].'">'.$row['classname'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Subject:</label>
                        <select required="true" name="ddl_subj" id="ddl_subj" data-style="btn-primary" class="form-control input-sm">
                            <option  value="" selected disabled>-- Select Subject --</option>
                            <?php
                                $q = mysqli_query($con,"SELECT * from tblsubjects ORDER BY subjectname ASC");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['s_id'].'">'.$row['subjectname'].' - '.$row['Description'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add_adv" name="btn_add_adv" value="Add Advisory"/>
        </div>
    </div>
  </div>
  </form>
</div>





<!-- =========  ADD TEACHER ADVISORY  ============== -->
<?php
	if(isset($_POST['btn_add_adv'])){
		$ddl_teacher = $_POST['ddl_teacher'];
		$ddl_class = $_POST['ddl_class'];
		$ddl_subj = $_POST['ddl_subj'];

		$chk = mysqli_query($con,"SELECT * from tblteacheradvisory where teacherid = '$ddl_teacher' and classid = '$ddl_class' and subjectid = '$ddl_subj' ");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO tblteacheradvisory (teacherid,classid,subjectid) values ('".$ddl_teacher."','".$ddl_class."','".$ddl_subj."')"); 
			if($query == true){
	            $_SESSION['added'] = 1;
	             $message = "New record added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacheradvisory.php");
					</script>';
			}
		}
		else{
			$_SESSION['duplicate'] = 1;
            $message = "New record added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacheradvisory.php");
					</script>';
		}
	}
?>