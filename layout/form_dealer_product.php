<? include "../connectDb.php"; ?>

<?
$sql_dealer = "SELECT * FROM dealer where dealer_id = $_GET[dealer_id]";
$st_dealer = mysql_query($sql_dealer);
$row_dealer = mysql_fetch_array($st_dealer);
?>

<div class="page-content">
	<div class="page-header">
        <h1>กรอกรายละเอียดรายการสินค้า
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>

			</small>
		</h1>
    </div>
    <div class="row">
        <div class="">
            <form action="add_dealer_pro.php" class="form-horizontal" role="form" method="post" name="frmMain">
                <input type="hidden" name="dealer_id" value="<?=$row_dealer[dealer_id];?>">
				<div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> ผู้จำหน่าย </label>
					<div class="col-sm-4">
                        <input class="form-control" value="<?=$row_dealer['dealer_code'];?> - <?=$row_dealer['dealer_name'];?>" readonly="readonly">
                    </div>
                </div>


<div class="form-group">
<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> ชื่อสินค้า </label>
	<div class="col-sm-4">
	<input class="form-control" type="email"  id="email" placeholder="ชื่อสินค้า" name="email">
	</div>
	<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> ราคา </label>
	<div class="col-sm-3">
	<input class="form-control" style="text-align: right;" type="number"  id="email" placeholder="ราคาต่อหน่วย" name="email">
	</div>
	<label class="col-sm-1 control-label" style="text-align: left;"> /บาท </label>
	</div>

                <br />
                <br />

                <div class="form-group">
                    <div class="col-md-4">
                        <input name="btnAdd" type="button" id="btnAdd" value="+ เพิ่มรายการสินค้า" class="btn btn-success btn-sm" onClick="CreateNewRow();">
                        <input name="btnDel" type="button" id="btnDel" value="- ลบรายการสินค้า" class="btn btn-danger btn-sm" onClick="RemoveRow();">
                        <!--<a href="#" class="btn btn-success btn-sm" onclick="add_mat()"><i class='glyphicon glyphicon-plus'></i> เพิ่มรายการซื้อ</a>
								<a href="#" class="btn btn-danger btn-sm" onclick="del_mat()"><i class='glyphicon glyphicon-trash'></i> ลบรายการซื้อ</a>-->
                    </div>
                </div>
                <!--<input type="text" name="total_sum" id="total_sum" value="0">-->
                <table class="table table-bordered table-hover" id="tbExp">
                    <thead>
                        <tr>
                            <th style="width:5%">#</th>
                            <th style="width:30%">ชื่อสินค้า</th>
                            <th style="width:10%">ราคา:หน่วย</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="hdnMaxLine" id="hdnMaxLine" value="0">
                <div class="space-4"></div>

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i> บันทึก
                        </button>

                        &nbsp; &nbsp; &nbsp;
                        <button class="btn btn-danger" type="button" onClick="window.history.back();">
                            <i class="ace-icon fa fa-undo bigger-110"></i> ยกเลิก
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- PAGE CONTENT ENDS -->
    </div>
    <!-- /.col -->
</div>