<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Enter.css">
    </style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $base = "xakaton";

        $conn = mysqli_connect($host, $user, $pass, $base);


    ?>
	<div class="Main">
		<div class="window">
			<div class="categ">
				<h4 class="ms-5">РЕГИСТРАЦИЯ</h4>
			</div>
			<div class="inputs">
				<?php 
					if($_POST['reg'] == 'Войти')
					{
						$login = $_POST['name1'] + " " + $_POST['name2'] + " " + $_POST['name3'];
						$pass1 = $_POST['pass1'];

						$query = "SELECT * FROM `users` WHERE `username` = '$login' AND `password` = '$pass1'";
						$result = mysqli_query($conn, $query);
						$num = mysqli_num_rows($result);
						$row = mysqli_fetch_array($result);

						if($num == 1){
							echo "<br><br><div><p>Вы автоизовались, пройдите в <a href = 'index.php'>Личный кабинет</a></p>";
							echo "<input";
							$_SESSION['login'] = $login;
							$_SESSION['pass1'] = $pass1;
							$_SESSION['status'] = $row[4];
							$_SESSION['user'] = $row[0];
							echo "</div>";
						}
						else
						{
							echo "<br><br>Данные не верны, попробуйте еще раз <a href = 'index.php'>Авторизоваться</a>";
						}

					}
					else
					{
				?>
				<form action="auto.php" method="post">
					<input class="inp" name="name1" placeholder="Фамилия">
					<input class="inp" name="name2" placeholder="Имя">
					<input class="inp" name="name3" placeholder="Отчество">

					<input class="inp1" name="mail" placeholder="Почта">
					<input class="inp" type="submit" name="reg" value="Войти">
				</form>
				<?php } ?>
			</div>
			<div style="margin-top: 5%; padding-left: 20%;height: 40%; width: 100%; background-color: #79BD8F; color: white;">
				<input type="checkbox"><label style="margin-left: 2%; margin-top: 7%; font-family: Montserrat;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</label>
				<br>
				<input type="checkbox"><label style="margin-left: 2%; margin-top: 2%; font-family: Montserrat; color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</label>
			</div>
			<button class="btn">Подтвердить</button>
		</div>
	</div>
</body>
</html>