<html>
<head>
	<title>Регистрация</title>
</head>
    <link  rel="stylesheet" href="CinemaSellstyle.css">
	<header> 
			<center><font size="25">Сервис по продаже билетов в кино CinemaSell</font></center> 
		</header>
		
	<body class="b1">
	<ul class = "menu">
		<p><center><font size="5">Регистрация:</font></center></p>
		<form method="get"> 
			<table><tr>
				<td>Введите логин:</td>
				<td><input type="text" class="b2" name = "login" size = "15" maxlength = "15"></td></tr>
				<tr>
				<td>Введите пароль:</td>
				<td><input type="pass" class="b2" name = "password" size = "15" maxlength = "15"></td></tr>
				</table> 
			<input type="submit" class="b2" name="Submit"  value="Отправить данные"> 
		</form>
		<form align = "left" action ="index.php" method = "post"> 
		<input type="submit" name="index" class="b2" type="submit" value="Назад">
		</ul>
	</body>
</html>
<?php
if (isset($_GET['login'])){ 
$login = $_GET['login'];
$password = $_GET['password'];
$hostname = "localhost";
$username = "root";
$pass = "dwjg3954";
$dbname = "cinemasell";
$table = "users";
$field_login="login";
$field_password="password";

$bd = mysqli_connect($hostname,$username,$pass) OR DIE("ERROR CON "); 
echo "<i>Вы успешно добавлены в базу.</i>";
mysqli_select_db($bd, $dbname) or die (mysqli_error($bd));  			
mysqli_query($bd, "INSERT INTO $table($field_login,$field_password)  
VALUES ('$login','$password')") or die(mysqli_error($bd)); 
		
}
?>
