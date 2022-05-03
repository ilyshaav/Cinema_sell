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
		
	
	<ul class = "menuT">
	<li>Добавление отзыва:</li>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="addreviews" method="GET"> 
			<font size="4">Имя:</font> <input type="text" name="name" class="b2" size="40"> <br>
			<font size="4">Отзыв:</font> <input type="text" name="description" class="b2" size="40"> <br>
			<font size="4">Оценка:</font> <input type="text" name="mark" class="b2"  size="15"> <br>
			<br>		
			<input name="submit" class="b2" type="submit" name="Добавить клиента">  
		</form>
	</ul>
	
		
		
		
<?php
		header( 'Content-Type: text/html; charset=utf-8' );
		if (isset($_GET['name'])) 
		{	
			$cl_name = $_GET['name'];
			$cl_description = $_GET['description'];
			$cl_mark=$_GET['mark'];
			
			$hostname = "localhost"; 
			$username = "root"; 
			$password = "dwjg3954"; 
			$dbName = "cinemasell"; 
			$itemstable="reviews";
			
			$mark="mark";
			$name="name";
			$description="description";
			
			$t=mysqli_connect($hostname,$username,$password) OR DIE("ERROR CON "); 	
				
			mysqli_select_db($t,$dbName) or die(mysqli_error());  
			mysqli_set_charset( $t,'utf8' );
				
			$query = "INSERT INTO $itemstable (name,description,mark) VALUES ('$cl_name','$cl_description','$cl_mark')"; 
			mysqli_query($t,$query) or die(mysqli_error($t)); 
			
		}
?>
		