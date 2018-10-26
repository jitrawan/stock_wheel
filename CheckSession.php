<?
if (!isset($_SESSION['fname'])) {
  ?>
        <script>
          alert('Please Login')
         window.location.href = "main_New.php";
        </script>
        <?
}else {
  $now = now();
  
  if ($now > $_SESSION['expire']) {
      session_destroy();
      ?>
      <script>
        alert('SESSION Time Out Please Login!')
        window.location.href = "main_New.php";
      </script>
      <?
  }else {
    ?>
      <script>
        //alert('Wellcome')
       
      </script>
      <?
  }
}



?>
