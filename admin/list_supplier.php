<? include "../connectDb.php"; ?>


<div class="page-content">

						<div class="page-header">
							<h1>
								รายชื่อผู้จำหน่าย
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
                                                    	<th class="center" style="width:10%;">รูป</th>
                                                    	<th class="center" style="width:15%;">ชื่อบริษัท/ร้านค้า</th>
                                                        <th class="center" style="width:35%;">ที่อยู่</th>
                                                        <th class="center" style="width:10%;">เบอร์โทร</th>
                                                        <th class="center" style="width:10%;">รายการสินค้า</th>
                                                        <th class="center" style="width:10%;">-</th>
													</tr>
												</thead>
                                                <?
													if($_GET["Action"] == "Del")
													  {
														  $strSQL = "update dealer set status = 'C' ";
														  $strSQL .="WHERE dealer_id = '".$_GET["dealer_id"]."' ";
														  $stmt = mysql_query($strSQL);
														  if( $stmt === false ) {
															   die( print_r( mysql_query($strSQL), true));
														  }
														  $sql_log = "INSERT INTO log (id, name_member, date_log, detail_log) VALUES (NULL, '".$_SESSION["fname"]."', NOW(), '".ลบรายชื่อผู้จำหน่ายสินค้ารหัส.$_GET["id"]."')";
											  			  $obj_log = mysql_query($sql_log);
													  }

													$sql_dealer = "SELECT * FROM dealer where status != 'C'";
													$st_dealer = mysql_query($sql_dealer);

												?>

												<tbody>
                                                	<?
														$num = 1;
														while($row_dealer = mysql_fetch_array($st_dealer)){

															$sql_1 = "SELECT * FROM provinces WHERE PROVINCE_ID = '".$row_dealer['provinces']."' ";
															$result_1 = mysql_query($sql_1);
															$row_1 = mysql_fetch_array($result_1);
															$province_name = $row_1['PROVINCE_NAME'];

															$sql_2 = "SELECT * FROM amphures WHERE AMPHUR_ID =  '".$row_dealer['amphures']."'  ";
															$result_2 = mysql_query($sql_2);
															$row_2 = mysql_fetch_array($result_2);
															$amphur_name = $row_2['AMPHUR_NAME'];

															$sql_3 = "SELECT * FROM districts WHERE DISTRICT_CODE =  '".$row_dealer['districts']."'  ";
															$result_3 = mysql_query($sql_3);
															$row_3 = mysql_fetch_array($result_3);
															$district_name = $row_3['DISTRICT_NAME'];

															$address = $row_dealer[address].' ต.'.$district_name.' อ.'.$amphur_name.' จ.'.$province_name.' '.$row_dealer['zipcode'];
													?>
													<tr>
                                                    	<td class="center"><img src="<?=$row_dealer[pic];?>" style="width:100%;"></td>
                                                        <td><?=$row_dealer[dealer_name];?></td>
                                                    	<td><?=$address;?></td>
														<td class="center"><?=$row_dealer[mobile];?></td>
                                                        <td class="center">
															<a href="list_dealer_product.php?dealer_id=<?=$row_dealer[dealer_id];?>" class="btn btn-grey btn-xs"><i class="glyphicon glyphicon-th-list bigger-110"></i> รายการสินค้า</a>
                                                        </td>
														<td>
                                                        	<a href="view_dealer.php?dealer_id=<?=$row_dealer[dealer_id];?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search bigger-110"></i></a>
                                                            <a href="edit_dealer.php?dealer_id=<?=$row_dealer[dealer_id];?>" class="btn btn-warning btn-xs"><i class="ace-icon fa fa-pencil-square-o bigger-110"></i></a>
                                                            <? if($_SESSION["status"] == 'ADMIN'){ ?>
                                                            <a href="JavaScript:if(confirm('คุณต้องการลบรายชื่อผุ้จัดจำหน่าย ?')==true){window.location='<?=$_SERVER["PHP_SELF"];?>?Action=Del&dealer_id=<?=$row_dealer["dealer_id"];?>';}" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
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
