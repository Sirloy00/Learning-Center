<?php
	if(isset($_POST['btn_change_pass'])){
			$txt_newpassword = $_POST['txt_password'];
			$txt_conpassword = $_POST['txt_conpassword'];
			$txt_id = $_SESSION['id'];
			
			//password  function for teacher
			if($txt_password == $txt_conpassword){
				
				
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
				    alert("Password did not match!.Please try again.");
					$(document).ready(function(){
						$("#teacherpasswordModal").modal("show");
					});
				  </script>	';	
			}
			
	}
	
	?>
