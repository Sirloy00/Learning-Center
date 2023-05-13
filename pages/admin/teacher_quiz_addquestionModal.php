<!-- ========================= ADD Question MODAL ======================= -->
<div id="addquestionModal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-m" style="width:600px !important;">
    <div class="modal-content">
        <div class="modal-header" style=" background-color:skyblue;">
			<h4 class="modal-title">Add Question</h4>
            <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body"  style="height:470px;width:498px;border:solid 1px blue;overflow:scroll;overflow-x:hidden;overflow-y:scroll;" >
            <div class="row"> 
			    <div class="col-md-12">
				    <div class="form-group">
						<label><strong>Quiz Title:</strong></label></br>
						<input type="text" title="Warning! Check the input spelling and grammar structure. This is served as your primary key for your questionaires." required id="txt_quiz_title" name="txt_quiz_title" placeholder="Enter a quiz title" style="height:50px;width:460px;" >
					</div>
					<div class="form-group">
						<label><strong>Question:</strong></label></br>
						<textarea required id="txt_question" name="txt_question" placeholder="Enter a question" style="height:50px;width:460px;" ></textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 1:</strong></label></br>
						<textarea required id="txt_option1" name="txt_option1" placeholder="Enter Option 1" style="height:50px;width:460px;" ></textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 2:</strong></label></br>
						<textarea required id="txt_option2" name="txt_option2" placeholder="Enter Option 2" style="height:50px;width:460px;" ></textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 3:</strong></label></br>
						<textarea required id="txt_option3" name="txt_option3" placeholder="Enter Option 3" style="height:50px;width:460px;" ></textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 4:</strong></label></br>
						<textarea required id="txt_option4" name="txt_option4" placeholder="Enter Option 4" style="height:50px;width:460px;" ></textarea>
					</div>
					<div class="form-group">
						<label><strong> Correct Answer:</strong></label></br>
						<textarea  required id="txt_correctans" name="txt_correctans" placeholder="Enter Correct Answer" style="height:50px;width:460px;" ></textarea>
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
</div>

<!-- =========  ADD Question FUNCTION  ============== -->
<?php
	if(isset($_POST['btn_save'])){
		$txt_quiz_title = $_POST['txt_quiz_title'];
		$txt_question = $_POST['txt_question'];
		$txt_option1 = $_POST['txt_option1'];
		$txt_option2 = $_POST['txt_option2'];
		$txt_option3 = $_POST['txt_option3'];
		$txt_option4 = $_POST['txt_option4'];
		$txt_correctans = $_POST['txt_correctans'];
		$createdby = $_SESSION['username2'];
		$teacher_id = $_SESSION['id'];
		$status = "notsaved";
		$chk = mysqli_query($con,"SELECT * from tblquiz where teacher_id = '$teacher_id' and created_by = '$createdby' and question = '$txt_question' and 
		option1 = '$txt_option1' and option2 = '$txt_option2' and option3 = '$txt_option3' and option4 = '$txt_option4' and correct_answer = '$txt_correctans'");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$query = mysqli_query($con,"INSERT INTO tblquiz (quiz_title,teacher_id,created_by,question,option1,option2,option3,option4,correct_answer,status) 
			values ('$txt_quiz_title','$teacher_id','$createdby','$txt_question','$txt_option1','$txt_option2','$txt_option3','$txt_option4','$txt_correctans','$status')"); 
			if($query == true){
	            $_SESSION['added'] = 1;
	            $message = "New question has been added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacher_manage_quiz.php");
					</script>';
			}
		}
		else{
            $message = "Error!Duplicate record. Please use another question.";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacher_manage_quiz.php");
					</script>';
		}
	}
?>
