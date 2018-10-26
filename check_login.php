<?php
	include "connectDb.php"; 
	session_start();
	echo "<script>alert('".mysql_real_escape_string($_POST['Email'])."');</script>";
	echo "555";
	$strSQL = "SELECT * FROM tb_member WHERE email = '".mysql_real_escape_string($_POST['Email'])."' 
	and pass = '".mysql_real_escape_string($_POST['pass'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
        
            echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["fname"] = $objResult["fname"];
			$_SESSION["lname"] = $objResult["lname"];
			$_SESSION["status"] = $objResult["status"];
			//set timeout
			$_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
			session_write_close();
			
			header("location:layout/main_New.php");
	}
	mysql_close();
?>