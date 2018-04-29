<?php
include "nyambung.php";
$sql=mysql_query("delete from opoae where kd='$_GET[kd]'");
if($sql){
	echo true;
}else{
	echo false;
}	
?>