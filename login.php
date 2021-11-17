<?php 
session_start(); 

if(isset($_POST['kirim'])){
	if(($_POST['user']=='admin')and($_POST['pass']=='admin')){
		$_SESSION["login"] = $_POST['user'];
		echo "Anda Berhasil Login. <a href='login.php?logout'>Logout</a><br><br>";
	}
	else{
		echo"Username & Password Salah <br><br>
		<form action='' method='post'>
		Username: <input type='text' name='user'><br><br>
		Password: <input type='password' name='pass'><br><br>
		<input type='submit' name='kirim' value='Login'>
		</form>"; 
	}
}
else if(isset($_GET['logout'])){ 
	unset($_SESSION['login']);
}
else if($_SESSION['login']!=""){
	echo "Anda Berhasil Login. <a href='login.php?logout'>Logout</a><br><br>";
}
else{ ?>
	<form action="" method="post">
	Username: <input type="text" name="user"><br><br>
	Password: <input type="password" name="pass"><br><br>
	<input type="submit" name='kirim' value='Login'>
	</form>
<?php }
?>