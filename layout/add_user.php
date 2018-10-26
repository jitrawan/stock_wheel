<?
		session_start();
		header('Content-Type: text/html; charset=UTF-8');
		include "../connectDb.php";

		$sql="Select icard from tb_user Where icard='".$_POST["icard"]."'";
		$rs=mysql_query($sql);
		if(mysql_num_rows($rs)>0){
?>
		<script>
			alert("เลขบัตรประชาชนมีในระบบแล้ว กรุณาตรวจสอบ");
			window.location.href = "form_member.php";
        </script>
<?
		}else{

		$sur = strrchr($_FILES['applicant_files']['name'], ".");
    $newfilename = (Date("dmy_His").$sur);
		copy($_FILES["applicant_files"]["tmp_name"],"profile/".$newfilename);
		$file_img = "profile/".$newfilename;

		$strSQL = "INSERT INTO tb_user (id, icard, email, pass, fname, lname, mobile, address, districts, amphures, provinces, zipcode,  pic, contact, contact_link, contact_mobile, status, status_open, date_member) VALUES (NULL, '".$_POST["icard"]."', '".$_POST["email"]."', '".$_POST["pass"]."', '".$_POST["fname"]."', '".$_POST["lname"]."', '".$_POST["mobile"]."', '".$_POST["address"]."', '".$_POST["districts"]."', '".$_POST["amphures"]."', '".$_POST["provinces"]."', '".$_POST["zipcodes"]."', '".$file_img."', '".$_POST["contact"]."', '".$_POST["contact_link"]."', '".$_POST["contact_mobile"]."', '".$_POST["status"]."', '', NOW())";
		$objQuery = mysql_query($strSQL);
		//echo $strSQL;

		$sql_log = "INSERT INTO log (id, name_member, date_log, detail_log) VALUES (NULL, '".$_SESSION["fname"]."', NOW(), '".เพิ่มรายชื่อพนักงานเลขที่บัตร.$_POST["icard"]."')";
		$obj_log = mysql_query($sql_log);
?>
    	<script>
			//alert("Username : <?=$_POST["icard"];?> Password : 123456");
    alert("บันทึกข้อมูลสมาชิกเรียบร้อยครับ!");
			//window.history.back();main.php?page=list_member
			window.location.href = "main.php?page=list_member";
        </script>
<?	} ?>
