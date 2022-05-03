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
		 
		<form align = "left" action ="index.php" method = "post"> 
		<input type="submit" name="index" class="b2" type="submit" value="Выйти на главную">
		</ul>
		<br>
	</body>
</html>