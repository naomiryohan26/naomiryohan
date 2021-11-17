<h2>Example</h2>
<?php
	if(isset($_POST["proses"])){ 
?>
	<b style="color: green;">Output :</b>
<?php 
	$raw = $_POST['example_text'];

	$array = explode(" ", $raw);
	$n = count($array);
	if($n == 1){
		echo "<p style='color: red;''>HARUS LEBIH DARI SATU KATA</p>";
	}else{
		$num = count($array);
		for($x = $num ; $x >= 1; $x--){
			$cetak += $array[$x]. " ";
		}

		echo $cetak;
		
	}
} 
?>
<table class="tabel_kontak">
	<form form action="" method="post">
	<tr>
		<td class="tabel_kontak">
			<i style="font-size: 10pt;">Masukkan kalimat pada kolom dibawah ini:</i>
		</td>
	</tr>
	<tr>
		<td class="tabel_kontak">
			<textarea style="width: 100% !important; height: 100px;" name="example_text"></textarea>
		</td>
	</tr>
	<tr>
		<td class="tabel_kontak">
			<input type="submit" name="proses" value="Proses" style="padding: 7px 20px; margin-top:10px;">
		</td>
	</tr>
	</form>
</table>

<style type="text/css">
	.tabel_kontak{
		border: none !important;
	}

</style>