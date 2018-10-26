<?php
function checksession(){
  if(isset($_SESSION['fname']))
{ 
    if($_SESSION['fname'] == "")
    {
        ?>
        <script>
          alert('Please Login!')
          window.location.href = "main_New.php";
        </script>
        <?
    }
    
}else{
  ?>
  <script>
    alert('Please Login!')
    window.location.href = "main_New.php";
  </script>
  <?
}
}

?>