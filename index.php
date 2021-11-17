<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Naomi Ryohan</title>
</head>
<body>
<center>
	<table style="background-color: white !important;">
		<tr>
			<td colspan="3" class="textcenter p-20" style="background-color: #00ACDE;">
				<h1>INFORMATIKA</h1>
			</td>	
		</tr>
		<tr>
			<td colspan="3" class="textcenter p-20" style="background-color: #565656;">
				<a href='index.php' class="navbar">Home</a>
				<a href='index.php?about' class="navbar">About</a>
				<a href='index.php?contact' class="navbar">Contact</a>
				<a href='index.php?example' class="navbar">Example</a>
			</td>
		</tr>
		<tr valign="top">
			<td  class="tabel_kanan p-20">
				<?php
				if(isset($_GET['about'])){
					//echo "<h2>About</h2>";
					include"about.php";
				}
				else if(isset($_GET['contact'])){
					//echo "<h2>Contact</h2>";
					include"contact.php";
				}
				else if(isset($_GET['example'])){
					//echo "<h2>Example</h2>";
					include"example.php";
				}
				else
				{
				?>
						<h2>Home</h2>
						<img src='https://www.wallpapers13.com/wp-content/uploads/2016/05/Beautiful-scenery-Nature-Landscape-from-Norway-HD-Wallpaper2880x1800.jpg'>
						<p style='font-size:10pt;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<?php
				}	
				?>
			</td>
			<td class="tabel_kiri p-20" style="width: 250px;">
				<h3>Tutorial</h3>
				<a href='#' class="tutorial_link f-10">Variabels</a><br>
				<a href='#' class="tutorial_link f-10">Data types</a><br>
				<a href='#' class="tutorial_link f-10">Data types</a><br>
				<a href='#' class="tutorial_link f-10">Condition</a><br>
				<a href='#' class="tutorial_link f-10">Looping</a><br>
				<a href='#' class="tutorial_link f-10">Array</a><br>

				<h3>Login</h3>

<?php
				

				if(isset($_POST['kirim'])){
					if(($_POST['user']=='admin')and($_POST['pass']=='admin')){
						$_SESSION["login"] = $_POST['user'];
						echo "Anda Berhasil Login. <a href='index.php?logout'>Logout</a><br><br>";
					}
					else{
						echo"Username & Password Salah <br><br>
						<form action='' method='post'>
						<p class='f-10'> Name: </p><input type='text' name='nama' style='padding: 8px;'><br>
						<p class='f-10'> E-mail: </p><input type='text' name='email' style='padding: 8px;'><br>
						<input type='submit' name='kirim' value='Login' style='padding: 7px 20px; margin-top:10px;'>
						</form>"; 
					}
				}
				else if(isset($_GET['logout'])){ 
					unset($_SESSION['login']);
					?>
					<form action="" method="post">
					<p class="f-10"> Username: </p><input type="text" name="user" style="padding: 8px;"><br>
					<p class="f-10"> Password: </p><input type="text" name="pass" style="padding: 8px;"><br>
					<input type="submit" name="kirim" value="Login" style="padding: 7px 20px; margin-top:10px;">
					</form>
					<?php
				}
				else if($_SESSION['login']!=""){
					echo "Anda Berhasil Login. <a href='index.php?logout'>Logout</a><br><br>";
				}
				else{
				?>
					<form action="" method="post">
					<p class="f-10"> Username: </p><input type="text" name="user" style="padding: 8px;"><br>
					<p class="f-10"> Password: </p><input type="text" name="pass" style="padding: 8px;"><br>
					<input type="submit" name="kirim" value="Login" style="padding: 7px 20px; margin-top:10px;">
					</form>

			<?php
				}
			?>

			
			</td>
		</tr>
	</table>
</center>
</body>
</html>

<style type="text/css">
	body{
		font-family: Poppins;
		background-image: url("https://cdn.pixabay.com/photo/2021/04/10/18/17/doodle-6167833_1280.jpg");
	}

	table{
		border : 1px solid black;
		width: 60%;
	}

	img{
		width: 100%;
	}

	td{
		border : 1px solid black;
	}

	.textcenter{
		text-align: center;
	}

	.p-20{
		padding: 20px;
	}

	.navbar{
		text-decoration: none !important;
		color: white;
		padding: 15px;
		margin : 15px;
	}

	.tutorial_link{
		text-decoration: none !important;
		color: #00ACDE;
	}

	.navbar:hover{
		background-color: #161616;
	}

	.tabelkanan{
		width: 90% !important;
	}

	.tabelkiri{
		width: 30% !important;
	}

	.f-10{
		font-size:10pt;
	}
</style>

