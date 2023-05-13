<!-- Large modal for quiz testing -->
<?php
$_SESSION['duration'] = $row['quiz_duration'];
$_SESSION['start_time'] = date("Y-m-d H:i:s");
$end_time = date('Y-m-d H:i:s', strtotime('+'.$_SESSION['duration'].'minutes',strtotime($_SESSION['start_time'])));
$_SESSION['end_time'] = $end_time;

 echo'
    <div id="quiztestModal'.$row['id'].'"class="modal fade bd-example-modal-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	    <form method="POST" >
		    <div class="modal-dialog modal-m">
				<div class="modal-content">
				    <div class="modal-header" style="background-color:rgb(5, 69, 110);color:white;">
						<h5 class="modal-title" id="exampleModalLabel">Quiz Testing</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color:white;">
							 <span aria-hidden="true">×</span>
						</button>
				    </div>
				    <div class="modal-body" >
					    <div class="row">
						    <div class="col">
								<div  class="form-group">
									<label><strong>Class Name:</strong> '.$row['class_name'].'</label></br>
									<label><strong>Title:</strong> '.$row['quiz_title'].'</label></br>
									<label><strong>Subject:</strong> '.$row['subject'].'</label></br>
								</div>
							</div>
							<div class="col">
								<div  class="form-group">
									<label><strong>Time/Date:</strong> '.$row['date_time'].'</label></br>
									<label><strong>Time Duration:</strong> '.$row['quiz_duration'].'</label></br>
									<p id="response"></p>
								</div>
							</div>
						</div>
						<div class="dropdown-divider"></div>
						<label><strong><span style="color:red;">Direction:</span></strong> '.$row['quiz_description'].'</label></br>
						<div class="dropdown-divider"></div></br>';
						$optquery = mysqli_query($con,"SELECT * FROM tblquiz WHERE quizsaved_id = '".$row['id']."' ORDER BY RAND()");
                        $numval=1;
						while($row2 = mysqli_fetch_array($optquery))
						{
							echo'
							<div class="form-group">
								<label>'.$numval.'. '.$row2['question'].'</label>
								<input type="hidden" name="correct_ans" value="'.$row2['correct_answer'].'" />
								<select required="true" name="ddl_option" id="ddl_teacher" data-style="btn-primary" class="form-control input-sm" >
									<option  value= "" selected disabled>-- Select Answer --</option>
									<option  value="'.$row2['option1'].'" >'.$row2['option1'].'</option>
									<option  value="'.$row2['option2'].'" >'.$row2['option2'].'</option>
									<option  value="'.$row2['option3'].'" >'.$row2['option3'].'</option>
									<option  value="'.$row2['option4'].'" >'.$row2['option4'].'</option>
								</select>
							</div>';
						$numval++;
						}
					    echo'
					</div>
				    <div class="modal-footer">
						<input type="submit" class="btn btn-primary btn-m" id="btn_change_pass" name="btn_submit" value="SUBMIT"/>
				     </div>
				</div>
	        </div>
	    </form>
    </div>
<!-- Display the countdown timer in an element -->



   <script type="text/javascript">
 var x = setInterval(fun1,1000);
 setTimeout("xx()",60000);
 function fun1(){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","response.php",false);
  xmlhttp.send(null);
  var str = document.getElementById("response").innerHTML=xmlhttp.responseText;
  /*if(str.slice(7,9) == "58"){
   window.location.href="teacher_manage_quizOption.php";
  }*/

 }
 function xx(){
   clearInterval(x);
   window.location.href="teacher_manage_quizOption.php";
   //clearInterval(y);
  }
  
</script>';
?>