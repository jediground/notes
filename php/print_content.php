<?php
$content = fopen('content.txt',r);
while (!feof($content)){
	echo fgetc($content);
}
?>