<html>
	<head>
	<title>Авторизация</title>
	<link  rel="stylesheet" href="CinemaSellstyle.css">
	</head>
		<header> 
			<center><font size="25">Сервис по продаже билетов в кино CinemaSell</font></center> 
			<ul class = "menuR">
		<li><a href="information.php">О сервисе</a></li>
		<li><a href="contacts.php">Контакты</a></li>
		</ul>
		</header>
		
	<div id = "bg"></div>
	<ul class = "menu">
		<body class="b1">
		<center><font size="10"><label>Авторизация:</label></font></center> 
			<form method = "post"> 
				<p>Введите логин: <input type="text" class="b2" name = "loginn"/></p>
				<p>Введите пароль: <input type="password" class="b2" name = "passw" /></p>
				<input type="submit" name = "pass" class="b2"  type="submit" value="Войти в систему">
				<p>
				<label>Еще не зарегистрированы?</label>
				<li><a href="registration.php">Зарегистрироваться тут</a></li>
				</p>
			</form>
		</body>
	</ul>
</html>


<?php
If (isset($_POST['loginn']))
{
$db = mysqli_connect('localhost','root','dwjg3954',"cinemasell") or die ("Не удалось установить соединение!");
mysqli_select_db($db, "cinemasell") or die ("Не удалось установить соединение с базой данных");

$result=mysqli_query($db, "SELECT login, password FROM users GROUP BY id") or die (mysqli_error());
$array = mysqli_fetch_array($result);

do{
$x = True;
IF ($_POST['loginn'] == $array['login'] && $_POST['passw'] == $array['password'])
	{
		header("Location: menu.php");
		$x=False;
	}
}
while($array=mysqli_fetch_array($result));
If ($x = True)
{
	echo "Логин или пароль введены неверно. Введите данные повторно.";
}
}
?>
