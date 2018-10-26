<? include "../connectDb.php";


$sql = "INSERT INTO tb_location (id_location, name_location, type_location, address_location)
		VALUES ('".$_POST["txtidlocation"]."','".$_POST["txtnamelocation"]."','".$_POST["txttpyelocation"]."'
		,'".$_POST["txtaddresslocation"]."')";



	if($query) {
		echo "Record add successfully";
	}


?>
