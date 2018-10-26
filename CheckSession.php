<?
session_start();
if(isset($_SESSION['fname']))
{ 
    if($_SESSION['fname'] == "")
    {
        ?>
        <script>
          alert('Please Login!')
          window.location.href = "layout/main_New.php";
        </script>
        <?
        //exit();
    }
    
}else{
    ?>
  <script>
    //alert('Please Login!')
    //window.location.href = "../Logout.php";
  </script>
  <?
  //exit();
}


?>
