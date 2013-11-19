<?php

$arr = 'Life was like a box of choclates,you never know what you\'are gonna get!';
//echo substr($arr,0,20) . '...';



function str_cut($arr){
	return substr($arr,0,14) . '...';	
}

echo str_cut($arr);


?>