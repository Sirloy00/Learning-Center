<!-- ========================= ADD Question MODAL ======================= -->
<?php echo'<div id="editModal'.$row['quiz_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-m" style="width:600px !important;">
    <div class="modal-content">
        <div class="modal-header" style=" background-color:skyblue;">
			<h4 class="modal-title">Edit Question</h4>
            <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body"  style="height:470px;width:498px;border:solid 1px blue;overflow:scroll;overflow-x:hidden;overflow-y:scroll;" >
            <div class="row"> 
			    <div class="col-md-12">
				    <div class="form-group">
						<input type="hidden" id="txt_questionid" name = "txt_questionid" value = "'.$row['quiz_id'].'">
					</div>
					<div class="form-group">
						<label><strong>Question:</strong></label></br>
						<textarea required id="txt_question" name="txt_question" placeholder="Enter a question"  style="height:50px;width:460px;" >'.$row['question'].'</textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 1:</strong></label></br>
						<textarea required id="txt_option1" name="txt_option1" placeholder="Enter Option 1"  style="height:50px;width:460px;" >'.$row['option1'].'</textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 2:</strong></label></br>
						<textarea required id="txt_option2" name="txt_option2" placeholder="Enter Option 2" style="height:50px;width:460px;" >'.$row['option2'].'</textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 3:</strong></label></br>
						<textarea required id="txt_option3" name="txt_option3" placeholder="Enter Option 3"  style="height:50px;width:460px;" >'.$row['option3'].'</textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 4:</strong></label></br>
						<textarea required id="txt_option4" name="txt_option4" placeholder="Enter Option 4"  style="height:50px;width:460px;" >'.$row['option4'].'</textarea>
					</div>
					<div class="form-group">
						<label><strong> Correct Answer:</strong></label></br>
						<textarea  required id="txt_correctans" name="txt_correctans" placeholder="Enter Correct Answer" style="height:50px;width:460px;" >'.$row['correct_answer'].'</textarea>
					</div>
				</div>
            </div>
		</div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-m" id="btn_save" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
  </form>
</div';
?>

<!-- =========  ADD Question FUNCTION  ============== -->
<?php
	if(isset($_POST['btn_save'])){
			$txt_questionid = $_POST['txt_questionid'];
			$txt_question = $_POST['txt_question'];
			$txt_option1 = $_POST['txt_option1'];
			$txt_option2 = $_POST['txt_option2'];
			$txt_option3 = $_POST['txt_option3'];
			$txt_option4 = $_POST['txt_option4'];
			$txt_correctans = $_POST['txt_correctans'];
			
			$query = mysqli_query($con,"Update tblquiz set question = '$txt_question',
			option1 = '$txt_option1',option2 = '$txt_option2',option3 = '$txt_option3',option4 = '$txt_option4',
			correct_answer = '$txt_correctans' where quiz_id = '$txt_questionid'"); 
			
			if($query == true){
	            $message = "Selected record has been updated successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacher_manage_quiz.php");
					</script>';
			}
	
			else{
				$message = "Error! System not responding. Please try again.";
						echo "<script type='text/javascript'>
						
						alert('$message');
						</script>";
						
						echo '<script type="text/javascript">
						location.replace("teacher_manage_quiz.php");
						</script>';
			}
	}
?>
