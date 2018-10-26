


<div class="page-content">

						<div class="page-header">
							<h1>
								กรอกรายละเอียดการสั่งซื้อ
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>

								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form action="add_buy.php" class="form-horizontal" role="form" method="post" name="frmMain">
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> วันที่สั่งซื้อ </label>

										<div class="col-sm-9">
                                        	<input class="form-control date-picker col-3" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" placeholder="วันที่สั่งซื้อ" style="width:200px;" name="buy_date" value="<br />
<b>Warning</b>:  date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. in <b>C:\AppServ\www\shop_com\admin\form_buy.php</b> on line <b>242</b><br />
2018-09-30" readonly="readonly">
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> ผู้จำหน่าย </label>

										<div class="col-sm-4">
                                        											<select class="form-control" id="form-field-select-1" name="dealer_id" onchange="window.location='?dealer_id='+this.value" required="required">
                                            	<option value="" selected="selected">--กรุณาเลือกผู้จำหน่าย--</option>
                                                                                        	<option value="1">intel thailand</option>
                                                                                        	<option value="2">บริษัท เอเอ็มดี ฟาร์อีส</option>
                                                                                        	<option value="3">Samsung</option>
                                                                                        	<option value="4">บริษัท ซิลิคอนดาต้า จำกัด</option>
                                                                                        	<option value="5">GIGABYTE Technology Co.,Ltd.</option>
                                                                                        	<option value="6">Scanner Co.,Ltd. (Service)</option>
                                            											</select>
										</div>
									</div>
                                    <br><br>

									<div class="form-group">
								<div class="col-md-4">
                                	<input name="btnAdd" type="button" id="btnAdd" value="+ เพิ่มรายการสั่งซื้อ" class="btn btn-success btn-sm" onclick="CreateNewRow();">
        							<input name="btnDel" type="button" id="btnDel" value="- ลบรายการสั่งซื้อ" class="btn btn-danger btn-sm" onclick="RemoveRow();">
                                	<!--<a href="#" class="btn btn-success btn-sm" onclick="add_mat()"><i class='glyphicon glyphicon-plus'></i> เพิ่มรายการซื้อ</a>
									<a href="#" class="btn btn-danger btn-sm" onclick="del_mat()"><i class='glyphicon glyphicon-trash'></i> ลบรายการซื้อ</a>-->
								</div>
							</div>
                            <!--<input type="text" name="total_sum" id="total_sum" value="0">-->
							<table class="table table-bordered table-hover" id="tbExp">
								<thead>
									<tr>
										<th style="width:5%">#</th>
										<th style="width:30%">รายการสินค้า</th>
										<th style="width:10%">จำนวน</th>
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
											<button class="btn btn-danger" type="button" onclick="window.history.back();">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												ยกเลิก
											</button>
										</div>
									</div>
									</form>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div>
