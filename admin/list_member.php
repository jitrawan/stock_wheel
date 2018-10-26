<?

include '../connectDb.php';

 ?>

<div class="page-content">

	<div class="page-header">
		<h1>
			รายชื่อผู้ใช้งาน
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">

				<div class="col-xs-12">
														<!--<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>-->
					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
																						<th class="center" style="width:10%;">เลขบัตร</th>
																							<th class="center" style="width:12%;">อีเมล์</th>
																						<th class="center" style="width:20%;">ชื่อ-นามสกุล</th>
																							<th class="center" style="width:10%;">เบอร์โทร</th>
									<th class="center" style="width:10%;">ตำแหน่ง</th>
																							<th class="center" style="width:10%;">สถานะ</th>
																							<th class="center" style="width:28%;">-</th>
								</tr>
							</thead>
																			<?
								if($_GET["Action"] == "Del"){
										$strSQL = "update tb_user set status = 'C' WHERE id = '".$_GET["id"]."' ";
										$stm = mysql_query($strSQL);

										$sql_log = "INSERT INTO log (id, name_member, date_log, detail_log) VALUES (NULL, '".$_SESSION["fname"]."', NOW(), '".ลบรายชื่อพนักงาน.$_GET["id"]."')";
											$obj_log = mysql_query($sql_log);
								}else if($_GET["Action"] == "Col"){
										$strSQL = "update tb_user set status_open = 'C' WHERE id = '".$_GET["id"]."' ";
										$stm = mysql_query($strSQL);
										$sql_log = "INSERT INTO log (id, name_member, date_log, detail_log) VALUES (NULL, '".$_SESSION["fname"]."', NOW(), '".ระงับการใช้งานพนักงาน.$_GET["id"]."')";
										$obj_log = mysql_query($sql_log);
								}else if($_GET["Action"] == "Out"){
										$strSQL = "update tb_user set status_open = 'O' WHERE id = '".$_GET["id"]."' ";
										$stm = mysql_query($strSQL);

										$sql_log = "INSERT INTO log (id, name_member, date_log, detail_log) VALUES (NULL, '".$_SESSION["fname"]."', NOW(), '".บันทึกการลาออกของพนักงาน.$_GET["id"]."')";
										$obj_log = mysql_query($sql_log);
								}else if($_GET["Action"] == "Open"){
										$strSQL = "update tb_user set status_open = '' WHERE id = '".$_GET["id"]."' ";
										$stm = mysql_query($strSQL);
										$sql_log = "INSERT INTO log (id, name_member, date_log, detail_log) VALUES (NULL, '".$_SESSION["fname"]."', NOW(), '".เปิดการใช้งานพนักงาน.$_GET["id"]."')";
										$obj_log = mysql_query($sql_log);
								}
								$sql_member = "SELECT * FROM tb_user where status != 'MEMBER' and status != 'C' ORDER by date_member DESC  ";
								$st_member = mysql_query($sql_member);
							?>

							<tbody>
																				<?
									$num = 1;
									while($row_member = mysql_fetch_array($st_member)){
								?>
								<tr>
																						<td class="center"><a href="profile.php?member=<?=$row_member[id];?>"><?=$row_member[icard];?></a></td>
																							<td><?=$row_member[email];?></td>
																						<td><?=$row_member[fname].' '.$row_member[lname];?></td>
									<td class="center"><?=$row_member[mobile];?></td>
																							<td class="center">
										<?
											if($row_member[status] == 'ADMIN'){
												echo 'เจ้าของร้าน';
											}else if($row_member[status] == 'USER'){
												echo 'พนักงาน';
											}
										?>
																							</td>
																							<td class="center">
										<?
											if($row_member[status_open] == ''){
												echo '<span class="label label-success arrowed">ปกติ</span>';
											}else if($row_member[status_open] == 'C'){
												echo '<span class="label label-danger arrowed">ระงับการใช้งาน</span>';
											}else if($row_member[status_open] == 'O'){
												echo '<span class="label label-inverse arrowed">ลาออก</span>';
											}
										?>
																							</td>
									<td>
																							<? if($row_member[status_open] != 'O'){ ?>
																									<a href="edit_profile.php?member=<?=$row_member[id];?>" class="btn btn-warning btn-xs"><i class="ace-icon fa fa-pencil-square-o bigger-110"></i> แก้ไข</a>
																									<a href="JavaScript:if(confirm('คุณต้องการลบรายชื่อผุ้ใช้งาน ?')==true){window.location='<?=$_SERVER["PHP_SELF"];?>?Action=Del&id=<?=$row_member["id"];?>';}" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> ลบ</a>
																							<? if($row_member[status_open] != 'C'){ ?>
																									<a href="JavaScript:if(confirm('คุณต้องการระงับการใช้งาน ?')==true){window.location='<?=$_SERVER["PHP_SELF"];?>?Action=Col&id=<?=$row_member["id"];?>';}" class="btn btn-pink btn-xs"><i class="fa fa-ban"></i> ระงับการใช้งาน</a>
																							<? }else{ ?>
																								<a href="JavaScript:if(confirm('คุณต้องการเปิดการใช้งาน ?')==true){window.location='<?=$_SERVER["PHP_SELF"];?>?Action=Open&id=<?=$row_member["id"];?>';}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> เปิดใช้งาน</a>
																							<? } ?>
																									<a href="JavaScript:if(confirm('คุณต้องการยืนยันการลาออก ?')==true){window.location='<?=$_SERVER["PHP_SELF"];?>?Action=Out&id=<?=$row_member["id"];?>';}" class="btn btn-inverse btn-xs"><i class="glyphicon glyphicon-off"></i> ลาออก</a>
																						 <? } ?>
																							</td>

									<!--<td>
																								<button class="btn btn-xs">
																											<i class="ace-icon fa fa-truck bigger-110"></i>

																											ดูการส่งสินค้า
																									</button>

										<div class="hidden-md hidden-lg">
											<div class="inline pos-rel">
												<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
													<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
												</button>

												<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
													<li>
														<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
															<span class="blue">
																<i class="ace-icon fa fa-search-plus bigger-120"></i>
															</span>
														</a>
													</li>

													<li>
														<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
															<span class="green">
																<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
															</span>
														</a>
													</li>

													<li>
														<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
															<span class="red">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>-->
								</tr>
																					<? $num++; } ?>
						</tbody>
					</table>
				</div><!-- /.span -->
			</div><!-- /.row -->

		</div>
	</div>
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
