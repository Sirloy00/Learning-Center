<!-- ========================= STUDENT CLASS MODAL ======================= -->
<div id="addStudClassModal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
			<h4 class="modal-title">Add Student</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"  style="color:white">&times;</button>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Student:</label>
                        <select required="true" name="ddl_stud" id="ddl_stud" data-style="btn-primary" class="form-control input-sm">
                            <option value="" selected disabled>-- Select Student --</option>
                            <?php
                                $q = mysqli_query($con,"SELECT * from tblstudent order by lname asc");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['id'].'"><img src="'.$row['stimg'].'"style="height:70px; width:90px;border:2px solid skyblue;"/>  '.$row['lname'].', '.$row['fname'].' '.$row['mname'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                <div class="form-group">
                        <label>Subject :</label>
                        <select required name="ddl_subj" id="ddl_subject" data-style="btn-primary" class="form-control input-sm">
                            <option  value="" selected disabled>-- Select Subject --</option>
                            
							
							<?php
							 $q =mysqli_query($con, "select *,c.class_id as cid, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta 
							 left join tblteacher t on ta.teacherid = t.id 
							 left join tblclass c on ta.classid = c.class_id 
							 left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'");
                               
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['s_id'].'">'.$row['subjectname'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
					<div class="form-group">
                        <label>Class :</label>
                        <select required name="ddl_class" id="ddl_class" data-style="btn-primary" class="form-control input-sm">
                            <option  value="" selected disabled>-- Select Class --</option>
							
							<?php
							 $q =mysqli_query($con, "select *,c.class_id as cid,c.classname as cname, t.id as tid, sb.s_id as sbid, ta.teachad_id as taid,CONCAT(t.lname, ', ', t.fname, ' ',t.mname) as tname from tblteacheradvisory ta left join tblteacher t on ta.teacherid = t.id 
							 left join tblclass c on ta.classid = c.class_id 
							 left join tblsubjects sb on ta.subjectid = sb.s_id where ta.teacherid = '".$_SESSION['id']."'");
                               
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['class_id'].'">'.$row['cname'].'</option>';
                                }
                            ?>
                        </select>
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
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add_studclass" name="btn_add_studclass" value="Save"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========  ADD STUDENT CLASS FUNCTION ============== -->
<?php
	if(isset($_POST['btn_add_studclass']))
	{
		$ddl_class = $_POST['ddl_class'];
		$ddl_stud = $_POST['ddl_stud'];
		$ddl_subj = $_POST['ddl_subj'];
		$ddl_sy = $_POST['ddl_sy'];
		$teachernum = $_SESSION['id'];

		$chk = mysqli_query($con,"SELECT * from tblstudentclass where classid = '$ddl_class' and sy_id = '$ddl_sy' and studentid = '$ddl_stud' and subjectid = '$ddl_subj' and teacherid = '$teachernum' ");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO tblstudentclass (classid,sy_id,studentid,subjectid,teacherid) values ('".$ddl_class."','".$ddl_sy."','".$ddl_stud."','".$ddl_subj."','".$teachernum."')"); 
			if($query == true){
	            $_SESSION['added'] = 1;
	            $message = "New record added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teachers_student.php");
					</script>';
			}
		}
		else
		{
			$_SESSION['duplicate'] = 1;
             $message = "New record is existed!.Please check your record.";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teachers_student.php");
					</script>';
		}
	}
	
?>