


	<div id="container">
		<div class="row">
			<div class="col-sm-2 col-md-6">	
				<h1 class="alert alert-success">Live Chat</h1>
				<h1 class="alert alert-success">
					<form method="post" action="index.php">
			<div class="form-group">
			<?php if($_SESSION['role'] == "administrator"){
                                    $user = mysqli_query($con,"SELECT * from tbladmin where id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['accounttype'];
                               
										echo'<input class="form-control" name="name" type="text" value="'.$row['accounttype'].'" required>';
                                    }
                                }
					
			  ?>
			</div>	
			<div class="form-group">
				<textarea class="form-control" placeholder="Your Message" name="msg" required></textarea>	
			</div>	
			<div class="form-group">
				<input class="btn btn-success btn-block" name="send"  type="submit" value="Send">	
			</div>	
		
			</form>
		</div></h1>
		
			<div class="col-sm-2 col-md-6">	
				<div id="chat"></div></div>
				</div>
				</div>
			<?php 
			include 'includes/db.php';
			?>
			<?php 
			if(isset($_POST['send'])){ 
			
			$name = $_POST['name'];
			$message = $_POST['msg'];
			
			$query = "INSERT INTO chat (name,msg) values ('$name','$message')";
			
			$run = $con->query($query);
			
			}
			?>	
	</div>
