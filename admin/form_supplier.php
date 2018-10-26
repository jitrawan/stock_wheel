<? include '../connectDb.php'; ?>

    <script language="javascript">
        // Start XmlHttp Object
        function uzXmlHttp() {
            var xmlhttp = false;
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    xmlhttp = false;
                }
            }

            if (!xmlhttp && document.createElement) {
                xmlhttp = new XMLHttpRequest();
            }
            return xmlhttp;
        }
        // End XmlHttp Object

        function data_show(select_id, result) {
            var url = 'data.php?select_id=' + select_id + '&result=' + result;
            //alert(url);

            xmlhttp = uzXmlHttp();
            xmlhttp.open("GET", url, false);
            xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
            xmlhttp.send(null);
            document.getElementById(result).innerHTML = xmlhttp.responseText;
        }
        //window.onLoad=data_show(5,'amphur');
    </script>

    <script language="JavaScript">
        function chkNumber(ele) {
            var vchar = String.fromCharCode(event.keyCode);
            if ((vchar < '0' || vchar > '9')) {
                alert("กรอกเฉพาะตัวเลขเท่านั้น !!");
                document.add_supplier.mobile.focus();
                return false;
            } else {
                ele.onKeyPress = vchar;
            }
        }
    </script>

    <script language="javascript">
        function checkForm() {
            var txtForJs2 = document.add_supplier.mobile.value;
            var txtForJs2c = document.add_supplier.contact_mobile.value;
            if (txtForJs2.length < 9) {
                alert("กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง");
                document.add_supplier.mobile.focus();
                return false;
            }
            if (txtForJs2c.length < 9) {
                alert("กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง");
                document.add_supplier.contact_mobile.focus();
                return false;
            }
            document.add_supplier.submit();
        }
    </script>

    <div class="page-content">

        <div class="page-header">
            <h1>ข้อมูลผู้จำหน่ายสินค้า
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i> กรอกข้อมูล
				</small>
			</h1>
        </div>
        <!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <form name="add_supplier" action="add_supplier.php" method="post" enctype="multipart/form-data" onsubmit="checkForm(); return false;">
                    <div>
                        <div id="user-profile-1" class="user-profile row">
                            <div class="col-xs-12 col-sm-3 center">
                                <div>
                                    <script language="JavaScript">
                                        function showPreview(ele) {
                                            $('#imgAvatar').attr('src', ele.value); // for IE
                                            if (ele.files && ele.files[0]) {

                                                var reader = new FileReader();

                                                reader.onload = function(e) {
                                                    $('#imgAvatar').attr('src', e.target.result);
                                                }

                                                reader.readAsDataURL(ele.files[0]);
                                            }
                                        }
                                    </script>
                                    <span class="profile-picture">
                                                    <img id="imgAvatar" class="editable img-responsive" src="assets/avatars/profile-pic.jpg" />
												</span>
                                    <span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."></span>
                                    <input type="file" id="input-dim-1" accept="image/*" name="applicant_files" style="margin-top: 20px; margin-left: 60px;" OnChange="showPreview(this)">
                                    </span>

                                    <div class="space-4"></div>

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-9">

                                <div class="profile-user-info profile-user-info-striped">
                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> รหัสบริษัท/ร้านค้า </div>

                    <?
                        $SQLmaccode = "SELECT max(dealer_code) as Maxdea FROM dealer";
                        $objQuerygmac = mysql_query($SQLmaccode) or die ("Error Query [".$SQLmaccode."]");
                        $row = mysql_fetch_array($objQuerygmac);
                        $setCode = "";
                        $getCode = "";
                            if($row['Maxdea'] != null){
                                $setCode = substr($row['Maxdea'],1,4);
                                $setCode = (int)$setCode + 1;
                                if($setCode < 10){
                                    $getCode = "D000".$setCode;
                                }else if($setCode < 100){
                                    $getCode = "D00".$setCode;
                                }else if($setCode < 1000){
                                    $getCode = "D0".$setCode;
                                }else if($setCode > 1000){
                                    $getCode = "D".$setCode;
                                }
                            }else{
                                $getCode = "D0001";
                            }
                    ?>

                    <div class="profile-info-value">
                    <input type="text" name="dealer_code" value="<? echo $getCode ?>" class="col-xs-5 col-sm-5" readonly required>
                    </div>
                    </div>
                    <div class="profile-info-row">
                    <div class="profile-info-name"> ชื่อบริษัท/ร้านค้า </div>

                    <div class="profile-info-value">
                    <input type="text" name="dealer_name" value="film" class="col-xs-5 col-sm-5" placeholder="ชื่อบริษัท/ร้านค้า" required>
                    </div>
                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> ที่อยู่ </div>

                                        <div class="profile-info-value">
                                            <textarea name="address" class="col-xs-12 col-sm-12" required>123</textarea>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> </div>

                                        <div class="profile-info-value">
                                            
																												<select id="provinces" name="provinces" required onchange="data_show(this.value,'amphures');">
                                                          <option selected value="">--เลือกจังหวัด--</option>
                                                          <?php
                                                          $strSQLg = "SELECT * FROM provinces ORDER BY PROVINCE_NAME ASC ";
                                                          $objQueryg = mysql_query($strSQLg) or die ("Error Query [".$strSQLg."]");
                                                          while($objResultg = mysql_fetch_array($objQueryg))
                                                          {
                                                          ?>
                                                          <option value="<?php echo $objResultg["PROVINCE_ID"];?>"><?=$objResultg["PROVINCE_NAME"];?></option>
                                                          <?php
                                                          }
                                                          ?>
                                                      </select>


                                                      <select name="amphures" id="amphures" onchange="data_show(this.value,'districts');">
                                                            <option value="">--เลือกอำเภอ--</option>
                                                      </select>
                                                      <select name="districts" id="districts" required="" onchange="data_show(this.value,'zipcodes');">
                                                            <option value="">--เลือกตำบล--</option>
                                                      </select>
                                                       <select name="zipcodes" id="zipcodes" required="">
                                                            <option value="">--รหัสไปรษณีย์--</option>
                                                      </select>

													</div>
												</div>


                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> เบอร์โทรศัพท์ </div>

                                        <div class="profile-info-value">
                                            <input type="text" value="0917099645" name="mobile" class="col-xs-5 col-sm-5" placeholder="เบอร์โทรศัพท์" OnKeyPress="return chkNumber(this)" maxlength="10" required>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> ชื่อผู้ติดต่อ </div>

                                        <div class="profile-info-value">
                                            <input type="text" value="film" name="contact" class="col-xs-5 col-sm-5" placeholder="ชื่อผู้ติดต่อ" required>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> ID Line </div>

                                        <div class="profile-info-value">
                                            <input type="text" name="idline" value="film" class="col-xs-5 col-sm-5" placeholder="ID Line" required>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> อีเมลล์ </div>

                                        <div class="profile-info-value">
                                            <input type="email" name="email" value="film@gmail.com" class="col-xs-5 col-sm-5" placeholder="อีเมลล์" required>
                                        </div>
                                    </div>
                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> เบอร์ติดต่อ </div>

                                        <div class="profile-info-value">
                                            <input type="text" value="0917099645" name="contact_mobile" class="col-xs-5 col-sm-5" placeholder="เบอร์ติดต่อ" OnKeyPress="return chkNumber(this)" maxlength="10" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="space-20"></div>
                                <div align="center">
                                    <button class="btn btn-success" type="submit">
                                        <i class="ace-icon fa fa-check bigger-110"></i> บันทึก
                                    </button>
                                    <a href="list_dealer.php">
                                        <button class="btn btn-danger" type="button" onclick="window.history.back();">
                                            <i class="ace-icon fa fa-undo bigger-110"></i> ยกเลิก
                                        </button>
                                    </a>
                                </div>
							</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>