<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<script>
$(document).ready(function(){
		
		$("#formlebokno").hide()
		$("#formtokno").load("tokno.php")		
		
		$("#tambah").click(function(){
			$("#formlebokno").toggle() 
		})
		$("#leboknoform").submit(function(x){
			$.ajax({
				url:"simpen.php",
				type:$("#leboknoform").attr("method"),
				data:$("#leboknoform").serialize(),
				success:function(hasil){
					if(hasil==1){
						alert("Data sukses")
						$("#formlebokno").hide()
						$("#formtokno").load("tokno.php")
						$("#kd,#nm,#hrg,#stk").val("")
					}else{
						alert("gagal")
					}
				}
			})
			x.preventDefault()
		})					
})
function busak(id){
	if(confirm("Apakah yakin data ini akan dihapus ?")){
		$.ajax({
			url:"busak.php",
			type:"GET",
			data:"kd="+id,
			success:function(hasil){
				if(hasil==1){
					$("#brs_"+id).remove();
				}else{
					alert("gagal")
				}
			}
		})			
	}
}
function formganti(id){
		$("#formlebokno").hide()
		$.ajax({
			url:"formganti.php",
			type:"GET",
			data:"id="+id,
			success:function(hasil){
				if(hasil==0){
					alert("Gagal")
				}else{	
					$("#formganti").show()
					$("#formganti").html(hasil)
				}
			}
		})			
}
</script>
</head>
<body>
<button id="tambah">ADD DATA</button>
<div id="formlebokno">
<form id="leboknoform" method="post">
	<table>
		<tr><td>KODE</td><td><input type="text" id="kd" name="kd"></td></tr>
		<tr><td>NAMA BARANG</td><td><input type="text" id="nm" name="nm"></td></tr>
		<tr><td>HARGA</td><td><input type="text" id="hrg" name="hrg"></td></tr>
		<tr><td>STOK</td><td><input type="text" id="stk" name="stk"></td></tr>
		<tr><td><button type="submit">SAVE</button></td></tr>
	</table>
</form>	
</div>
<div id="formganti"></div>
<div id="formtokno"></div>	
</body>
</html>
