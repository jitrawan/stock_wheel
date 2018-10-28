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
									<div style="height: 500px; overflow: scroll;">	
										<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
                                                    	<th class="center" style="width:15%;">ชื่อบริษัท/ร้านค้า</th>
                                                        <th class="center" style="width:10%;">เบอร์โทร</th>
                                                        <th class="center" style="width:10%;">รายการสินค้า</th>
                                                        <th class="center" style="width:10%;">Action</th>
													</tr>
												</thead>
												<tbody>
												<?

													$sql_dealer = "SELECT * FROM dealer where status != 'C' order by date_dealer";
													$st_dealer = mysql_query($sql_dealer);
													while($row_dealer = mysql_fetch_array($st_dealer)){
													?>
													<tr>
                                                    	<td style="text-align: left;"><?=$row_dealer['dealer_name'];?></td>
                                                    	<td class="center"><?=$row_dealer['mobile'];?></td>
                                                        <td class="center">
															<a href="main_New.php?page=form_dealer_product&dealer_id=<?=$row_dealer['dealer_id'];?>" class="btn btn-grey btn-xs"><i class="glyphicon glyphicon-th-list bigger-110"></i> รายการสินค้า</a>
                                                        </td>
														<td>
                                                        	<a href="view_dealer.php?dealer_id=<?=$row_dealer['dealer_id'];?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search bigger-110"></i></a>
                                                            <a href="edit_dealer.php?dealer_id=<?=$row_dealer['dealer_id'];?>" class="btn btn-warning btn-xs"><i class="ace-icon fa fa-pencil-square-o bigger-110"></i></a>
                                                            <? if($_SESSION["status"] == 'ADMIN'){ ?>
                                                            <a href="JavaScript:if(confirm('คุณต้องการลบรายชื่อผุ้จัดจำหน่าย ?')==true){window.location='<?=$_SERVER["PHP_SELF"];?>?Action=Del&dealer_id=<?=$row_dealer["dealer_id"];?>';}" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                                            <? } ?>
                                                        </td>

													</tr>
                                                	
													<? } ?>
												</tbody>
										</table>
										</div>
									
									</div><!-- /.span -->
								</div><!-- /.row -->

							</div>
						</div>
					</div><!-- /.page-content -->


					
