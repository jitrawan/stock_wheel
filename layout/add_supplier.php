<?

		header('Content-Type: text/html; charset=UTF-8');
		include "../connectDb.php";
		

		$sql="Select dealer_name from dealer Where dealer_name='".$_POST["dealer_name"]."'";
		$rs=mysql_query($sql);
		$resule = false;
		if(mysql_num_rows($rs)>0){
?>
		<script>
			alert("ชื่อบริษัท/ร้านค้านี้ มีในระบบแล้ว");
			window.history
        </script>
<?
		}else{ 
			if($_FILES['applicant_files']['name'] != ''){
				$sur = strrchr($_FILES['applicant_files']['name'], ".");
				$newfilename = (Date("dmy_His").$sur);
				copy($_FILES["applicant_files"]["tmp_name"],"dealer/".$newfilename);
				$file_img = "dealer/".$newfilename;
				$resule = true;
			}
			
			if($resule){
			
				$strSQL = "INSERT INTO dealer (dealer_code,dealer_id, dealer_name, mobile, address, districts, amphures, provinces, zipcode, contact, idline, email, contact_mobile, pic, status, date_dealer) VALUES ('".$_POST["dealer_code"]."',NULL, '".$_POST["dealer_name"]."', '".$_POST["mobile"]."', '".$_POST["address"]."', '".$_POST["districts"]."', '".$_POST["amphures"]."', '".$_POST["provinces"]."', '".$_POST["zipcodes"]."',  '".$_POST["contact"]."', '".$_POST["idline"]."', '".$_POST["email"]."', '".$_POST["contact_mobile"]."', '".$file_img."', '', NOW())";
				$objQuery = mysql_query($strSQL);
				if (!$objQuery) {
					die('Invalid query: ' . mysql_error($strSQL));
					$resule = false;
				}else{
					$resule = true;
				}
			}
			if($resule){
				$sqlpro="Select dealer_id from dealer where dealer_code = '".$_POST["dealer_code"]."' ";
				$rspro=mysql_query($sqlpro);
				$row = mysql_fetch_array($rspro);
				/*if($_SESSION["fname"] != "" && $_SESSION["fname"] != null){
					$sql_log = "INSERT INTO log (id, name_member, date_log, detail_log) VALUES (NULL, '".$_SESSION["fname"]."', NOW(), '".เพิ่มชื่อตัวแทนจำหน่ายชื่อ.$row[dealer_name]."')";
					$obj_log = mysql_query($sql_log);
					$resule = true;
				}*/
				$resule = true;
			}
		}
		if($resule){
	
?>
	    <script>
			alert("บันทึกข้อมูลเรียบร้อยแล้ว");
			//window.history.back();
			window.location.href = "main.php?page=form_dealer_product&dealer_id=<? echo $row['dealer_id']?>";
        </script>
<?
		
	}
?>


    	
