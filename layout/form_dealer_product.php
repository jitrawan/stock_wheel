<? include "../connectDb.php"; 
   include "../CheckSession.php";
?>



<div class="page-content">

					<div class="page-header">
						<h1>
							กรอกรายละเอียดรายการสินค้า
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>

							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<form action="add_dealer_pro.php" class="form-horizontal" role="form" method="post" name="frmMain">
								<input type="hidden" name="dealer_id" value="<?=$_GET[dealer_id];?>" >

																	<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> ชื่อผู้จำหน่าย </label>

									<div class="col-sm-4">
																			<?
										$menu = "SELECT dealer_name FROM dealer where dealer_id = '   ' ";
										$st = mysql_query($menu);
										$rmenu = mysql_fetch_array($st);
									?>
																			<input class="form-control" value="<?=$rmenu["dealer_name"];?>" readonly="readonly" >
									</div>
								</div>
																	<br /><br />

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
											<i class="ace-icon fa fa-check bigger-110"></i>
											บันทึก
										</button>

										&nbsp; &nbsp; &nbsp;
										<button class="btn btn-danger" type="button" onClick="window.history.back();">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											ยกเลิก
										</button>
									</div>
								</div>
								</form>
							</div><!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->


				</div><!-- /.page-content -->
