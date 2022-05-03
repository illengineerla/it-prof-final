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
<style type="text/css">
.Main{
	height: 600px;
}
.window{
	width: 40%;
	height: 80%;
	margin-left: 28%;
	margin-top: 10%;
	background-color: white;
	box-shadow: 0.1em 0.1em 2em 0.1em lightgrey;
	border-radius: 16px;
}
.inputs{
	width: 80%;
	padding-top: 5%;
	margin-left: 12%;
}
.inp{
	margin-top: 3%;
	border: 1px solid lightgrey;
	border-radius: 8px;
}
.inp1{
	margin-top: 8%;
	border: 1px solid lightgrey;
	border-radius: 8px;
}
.text{
	font-family: Montserrat;
	font-size: 2em;

}
.btn{
	margin-left: 40%;
	margin-top: 1%;
}

</style>
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
					if($_POST['reg'] == 'Зарегистрироваться')
					{
						$login = $_POST['name1'] + " " + $_POST['name2'] + " " + $_POST['name3'];
						$mail = $_POST['mail'];
						$pass1 = $_POST['pass1'];
						$pass2 = $_POST['pass2'];

						if($pass1 == $pass2){
							$query = "INSERT INTO `users` (`username`, `email`, `password`, `role`)
												VALUES ('$login', '$mail', '$pass1', '0')";
							$result = mysqli_query($conn, $query);
							echo "Регистрация прошла успешно, <a href='index.php'>Авторизуйтесь</a>";
						}
						else
						{
							echo "Пароли не совпадают, попробуйте еще раз <a href='index.php'>Зарегистрироваться</a>";
						}
					}
					else
					{
				?>
				<form action="rep.php" method="post">
					<input class="inp" name="name1" placeholder="Фамилия">
					<input class="inp" name="name2" placeholder="Имя">
					<input class="inp" name="name3" placeholder="Отчество">

					<input class="inp1" name="mail" placeholder="Почта">
					<input class="inp" type="password" name="pass1" placeholder="Пароль">
					<input class="inp" type="password" name="pass2" placeholder="Подтверждение пароля">
					<input class="inp" type="submit" name="reg" value="Зарегистрироваться">
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