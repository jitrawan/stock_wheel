<?php
$hostname_conn = "localhost:8080";
$username_conn = "root";
$password_conn = "";
$database_conn = "stock_wheel";
$obj_connect = mysql_connect( $hostname_conn , $username_conn , $password_conn ) or die( "ติดต่อฐาบข้อมูลไม่ได้" );
$obj_select = mysql_select_db( $database_conn ) or die( "ไม่สามารถเข้า DB ได้" );
mysql_query("SET character_set_results=UTF8");
mysql_query("SET character_set_client=UTF8");
mysql_query("SET character_set_connection=UTF8");

?>
