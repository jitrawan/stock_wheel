<?
session_start();
if (!isset($_SESSION['fname'])) {
  ?>
        <script>
          alert('Please Login!1')
          window.location.href = "main_New.php";
        </script>
        <?
}else {
  $now = time();

  if ($now > $_SESSION['expire']) {
      session_destroy();
      ?>
      <script>
        alert('Please Login!2')
        window.location.href = "main_New.php";
      </script>
      <?
  }else {
    ?>
      <script>
        alert('Wellcome')
       
      </script>
      <?
  }
}



?>
