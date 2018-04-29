<?php
include "nyambung.php";
$sql=mysql_query("INSERT INTO opoae(kd,nm,hrg,stk) values('$_POST[kd]','$_POST[nm]','$_POST[hrg]','$_POST[stk]')"); 
if($sql){
	echo true;
}else{
	echo false;
}		