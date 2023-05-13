<!-- ========= mark all notification MODAL ======== -->
<?php echo '<div id="mark_all_notifyModal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header" style="background-color:red;color:white;">
			<h4 class="modal-title">Confirm</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"style="color:white;">&times;</button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                   <p>Click Yes to hide all current message.</p>
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_notify" value="Yes"/>
        </div>
    </div>
  </div>
</form>
</div>';?>
<?php
	if(isset($_POST['btn_notify']))
	{ 
		echo '<script type="text/javascript">
			location.replace("teacher_page.php");
			</script>';
	 
	}
?>
