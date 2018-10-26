<?
if(isset($_GET["Type"])){
    if($_GET["Type"] != 'Logout'){
        include "../CheckSession.php";
    }
}else{
    include "../CheckSession.php";
}
?>
<style>
body{
    
    background-color : #333;
    padding:50px;
}

#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}
</style>

<nav class="navbar navbar-default navbar-inverse" style="border-bottom: 4px solid #1d4084; background-color: rgb(8, 46, 111) !important" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
           <a class="navbar-brand" href="#">ร้านล้อยาง</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">พนักงาน <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="main_New.php?page=add_member">เพิ่มข้อมูลผู้ใช้งาน</a></li>
                        <li><a href="main_New.php?page=list_member">ข้อมูลผู้ใช้งาน</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ผู้จำหน่าย <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="main_New.php?page=supplier">เพิ่มข้อมูลผู้จำหน่าย</a></li>
                        <li><a href="main_New.php?page=list_supplier">ข้อมูลผู้จำหน่าย</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">สั่งซื้อ <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="main_New.php?page=form_buy">เพิ่มข้อมูลสั่งซื้อสินค้า</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">สินค้า<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">ข้อมูลสินค้า</a></li>
                        <li><a href="#">ข้อมูลประเภทสินค้า</a></li>
                        <li><a href="#">ข้อมูลยี่ห้อสินค้า</a></li>
                        <li><a href="#">ข้อมูลรุ่นสินค้า</a></li>
                        <li><a href="#">ข้อมูลขนาดสินค้า</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">เคลม<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">ข้อมูลรับเคลมสินค้า</a></li>
                        <li><a href="#">รายการเคลมสินค้า</a></li>
                    </ul>
                </li>

                <li><a href="main_New.php?page=form_location">shelf</a></li>
                <li><a href="main_New.php?page=profile_shop">เกี่ยวกับ</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
<? if(isset($_SESSION['fname'])){
    if($_SESSION['fname'] == ""){ ?>
    <li class="dropdown">
   <? include "../Login.php"; ?>
                </li>
    <? } else { ?>  
        <li>
            <p class="navbar-text">UserNmae : <?=$_SESSION['fname'];?>  <?=$_SESSION['lname'];?></p>
        </li>
        <li><a href="#" onclick="myFunction()"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
    </li>
    <? } ?>         
<?} else { ?>           
    <li class="dropdown">
    <? include "../Login.php"; ?>
                </li>
    <? } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<script>
function myFunction() {
    var r = confirm("You'r confirm Logout!");
    if (r == true) {
        window.location.href = "../Logout.php";
    } 
    
}
</script>
