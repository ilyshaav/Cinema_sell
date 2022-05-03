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
<center><font size="5">Добавление билета:</font></center>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="addticket" method="GET"> 
			<font size="4">Название фильма:</font> <input class="b2" type="text" name="film" size="30"><br>
			<font size="4">Жанр:</font> <input class="b2" type="text" name="genre" size="43"> <br>
			<font size="4">Дата:</font> <input class="b2" type="date" name="date" size="44"> <br>
			<font size="4">Ряд:</font> <input class="b2" type="text" name="grid" size="2"> <br>
			<font size="4">Место:</font> <input type="text" class="b2" name="sit" size="2"> <br>
			<font size="4">Название кинотеатра:</font> <input class="b2" type="text" name="cinema" size="28"><br>
			<font size="4">Адрес кинотеатра:</font> <input type="text" class="b2" name="adress" size="31"><br>
			<input name="submit" class="b2" type="submit" name="Выложить билет">  
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
		if (isset($_GET['film'])) 
		{
			$hostname = "localhost"; 
			$username = "root"; 
			$password = "dwjg3954"; 
			$dbName = "cinemasell"; 
			$itemstable="tickets";

			$film="film";
			$genre="genre";
			$date="date";
			$grid="grid";
			$sit="sit";
			$cinema="cinema";
			$adress="adress";

			$cl_film = $_GET['film'];
			$cl_genre = $_GET['genre'];
			$cl_date = $_GET['date'];
			$cl_grid = $_GET['grid'];
			$cl_sit = $_GET['sit'];
			$cl_cinema = $_GET['cinema'];
			$cl_adress= $_GET['adress'];
			
				$t=mysqli_connect($hostname,$username,$password) OR DIE("ERROR CON "); 	
				
				mysqli_select_db($t,$dbName) or die(mysqli_error());  
				mysqli_set_charset( $t,'utf8' );
				
				$query = "INSERT INTO $itemstable($film,$genre,$date,$grid,$sit,$cinema,$adress) VALUES ('$cl_film','$cl_genre','$cl_date','$cl_grid','$cl_sit','$cl_cinema','$cl_adress')"; 
				mysqli_query($t,$query) or die(mysqli_error($t)); 
				
				mysqli_close($t); 
			
		}
?>
	