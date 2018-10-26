<?
session_start();
if (!isset($_SESSION['fname'])) {
  ?>
        <script>
          alert('Please Login!')
          window.location.href = "main_New.php";
        </script>
        <?
}else {
  $now = time();

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
