<!-- ========= CLASS MODAL ======== -->

 <div id="deleteModal<?php echo $row['message_id'] ?>" class="modal fade">
<form method="post">

  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
			<h4 class="modal-title">Confirm Delete</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           
        </div>
        <div class="modal-body">
        <p>Are you sure you want to delete selected record?</p>
		<?php
		    $_SESSION['msg_del'] = $row['message_id'] ;
			$msg_del = $_SESSION['msg_del'];
			echo $msg_del; 
		?>
	
		</p>
             
        <div class="modal-footer">
            <button class="btn btn-default btn-sm" data-dismiss="modal">No</button>
            <button class="btn btn-primary btn-sm" name="btn_delete">Yes</button>
			<?php
	if(isset($_POST['btn_delete']))
	{
		 
		
	 $delete_query = mysqli_query($con,"DELETE FROM message WHERE message_id = ".$msg_del ) or die('Error: ' . mysqli_error($con));
	    if($delete_query == true){
	        $_SESSION['delete'] = 1;
	        $message = "Selected record deleted successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("message_sent.php");
					</script>';
	    }

		if(mysqli_error($con)){
			
            $message = "error!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("message_sent.php");
					</script>';
		}
	}
?>
        </div>
		</div>
   </div>
  </div>
</form>

