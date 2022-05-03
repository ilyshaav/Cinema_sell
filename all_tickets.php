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
		$itemstable="tickets";
		
		$id_tickets="id_tickets";
		$film="film";
		$genre="genre";
		$date="date";
		$grid="grid";
		$sit="sit";
		$cinema="cinema";
		$adress="adress";
		
		$t=mysqli_connect($hostname,$username,$password) OR DIE("CON ERROR "); 
		mysqli_select_db($t,$dbName) or die(mysqli_error());  
		mysqli_set_charset($t,'utf8');
		
		$query = "SELECT * FROM $itemstable"; 
		$result = mysqli_query($t,$query) or die(mysqli_error());
		
		echo '<center>';
		echo '<table class="menuT"><caption></caption><tr><th><b>№</b></th><th><b>Название фильма</b></th><th><b>Жанр</b></th><th><b>Дата</b></th><th><b>Ряд</b></th><th><b>Место</b></th><th><b>Название Кинотеатра</b></th><th><b>Адрес кинотеатра</b></th></tr></tr>';
		echo '</center>';
		$query = "SELECT * FROM $itemstable"; 
		$result = mysqli_query($t,$query) or die(mysqli_error());
		
		 while ($row = mysqli_fetch_array($result))
		{
			echo '<tr align="center">
			<td><b>'.$row[0].'</b></td>
			<td>'.$row[1].'</td>
			<td>'.$row[2].'</td>
			<td>'.$row[3].'</td>
			<td>'.$row[4].'</td>
			<td>'.$row[5].'</td>
			<td>'.$row[6].'</td>
			<td>'.$row[7].'</td>';
		}
		
		
		
		
		
		
		?>
        
		