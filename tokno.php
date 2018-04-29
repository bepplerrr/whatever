<?php
include "nyambung.php";
$sql=mysql_query("select * from opoae");
?>
<table border=1 id="tabel1">
	<tr><th>KODE</th><th>NAMA BARANG</th><th>HARGA</th><th>STOK</th><th>AKSI</th></tr>
<?php
while($r=mysql_fetch_array($sql)){		
	echo"<tr id='brs_$r[id]'>
		<td>$r[kd]</td>
		<td>$r[nm]</td>
		<td>$r[hrg]</td>
		<td>$r[stk]</td>
		<td><a href='#' onclick='formganti($r[id])'>EDIT</a> 
		<a href='#' onclick='busak($r[id])'>DELETE</a></td>
		</tr>";
}
?>		
</table>

