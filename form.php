<form action="" method="post">
Name: <input type="text" name="nama"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" name="kirim" value="Send">
</form><br>

<?php if(isset($_POST["kirim"])){ ?>
	Welcome, <b><?php echo $_POST["nama"]; ?></b><br>
	Your email : <b><?php echo $_POST["email"];?></b>
<?php } ?>