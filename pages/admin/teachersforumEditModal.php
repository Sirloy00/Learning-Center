
<!-- ========= TEACHER FORUM EDIT MESSAGE MODAL ======== -->
<?php echo '<div id="editMsgForumModal'.$row['tfid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:rgb(0, 128, 24);color:white;">
			<h4 class="modal-title">Edit Message</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['tfid'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                   <textarea autofocus required name="txt_edit_msg" class="form-control input-sm" placeholder="Enter your message here!">'.$row['message'].'</textarea> 
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_edit_msg" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>

<!-- ========= TEACHER FORUM EDIT MESSAGE FUNCTION ======== -->

<?php
	if(isset($_POST['btn_edit_msg']))
	{
	    $txt_id = $_POST['hidden_id'];
	    $txt_edit_msg = $_POST['txt_edit_msg'];

	    $query = mysqli_query($con,"UPDATE tblteacherforum SET message = '".$txt_edit_msg."' WHERE id = '".$txt_id."' and sender_id = '".$_SESSION['id']."'");

	    if($query == true){
	        $message = "Message updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teachersforum.php");
					</script>';
	    }

        else{
           $message = "You are not authorize to edit this message!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teachersforum.php");
					</script>';
		}
	}
?>