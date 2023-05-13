


<!-- ========================= STUDENT MODAL ======================= -->
<div id="addStudModal" class="modal fade">
<form method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(5, 69, 110);color:white;">
		    <h4 class="modal-title">Add Student</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
           
        </div>
        <div class="modal-body" style="height:400px;width:298px;border:solid 1px blue;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">
            
            <div class="row">
                <div class="col-md-12">
				    <div class="form-group">
                        <label>Image :</label>
                        <input id="uploadImage" type="file" name="image" required class="form-control input-sm" style="padding-bottom: 30px;" />
                    </div>
                    <div class="form-group">
                        <label>First Name:</label>
                        <input required name="txt_fname" id="txt_fname" class="form-control input-sm" type="text" placeholder="First Name" />
                    </div>
                    <div class="form-group">
                        <label>Middle Name:</label>
                        <input required name="txt_mname" id="txt_mname" class="form-control input-sm" type="text" placeholder="Middle Name" />
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input required name="txt_lname" id="txt_lname" class="form-control input-sm" type="text" placeholder="Last Name" />
                    </div>
                    <div class="form-group">
                        <label>Contact:</label>
                        <input required name="txt_contact" id="txt_contact" class="form-control input-sm" type="number" placeholder="Contact" />
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input required name="txt_addr" id="txt_addr" class="form-control input-sm" type="text" placeholder="Address" />
                    </div>
                    <div class="form-group">
                        <label>Username:</label>
                        <input required name="txt_uname" id="txt_uname" class="form-control input-sm" type="text" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input required name="txt_pass" id="txt_pass" class="form-control input-sm" type="password" placeholder="Password" />
                    </div>
					 <div class="form-group">
                        <label>Student Number: </label>
                        <input required name="txt_studentnumber" id="txt_studentnumber" class="form-control input-sm" type="number" placeholder="Student Number" />
                    </div>
					 <div class="form-group">
                        <label>OR Number: </label>
                        <input required name="txt_ornum" id="txt_ornum" class="form-control input-sm" type="number" placeholder="OR Number" />
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add_stud" name="btn_add_stud" value="Save"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========  ADD STUDENT function ============== -->
<?php
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
$path = 'uploads/'; // upload directory
	
	if(isset($_POST['btn_add_stud']))
	{
		
			if(!empty($_POST['fname'])||  !empty($_FILES['image']))
			{		
				$img = $_FILES['image']['name']; //stores the original filename from the client
				$tmp = $_FILES["image"]["tmp_name"]; //stores the name of the designated temporary file
				$errorimg = $_FILES["image"]["error"]; //stores any error code resulting from the transfer
					// get uploaded file's extension
				$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
				 
				// can upload same image using rand function
				$final_image = rand(1000,1000000).$img;
			 
				// check's valid format
				if(in_array($ext, $valid_extensions)) 
				{ 
				$path = $path.strtolower($final_image); 
				
					if(move_uploaded_file($tmp,$path)) 
					{
					
						$txt_fname = $_POST['txt_fname'];
						$txt_mname = $_POST['txt_mname'];
						$txt_lname = $_POST['txt_lname'];
						$txt_contact = $_POST['txt_contact'];
						$txt_addr = $_POST['txt_addr'];
						$txt_uname = $_POST['txt_uname'];
						$txt_pass = $_POST['txt_pass'];
						$txt_studentnumber = $_POST['txt_studentnumber'];
						$txt_ornum = $_POST['txt_ornum'];
						
						$chk = mysqli_query($con,"SELECT * from tblstudent where lname = '".$txt_lname."' and fname = '".$txt_fname."' and mname = '".$txt_mname."' ");
						$ct = mysqli_num_rows($chk);

						if($ct == 0)
						{
							$query = mysqli_query($con,"INSERT INTO tblstudent (images,lname,fname,mname,contact,address,username,password,student_number,or_number) values ('".$path."','".$txt_lname."','".$txt_fname."','".$txt_mname."','".$txt_contact."','".$txt_addr."','".$txt_uname."','".$txt_pass."','".$txt_studentnumber."','".$txt_ornum."')"); 
							if($query == true){
								$message = "New student added successful!";
									echo "<script type='text/javascript'>
									
									alert('$message');
									</script>";
									
									echo '<script type="text/javascript">
									location.replace("student.php");
									</script>';
							}
						}
						else
						{
							$message = "Duplicate Entry";
									echo "<script type='text/javascript'>
									
									alert('$message');
									</script>";
									
									echo '<script type="text/javascript">
									location.replace("student.php");
									</script>';
						}
					}
			
			}
			else
			{
				 $message = "Error! Please select valid image";
							echo "<script type='text/javascript'>
							
							alert('$message');
							</script>";
							
							echo '<script type="text/javascript">
							location.replace("student.php");
							</script>';
			}
				
			}	
	}
?>



