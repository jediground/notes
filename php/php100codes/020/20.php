<?php
class Root{
 function dayin(){
return "Root print <br>";
}
}
class Son extends Root{
function dayin(){
return root::dayin()."Son print <br>";
}
}
$p=new Son();
echo $p->dayin();


?>
<?php
/*class root{
function dayin(){
return "root print <br>";
}
}
class son extends root{
function dayin2(){
return $this->dayin()."son print <br>";
}
}
$x=new son();
echo $x->dayin2();
*/
?>