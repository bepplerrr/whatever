<?php
include "nyambung.php";
$sql=mysql_query("UPDATE opoae SET kd='$_POST[kd]',nm='$_POST[nm]',hrg='$_POST[hrg]',stk='$_POST[stk]' WHERE id='$_POST[id]'"); 
if($sql){
	echo true;
}else{
	echo false;
}		


		