<!DOCTYPE html>
<html lang="en">
<head>
  <title>ระบบจัดการสต๊อก ร้านล้อยาง ไว้ใจผม</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  	  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css">
  <link rel="stylesheet" href="assets/css/jquery.gritter.min.css">
  <link rel="stylesheet" href="assets/css/select2.min.css">
  <link rel="stylesheet" href="assets/css/datepicker.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-editable.min.css">
  <link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css">
  <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style">

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
	.content-body{
		border:1px solid #F00;
		margin-left: 260px;
		margin-right: 10px;
		height:560px;
		 width: 82%;
		background-color: lightblue;
   		overflow: auto;
		}
	
footer {
	    text-align: center;
    width: 100%;
    position: fixed;
     bottom: 0%;
}

  </style>
</head>
<body>
  


  
<div>
<? include "header.php"?>
</div>



<div class="container-fluid text-center">
  <div class="">
    <div class="col-sm-2 sidenav">
    <!--เมนูบาซ้าย-->
      <? include "left_menu.php"?>
    </div>


   <div class="content-body">
<?php

if(isset($_GET["page"])){
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






<footer class="footer" style="border:1px solid #000">
 <? include "footer.php"?>
</footer>

</body>
</html>
