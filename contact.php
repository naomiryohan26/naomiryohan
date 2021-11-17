<h2>Contact</h2>
<?php if(isset($_POST["kirim"])){ ?>
	<b style="color: green;">Haloo, <?php echo $_POST["nama"]; ?> (<?php echo $_POST["nim"];?>)!</b>
<?php } ?>
<table class="tabel_kontak">
	<form form action="" method="post">
	<tr>
		<td class="tabel_kontak">
			NIM :
		</td>
		<td class="tabel_kontak">
			<input type="text" name="nim" style="padding: 8px;">
		</td>
	</tr>
	<tr>
		<td class="tabel_kontak">
			NAMA :
		</td>
		<td class="tabel_kontak">
			<input type="text" name="nama" style="padding: 8px; margin-top: 10px;">
		</td>
	</tr>
	<tr>
		<td class="tabel_kontak"></td>
		<td class="tabel_kontak">
			<input type="submit" name="kirim" value="Kirim" style="padding: 7px 20px; margin-top:10px;">
		</td>
	</tr>
	</form>
</table>

<style type="text/css">
	.tabel_kontak{
		border: none !important;
	}

</style>