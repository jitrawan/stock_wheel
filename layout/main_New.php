<!DOCTYPE html>
<html lang="en">

<head>
    <title>ระบบจัดการสต๊อก ร้านล้อยาง ไว้ใจผม</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/New_css/bootstrap.min.css">
    <script src="../assets/New_js/jquery.min.js"></script>
    <script src="../assets/New_js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="Css/select2.min.css">
    <link rel="stylesheet" href="Css/datepicker.min.css">
    <link rel="stylesheet" href="Css/bootstrap-editable.min.css">

    <link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css">
    <link rel="stylesheet" href="ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <style>
        .footer {
            border-radius: 8px;
            width: 91%;
            position: fixed;
            left: 0;
            bottom: 20px;
            background-color: rgb(8, 46, 111);
            color: white;
            text-align: center;
            margin-left: 65px;
            
        }
    </style>
</head>

<body>
<? include "../AllFunction.php"; ?>
    <div>
        <? include "header_New.php"?>
    </div>
    <div class="container-fluid text-center">
        <div class="">
            <div class="content-body">
                <?php

if(isset($_GET["page"])){
  
  checksession();
  $getPage = $_GET["page"];
  if($getPage == 'index'){
    include("index.php");
  }else if($getPage == 'add_member'){
    include("../admin/form_member.php");
  }else if($getPage == 'list_member'){
    include("../admin/list_member.php");
  }else if($getPage == 'addProd'){
    include("../page_function/add_prod.php");
  }else if($getPage == 'supplier'){
    include("../admin/form_supplier.php");
  }else if($getPage == 'list_supplier'){
    include("../admin/list_supplier.php");
  }else if($getPage == 'profile_shop'){
    include("../admin/profile_shop.php");
  }else if($getPage == 'form_buy'){
    include("../admin/form_buy.php");
  }else if($getPage == 'form_location'){
    include("form_location.php");
  }else if($getPage == 'form_dealer_product'){
    include("form_dealer_product.php");
  }
}else{
  include("../admin/profile_shop.php");
  }
?>
            </div>

        </div>
    </div>

    <div class="footer">
    <p style="margin-top: 10px;">ร้านล้อยาง ไว้ใจผม Application © 2017</p>
    </div>

</body>

</html>