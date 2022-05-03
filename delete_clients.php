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
<center><font size="5">Удаление профиля:</font></center>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="order_a_ticket" method="GET"> 
			<font size="4">Введите ID:</font> <input class="b2" type="text" name="id" size="30"><br>
			<font size="4">Фамилия:</font> <input class="b2" type="text" name="SN" size="43"> <br>
			<input name="submit" class="b2" type="submit" name="Заказать">  
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
			$hostname = "localhost"; 
			$username = "root"; 
			$password = "dwjg3954"; 
			$dbName = "cinemasell"; 
			$itemstable="clients";
			
			$id_users="id";
			$cl_users= $_GET['id'];
			$t=mysqli_connect($hostname,$username,$password) OR DIE("ERROR CON "); 	
				mysqli_select_db($t,$dbName) or die(mysqli_error());  
				mysqli_set_charset( $t,'utf8' );
				$query = "DELETE FROM $itemstable WHERE $id_users='$cl_users'"; 
				mysqli_query($t,$query) or die(mysqli_error($t)); 
?>
 