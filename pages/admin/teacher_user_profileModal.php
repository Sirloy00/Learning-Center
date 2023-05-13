<!-- ========================= Edit User Profile Modal and Function ======================= -->
    <div id="userprofileModal"  class="modal fade"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
		     <div class="row">
		         <div class="col-6">
					<div class="form-group">
						<label><strong>Name:</strong></label></br>
						<input title="You are not authorized to edit this field! Try to ask the administrator!" disabled required id="txt_name" name="txt_name" type="text" value="<?php echo $_SESSION['username'];?>" class="form-control input-m"/>
					</div>
					<div class="form-group">
						<label><strong>User Type:</strong></label></br>
						<input title="You are not authorized to edit this field! Try to ask the administrator!" disabled required id="txt_name" name="txt_name" type="text" value="Teacher" class="form-control input-m"/>
					</div>
					<div class="form-group">
						<label><strong>Username:</strong></label></br>
						<input autofocus required id="txt_username" name="txt_username" type="text" class="form-control input-m" />
					</div>
					<div id="txt_password"class="form-group">
						<label><strong>Old Password:</strong></label></br>
						<input  required id="txt_oldpass" name="txt_oldpass" type="text"  class="form-control input-m" />
					</div>
                 </div>
				 <div class="col">
                     <center>
		
					 <img style="padding:10px;"src="<?php echo $_SESSION['images'];?>"  class="img-thumbnail"/></center>
					 <div class="form-group">
						<center><br/>
						<a type="button" class="btn btn-outline-primary" id="btn_changepic" name="btn_changepic"  data-toggle="modal" data-target="#change_profile">Change Profile Picture</a>
						</center>
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
	  </div>
	  </form>
    </div>
<?php include"teacher_change_profileModal.php";?>

<!-- =========  EDIT USER PROFILE FUNCTION  ============== -->
<?php
	if(isset($_POST['btn_user_change'])){
		  
		    $txt_username = $_POST['txt_username'];
			$txt_oldpass = $_POST['txt_oldpass'];
			$txt_id = $_SESSION['id'];
			
			if($txt_username == $_SESSION['usern'] && $txt_oldpass == $_SESSION['pass']){
				 echo '<script type="text/javascript">	
					$(document).ready(function(){
						$("#teacherpasswordModal").modal("show");
					});
				  </script>	';	
			}
			else
			{
				  echo '<script type="text/javascript">	
				    alert("Username and Password did not match!.Please try again.");
					$(document).ready(function(){
						$("#userprofileModal").modal("show");
					});
				  </script>	';			  
			}
			
		
	}
	
?>

<!-- modal for changing password -->
  <div  id="teacherpasswordModal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	 <form method="POST" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color:white;">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		   <div class="form-group">
					<div  class="form-group">
						<label><strong>New Password:</strong></label></br>
						<input autofocus required  name="txt_newpassword"  type="password" class="form-control input-m"/>
					</div>
					<div class="form-group">
						<label><strong>Confirm Password:</strong></label></br>
						<input required  name="txt_conpassword"  type="password" class="form-control input-m"/>
					</div>
		  </div>
         <div class="modal-footer">
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-m" id="btn_change_pass" name="btn_change_pass" value="Save"/>
        </div>
        </div>
      </div>
	  </div>
	  </form>
    </div>
	
	<?php
	if(isset($_POST['btn_change_pass'])){
			$txt_newpassword = $_POST['txt_newpassword'];
			$txt_conpassword = $_POST['txt_conpassword'];
			$txt_id = $_SESSION['id'];
			
			//password  function for teacher
			if($txt_newpassword == $txt_conpassword){
				$userpassquery = mysqli_query($con,"Update tblteacher set password='$txt_newpassword' where id = '$txt_id'"); 
				if($userpassquery == true){
				 echo '<script type="text/javascript">	
				    alert("Your password has been changed successfully!.");
					$(document).ready(function(){
						$("#teacherpasswordModal").modal("hide");
					});
				  </script>	';	
				}
				else
				{
					 echo '<script type="text/javascript">	
				    alert("Error! System not responding.Please try again.");
					$(document).ready(function(){
						$("#teacherpasswordModal").modal("show");
					});
				  </script>	';
				}
			
				
					
			
			}
			else
			{
			    echo '<script type="text/javascript">	
				    alert("Password did not match!.Please try again.");
					$(document).ready(function(){
						$("#teacherpasswordModal").modal("show");
					});
				  </script>	';	
			}
			
	}
	
	?>
