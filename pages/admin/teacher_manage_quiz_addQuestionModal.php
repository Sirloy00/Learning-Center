<!-- ========================= ADD Question MODAL ======================= -->
<div id="addquestionModal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:400px !important;">
    <div class="modal-content">
        <div class="modal-header"  style="background-color:rgb(5, 69, 110);color:white;">
			<h4 class="modal-title">Add Question</h4>
            <button  title = "close" type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">&times;</button>
        </div>
        <div class="modal-body"  style="height:400px;width:298px;border:solid 1px blue;overflow:scroll;overflow-x:hidden;overflow-y:scroll;" >
            <div class="row"> 
			    <div class="col-md-12">
					<div class="form-group">
						<label><strong>Question:</strong></label></br>
						<textarea required id="txt_question" name="txt_question" placeholder="Enter a question" style="height:50px;width:255px;" ></textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 1:</strong></label></br>
						<textarea required id="txt_option1" name="txt_option1" placeholder="Enter Option 1" style="height:50px;width:255px;"></textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 2:</strong></label></br>
						<textarea required id="txt_option2" name="txt_option2" placeholder="Enter Option 2" style="height:50px;width:255px;" ></textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 3:</strong></label></br>
						<textarea required id="txt_option3" name="txt_option3" placeholder="Enter Option 3" style="height:50px;width:255px;" ></textarea>
					</div>
					<div class="form-group">
						<label><strong> Option 4:</strong></label></br>
						<textarea required id="txt_option4" name="txt_option4" placeholder="Enter Option 4" style="height:50px;width:255px;" ></textarea>
					</div>
					<div class="form-group">
						<label><strong> Correct Answer:</strong></label></br>
						<textarea  required id="txt_correctans" name="txt_correctans" placeholder="Enter Correct Answer" style="height:50px;width:255px;" ></textarea>
					</div>
				</div>
            </div>
		</div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-m" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-m" id="btn_add" name="btn_add" value="Save"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========  ADD Question FUNCTION  ============== -->
<?php
	if(isset($_POST['btn_add'])){
		$quizsaved_id = $_SESSION['quiz_id'];
		$quizsaved_title = $_SESSION['quiz_title'];
		$txt_question = $_POST['txt_question'];
		$txt_option1 = $_POST['txt_option1'];
		$txt_option2 = $_POST['txt_option2'];
		$txt_option3 = $_POST['txt_option3'];
		$txt_option4 = $_POST['txt_option4'];
		$txt_correctans = $_POST['txt_correctans'];
		$chk = mysqli_query($con,"SELECT * from tblquiz where quizsaved_id = '$quizsaved_id' and question = '$txt_question' and 
		option1 = '$txt_option1' and option2 = '$txt_option2' and option3 = '$txt_option3' and option4 = '$txt_option4' and correct_answer = '$txt_correctans'");
		$ct = mysqli_num_rows($chk);

		if($ct == 0){
			$insertquery = mysqli_query($con,"INSERT INTO tblquiz (quizsaved_id,question,option1,option2,option3,option4,correct_answer) 
			values ('$quizsaved_id','$txt_question','$txt_option1','$txt_option2','$txt_option3','$txt_option4','$txt_correctans')"); 
			if($insertquery == true){
				$_SESSION['quiz_id_temp'] = $quizsaved_id;
				$_SESSION['quiz_title_temp'] = $quizsaved_title;
	            $message = "New question has been added successfully!";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacher_manage_quiz_QuestionDuplicate.php");
					</script>';
			}
		}
		else{
            $message = "Error!Duplicate record. Please use another question.";
					echo "<script type='text/javascript'>
					
					alert('$message');
					</script>";
					
					echo '<script type="text/javascript">
					location.replace("teacher_manage_quiz_Question.php");
					</script>';
		}
	}
?>
