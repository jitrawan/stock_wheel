<?
	error_reporting(0);
	$Host="localhost";
	$HostUsername="voymonto_shopcom";
	$HostPassword="123456789";
	$DB="voymonto_shopcom";
	$Connect=mysql_connect($Host,$HostUsername,$HostPassword);
	if($Connect){
		$select_DB=mysql_select_db($DB);
		if($select_DB){
			mysql_query("SET NAMES UTF8");	
		}
	}else{
		echo "connection error";	
	}
?>