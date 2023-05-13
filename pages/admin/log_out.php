<?php

if(isset($_POST['btn_logout']))
{
session_start();
session_destroy();
echo '<script type="text/javascript">
  	location.replace("welcome.php");
	</script>';
}
?>