<?include "../CheckSession.php";?>
<style>

.top-container {
  background-color: #f1f1f1;
  padding: 5px;
  text-align: center;
}

</style>
<div class="top-container">
    <h1>ล้อยาง ไว้ใจผม</h1>      
    <p>ระบบจัดการสต็อกและเคลมสินค้ายางรถยนต์และแม็ก</p>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="">
    
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">UserName : <?=$_SESSION['fname'];?>  <?=$_SESSION['lname'];?></a></li>
        <li><a href="../Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
