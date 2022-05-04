
<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $base = "xakaton";

        $conn = mysqli_connect($host, $user, $pass, $base);


    ?>
	<div style="display: flex;">
		<div>
		<?php 
			if($_POST['reg'] == 'Зарегистрироваться')
			{
				$login = $_POST['login'];
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
		<form action="index.php" method="post">
			<h1>Регистрация</h1>
			<div>
				<input type="text" name="login" placeholder="Логин">
			</div>
			<div>
				<input type="text" name="mail" placeholder="E-mail">
			</div>
			<div>
				<input type="password" name="pass1" placeholder="Пароль">
			</div>
			<div>
				<input type="password" name="pass2" placeholder="Подтверждение Пароля">
			</div>
			<div>
				<input type="submit" name="reg" value="Зарегистрироваться">
			</div>
		</form>
		<?php } ?>
		<?php 
			if($_POST['reg'] == 'Войти')
			{
				$login = $_POST['login'];
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
		<form action="index.php" method="post">
			<h1>Авторизация</h1>
			<div>
				<input type="text" name="login" placeholder="Логин">
			</div>
			<div>
				<input type="password" name="pass1" placeholder="Пароль">
			</div>
			<div>
				<input type="submit" name="reg" value="Войти">
			</div>
		</form>
		<?php } ?>
		</div>
		<div>
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
				}
			}
		?>
		<form action="index.php" method="post">
			<h1>Создать заявку</h1>
			<div>
				<input type="text" name="orgname" placeholder="Название организации">
			</div>
			<div>
				<input type="text" name="profname" placeholder="Наименование профессии">
			</div>
			<div>
				<input type="textarea" name="about" placeholder="Описание профессии">
			</div>
			<div>
				<input type="hidden" name="login" placeholder="Подтверждение Пароля" value="<?php echo $_SESSION['login']; ?>">
			</div>
			<div>
				<input type="submit" name="reg" value="Создать">
			</div>
		</form>
		<?php
			$query1 = "SELECT * FROM `applications`";		
			$result1 = mysqli_query($conn, $query1);


			if($_POST['reg'] == 'Принять')
			{
				$login = $_SESSION['login'];
				$id_prof = $_POST['id_prof'];
				$id_user = $_POST['id_user'];

				$query = "INSERT INTO `subscribe` (`id_prof`, `id_user`, `login`)
										   VALUES ('$id_prof', '$id_user', '$login')";
				$result = mysqli_query($conn, $query);
			}

			while($row = mysqli_fetch_array($result1)){
		?>
		<form action="index.php" method="post">
			<div style="display: none;">
				<input type="text" name="id_prof" value="<?php echo $row[0]; ?>">
			</div>
			<div style="display: none;">
				<input type="text" name="id_user" value="<?php echo $_SESSION['user']; ?>">
			</div>
			<div>
				<label><?php echo $row[1]; ?></label>
			</div>
			<div>
				<label><?php echo $row[2]; ?></label>
			</div>
			<div>
				<label><?php echo $row[3]; ?></label>
			</div>
			<div>
				<label><?php echo $row[4]; ?></label>
			</div>
			<div>
				<input type="submit" name="reg" value="Принять">
			</div>
		</form>
		<?php } ?>
		</div>
	</div>
</body>
</html>