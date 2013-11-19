<?php

    echo $uu=array_sum($_POST[gr]);


 
?>
<form action="" method="POST">
ADD <input type="checkbox" name=gr[] value=1 <?php echo  $uu&1? "checked":null;?>>
UPD <input type="checkbox" name=gr[] value=2 <?php echo  $uu&2? "checked":null;?>>
LIS <input type="checkbox" name=gr[] value=4 <?php echo  $uu&4? "checked":null;?>>
DEL <input type="checkbox" name=gr[] value=8 <?php echo  $uu&8? "checked":null;?>>
<input type="submit" value="Ìá½»">
</form>
