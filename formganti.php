<script type="text/javascript" src="jquery.js"></script>
<script>
$(document).ready(function(){
		$("#gantiform").submit(function(x){
			$.ajax({
				url:"ganti.php",
				type:$("#gantiform").attr("method"),
				data:$("#gantiform").serialize(),
				success:function(hasil){
					if(hasil==1){
						alert("Data sukses")
						$("#formtokno").load("tokno.php")
						$("#formganti").hide()
						$("#kd,#nm,#hrg,#stk").val("")
					}else{
						alert("gagal")
					}
				}
			})
			x.preventDefault()
		})					
})
</script>
<?php
include "nyambung.php";
$sql=mysql_query("SELECT * FROM opoae WHERE id='$_GET[id]'"); 
if(mysql_num_rows($sql)>0){
$r=mysql_fetch_array($sql);
?>
<form id="gantiform" method="post" action="#">
<input type="hidden" id="id" name="id" value="<?php echo $r['id'];?>">
	<table>
		<tr><td>KODE</td><td><input type="text" id="kd" name="kd" value="<?php echo $r['kd'];?>"></td></tr>
		<tr><td>NAMA BARANG</td><td><input type="text" id="nm" name="nm" value="<?php echo $r['nm'];?>"></td></tr>
		<tr><td>HARGA</td><td><input type="text" id="hrg" name="hrg" value="<?php echo $r['hrg'];?>"></td></tr>
		<tr><td>STOK</td><td><input type="text" id="stk" name="stk" value="<?php echo $r['stk'];?>"></td></tr> 
		<tr><td></td></tr>
		<tr><td><button type="submit">UPDATE</button></td></tr>
	</table>
</form>	
<?php
}else{
	echo false;
}
?>	