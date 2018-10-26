<?php
 
	session_start();
	session_destroy();
	header("location:layout/main_New.php?Type=Logout");
		?>
  
 