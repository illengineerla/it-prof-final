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
				<h4 class="ms-5">СОЗДАНИЕ СВОБОДНОЙ ВАКАНСИИ</h4>
			</div>
			<div class="inputs">
				<?php
					if($_SESSION['status'] == 1){
						if($_POST['reg'] == 'Создать')
						{
							$orgname = $_POST['orgname'];
							$profname = $_POST['profname'];
							$about = $_POST['about'];
							$login = $_POST['login'];

							$query = "INSERT INTO `applications` (`orgname`, `profname`, `about`, `login`)
												VALUES ('$orgname', '$profname', '$about', '$login')";
							$result = mysqli_query($conn, $query);

							echo "Вакансия создана, можете вернуться на <a href='index.php'>Главную страницу</a>";
						}
				?>
				<form action="create.php" method="post">
					<input class="inp" type="text" name="orgname" placeholder="Название организации">

					<input class="inp" type="text" name="profname" placeholder="Наименование профессии">
					<input class="inp" maxlength="100" type="textarea" name="about" placeholder="Описание профессии">
					<input class="inp" type="hidden" name="login" placeholder="Подтверждение Пароля" value="<?php echo $_SESSION['login']; ?>">
					<input class="inp" type="submit" name="reg" value="Создать">
				</form>
				<?php }else{ ?>
				<div class="categ">
					<h4 class="ms-5">Извините, но вы не числитесь как работодатель. Обратитесь к тех поддержке.</h4>
					<br><label>Можете вернуться на <a href = 'index.php'>Главную страницу</a></label>
				</div>
				<?php } ?>
			</div>
			<div style="margin-top: 3%; padding-left: 20%;height: 40%; width: 100%; background-color: #79BD8F; color: white;">
				<input type="checkbox"><label style="margin-left: 2%; margin-top: 7%; font-family: Montserrat;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</label>
				<br>
				<input type="checkbox"><label style="margin-left: 2%; margin-top: 2%; font-family: Montserrat; color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</label>
			</div>
		</div>
	</div>
</body>
</html>