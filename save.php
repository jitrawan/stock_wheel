<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "12345678";
	$dbName = "test";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "INSERT INTO customer (CustomerID, Name, Email, CountryCode, Budget, Used)
		VALUES ('".$_POST["txtCustomerID"]."','".$_POST["txtName"]."','".$_POST["txtEmail"]."'
		,'".$_POST["txtCountryCode"]."','".$_POST["txtBudget"]."','".$_POST["txtUsed"]."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "Record add successfully";
	}

	mysqli_close($conn);
?>
</body>
</html>
