<a href='?out=login'>ÍË³ö</a>
<?php
  if($_GET[out]){
  	session_destroy();
    echo "<script language=\"javascript\">location.href='logout_done.php';</script>";
  }
