<?php
    header('Content-Type: text/html; charset=UTF-8');
    header ("Expires: Wed, 21 Aug 2013 13:13:13 GMT");
    header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");

    include "../connectDb.php";
   // conndb();

    $select_id = $_GET['select_id'];
    $result = $_GET['result'];
	$point_id = $_GET['point_id'];

if($result=='amphures'){
	$rstTemp=mysql_query("select * from amphures Where PROVINCE_ID ='".$select_id."'  Order By AMPHUR_NAME ASC");
?>
	<option value="" selected="selected">--เลือกอำเภอ--</option>
<?
	while($arr_2=mysql_fetch_array($rstTemp)){
?>

	<option value="<?=$arr_2['AMPHUR_ID']?>" <? if($arr_2['AMPHUR_ID']==$point_id){ echo "selected"; } ?>><?=$arr_2['AMPHUR_NAME']?></option>
<?
	}
}else if($result=='districts'){ ?>
<select name='districts' id='districts'>
	<?
	$rstTemp=mysql_query("select * from districts Where AMPHUR_ID ='".$select_id."'  Order By DISTRICT_NAME ASC");
?>
	<option value="" selected="selected">--เลือกตำบล--</option>
<?
	while($arr_2=mysql_fetch_array($rstTemp)){
	?>
	<option value="<?=$arr_2['DISTRICT_CODE']?>" <? if($arr_2['DISTRICT_CODE']==$point_id){ echo "selected"; } ?>><?=$arr_2['DISTRICT_NAME']?></option>
	<? }?>
</select>
<? }else if($result=='zipcodes'){ ?>
<select name='zipcodes' id='zipcodes'>
	<?
	$rstTemp=mysql_query("select * from zipcodes Where district_code ='".$select_id."' ");
?>
<?
	while($arr_2=mysql_fetch_array($rstTemp)){
	?>
	<option value="<?=$arr_2['zipcode']?>" <? if($arr_2['zipcode']==$point_id){ echo "selected"; } ?>><?=$arr_2['zipcode']?></option>
	<? }?>
</select>
<? }?>
