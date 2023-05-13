
<?php 
	include 'db.php';
	
	$query = "SELECT * FROM chat";
	$run = $con->query($query);
	while($row = $run->fetch_array()) :
		?>
			<style>
			 .chat {
				 background-color: white;
			
			 }
			</style>
			<div class="chat" >
				<div id="chat_data" >
				<span  class="btn btn-success"> <i class="fas fa-fw fa-user"></i>&nbsp;<b><?php echo $row['name']; ?></b></span>:
				<span style="color:green;"><?php echo $row['msg']; ?></span>
				<span style="float:right;"><?php echo formatDate($row['date']); ?></span>
				</div>
			</div>
			<?php endwhile;?>
			
			