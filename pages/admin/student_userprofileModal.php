<!-- ========================= Edit User Profile Modal and Function ======================= -->
    <div id="userprofileModal"  class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	 <form method="POST" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Edit User Profile</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color:white;">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		   <div class="form-group">
			        <div class="form-group">
						<center><img src="<?php echo $_SESSION['student_images'];?>" style="height:135px;width:135px;border:solid 2px blue;"/><br/></center>
					</div>
					<div class="form-group">
						<center><a type="button" class="btn btn-primary btn-m" id="btn_changepic" name="btn_changepic"  data-toggle="modal" data-target="#student_change_profileModal">Change Profile Picture</a></center>
					</div>
					<div class="form-group">
						<label><strong>Name:</strong></label></br>
						<input title="You are not authorized to edit this field! Try to ask the administrator!" disabled required id="txt_name" name="txt_name" type="text" value="<?php echo $_SESSION['student_username'];?>" class="form-control input-m"/>
					</div>
					<div class="form-group">
						<label><strong>User Type:</strong></label></br>
						<input title="You are not authorized to edit this field! Try to ask the administrator!" disabled required id="txt_name" name="txt_name" type="text" value="Student" class="form-control input-m"/>
					</div>
					<div class="form-group">
						<label><strong>Username:</strong></label></br>
						<input required id="txt_username" name="txt_username" type="text" autofocus class="form-control input-m"/>
					</div>
					<div id="txt_password"class="form-group">
						<label><strong>Old Password:</strong></label></br>
						<input  required id="txt_oldpass" name="txt_oldpass" type="text" autofocus class="form-control input-m" />
					</div>
					<div class="form-group">
						<label><strong>New Password:</strong></label></br>
						<input required id="txt_password" name="txt_password"  type="password" class="form-control input-m"/>
					</div>
					<div class="form-group">
						<label><strong>Confirm Password:</strong></label></br>
						<input required id="txt_conpassword" name="txt_conpassword"  type="password" class="form-control input-m"/>
					</div>
		  </div>
         <div class="modal-footer">
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-m" id="btn_user_change" name="btn_user_change" value="Save"/>
        </div>
        </div>
      </div>
	  </form>
    </div>
<?php include"student_changeprofileModal.php";?>

<!-- =========  EDIT USER PROFILE FUNCTION  ============== -->
<?php
	if(isset($_POST['btn_user_change'])){
		  
		    $txt_username = $_POST['txt_username'];
			$txt_oldpass = $_POST['txt_oldpass'];
			$txt_password = $_POST['txt_password'];
			$txt_conpassword = $_POST['txt_conpassword'];
			$txt_id = $_SESSION['id'];
			
			if($txt_username == $_SESSION['usern'] && $txt_oldpass == $_SESSION['pass']){
				
			}
			//update username and password  function for teacher
			if($txt_password == $txt_conpassword){
				
				$userpassquery = mysqli_query($con,"Update tblstudent set password='$txt_password' where id = '$txt_id'"); 
				if($userpassquery == true){
					$message = "Username and password has been changed successfully!";
						echo "<script type='text/javascript'>
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("student_page.php");
						</script>';
				}
				else
				{
					$message = "Error! System not responding. Please try again.";
						echo "<script type='text/javascript'>
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("student_page.php");
						</script>';
				}
			}
			else
			{
				    $message = "Your password did not match!.Please try again.";
						echo "<script type='text/javascript'>
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("student_page.php");
						</script>';
			}
			
		
	}
?>



<!-- ========================= Edit Student User Profile Modal and Function ======================= -->
<div id="userprofileModal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:400px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(5, 69, 110);color:white;">
			<h4 class="modal-title">Edit User Profile</h4>
            <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body" style="height:400px;width:298px;border:solid 1px blue;overflow:scroll;overflow-x:hidden;overflow-y:scroll;" >
            <div class="row"> 
			    <div class="col-md-12">
				    <div class="form-group">
						<center><img style="padding:5px;"src="<?php echo $_SESSION['student_images'];?>"/></center>
					</div>
					<div class="dropdown-divider"></div>
					<div class="form-group">
						<center><a type="button" class="btn btn-primary btn-m" id="btn_changepic" name="btn_changepic"  data-toggle="modal" data-target="#student_change_profileModal">Change Profile Picture</a></center>
					</div>
					<div class="form-group">
						<label><strong>Name:</strong></label></br>
						<input title="You are not authorized to edit this field! Try to ask the administrator!" disabled required id="txt_name" name="txt_name" type="text" value="<?php echo $_SESSION['student_username'];?>" class="form-control input-m"/>
					</div>
					<div class="form-group">
						<label><strong>User Type:</strong></label></br>
						<input title="You are not authorized to edit this field! Try to ask the administrator!" disabled required id="txt_name" name="txt_name" type="text" value="Student" class="form-control input-m"/>
					</div>
					<div class="form-group">
						<label><strong>Username:</strong></label></br>
						<input required id="txt_username" name="txt_username" type="text" autofocus class="form-control input-m"/>
					</div>
					<div id="txt_password"class="form-group">
						<label><strong>Old Password:</strong></label></br>
						<input  required id="txt_oldpass" name="txt_oldpass" type="text" autofocus class="form-control input-m" />
					</div>
					<div class="form-group">
						<label><strong>New Password:</strong></label></br>
						<input required id="txt_password" name="txt_password"  type="password" class="form-control input-m"/>
					</div>
					<div class="form-group">
						<label><strong>Confirm Password:</strong></label></br>
						<input required id="txt_conpassword" name="txt_conpassword"  type="password" class="form-control input-m"/>
					</div>
				</div>
            </div>
		</div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-m" id="btn_user_change" name="btn_user_change" value="Save"/>
        </div>
    </div>
  </div>
  </form>
</div>
<?php include"student_changeprofileModal.php";?>

<!-- =========  EDIT STUDENT USER PROFILE FUNCTION  ============== -->
<?php
	if(isset($_POST['btn_user_change'])){
		  
		    $txt_username = $_POST['txt_username'];
			$txt_password = $_POST['txt_password'];
			$txt_conpassword = $_POST['txt_conpassword'];
			$txt_id = $_SESSION['student_id'];
			//update username and password  function for teacher
			if($txt_password == $txt_conpassword){
				
				$userpassquery = mysqli_query($con,"Update tblstudent set username = '$txt_username',password='$txt_password' where id = '$txt_id'"); 
				if($userpassquery == true){
					$message = "Username and password has been changed successfully!";
						echo "<script type='text/javascript'>
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("student_page.php");
						</script>';
				}
				else
				{
					$message = "Error! System not responding. Please try again.";
						echo "<script type='text/javascript'>
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("student_page.php");
						</script>';
				}
			}
			else
			{
				    $message = "Your password did not match!.Please try again.";
						echo "<script type='text/javascript'>
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("student_page.php");
						</script>';
			}
			
		
	}
?>
