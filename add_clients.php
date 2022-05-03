<html>
	<head>
	<title>Главная страница</title>
	</head>
	<header> 
		<center><font size="25">Сервис по продаже билетов в кино CinemaSell</font></center>
		<ul class = "menuR">
		<li><a href="information.php">О сервисе</a></li>
		<li><a href="contacts.php">Контакты</a></li>
		</ul>
	</header>
    <link  rel="stylesheet" href="CinemaSellstyle.css">
<body class="b1">
<ul class = "menuT">
<p><center><font size="5">Заполнение профиля:</font></center></p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="addclients" method="GET"> 
			<font size="4">Фамилия:</font> <input type="text" name="F" class="b2" size="50"> <br>
			<font size="4">Имя:</font> <input type="text" name="I" class="b2" size="50"> <br>
			<font size="4">Отчество:</font> <input type="text" name="O" class="b2" class="b2" size="50"> <br>
			<font size="4">Email</font> <input type="text" name="email" class="b2" size="50"> <br>
			<font size="4">Телефон:</font> <input type="text" name="Telefon" class="b2" size="12">
			<br>
			<br>			
			<input name="submit"  class="b2" type="submit" name="Заполнить профиль">  
		</form>
	</ul>
	
	<body>
		<ul class = "menu">
		 <li>Клиенты:
		  <ul>
		   <li><a href="all_clients.php">Все клиенты</a></li>
		   <li><a href="add_clients.php">Заполнить профиль</a></li>
		   <li><a href="delete_clients.php">Удалить профиль</a></li>
		  </ul>
		 </li>
		 <li>Билеты:
		  <ul>
		   <li><a href="all_tickets.php">Все Билеты</a></li>
		   <li><a href="add_ticket.php">Добавить Билет</a></li>
		   <li><a href="order_a_ticket.php">Заказать билет</a></li>
		  </ul>
		 </li>
		 <li>Отзывы:
		  <ul>
		   <li><a href="all_reviews.php">Вывести отзывы</a></li>
		   <li><a href="add_reviews.php">Добавить отзыв</a></li>
		  </ul>
		 </li>
		
		<li>
		<form align = "left" action ="menu.php" method = "post"> 
		<input type="submit" name="menu" class="b2" type="submit" value="Вернуться в меню">
		</li>
		
		
		</ul>
		<br>
	</body>
</html>





<?php
		header( 'Content-Type: text/html; charset=utf-8' );
		if (isset($_GET['F'])) 
		{
			$hostname = "localhost"; 
			$username = "root"; 
			$password = "dwjg3954"; 
			$dbName = "cinemasell"; 
			$itemstable="clients";
			
			$F="SecondName";
			$I="FirstName";
			$O="Patronymic";
			$email="email";
			$Telefon="Phone";
			
			$cl_F = $_GET['F'];
			$cl_I = $_GET['I'];
			$cl_O = $_GET['O'];
			$cl_email = $_GET['email'];
			$cl_Phone = $_GET['Telefon'];
			
			$t=mysqli_connect($hostname,$username,$password) OR DIE("ERROR CON "); 	
				
			mysqli_select_db($t,$dbName) or die(mysqli_error());  
			mysqli_set_charset( $t,'utf8' );
				
			$query = "INSERT INTO $itemstable ($F,$I,$O,$Telefon,$email) VALUES ('$cl_F','$cl_I','$cl_O','$cl_Phone','$cl_email')"; 
			mysqli_query($t,$query) or die(mysqli_error($t)); 
			$query = "SELECT id FROM $itemstable WHERE $F='$cl_F'"; 
				
				
			$result = mysqli_query($t,$query) or die(mysqli_error());
			while ($row = mysqli_fetch_object($result)) {
				echo '<table class="menuT"><tr><th><b>Профиль успешно заполннен';
			}
				
			mysqli_close($t); 
		}
		
?>
	