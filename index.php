<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Main design.css">
    </style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	.main{
	width: 1864px;
	height: 2800px;
	background-color: white;
}

.head{
	width: 70%;
	height: 5%;
	background-size: 100%;
	margin-left: 8%;
	margin-top: 1%;
	background-color: white;
	border-radius: 50px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.12);
	font-family: Montserrat;
	padding-left: 2.5%;
	padding-bottom: 0.2%;
	color: #358A16;
}


.img{
	width: 40px;
	height: 40px;
	margin-left: 9%;
	margin-top: 0.3%;
}

.logo{
	margin-left: 2%;
	width: 50%;
	height: 100%;
}

.ht{
	margin-left: 0.2%;

	color: #358A16;
	font-family: Montserrat;
}

.body{
	width: 70%;
	height: 15%;
	margin-left: 15%;
	margin-top: 2%;
	padding-top: 2%;
	background-color: white;
	border-radius: 50px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.12);
	font-family: Montserrat;

}
.upLine{
	width: 80%;
	height: 20%;
	background-color: #5AFF90;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.12);	
	border-radius: 16px;
	margin-left: auto;
	margin-right: auto;
	padding-top: 1%;
	text-align: center;
	letter-spacing: 0.35em;
}
.blocks{
	width: 100%;
	height: 100%;
	background-color: white;
}
.kal{
	width: 28%;
	height: 60%;
	background-color: #5AFF90;
	border-radius: 16px;
	box-shadow: 0px 0px 17px 2px rgba(36, 255, 0, 0.35);
	margin-top: 2%;
	margin-left: 10%;
	padding-left: 3.5%;
	padding-top: 1%;
	float: left;
}
.kal1{
	width: 50%;
	height: 60%;
	background-color: #5AFF90;
	border-radius: 16px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.12);
	margin-top: 2%;
	margin-right: 10%;
	padding-top: 2%;
	padding-left: 1%;
	padding-right: 1%;
	float: right;
	letter-spacing: 0.35em;
	color: white;
}
.greendown{
	width: 100%;
	height: 3%;
	background-color: #5AFF90;
	margin-top: 15%;
}
.ex{
	width: 60%;
	height: 80%;
	color: black;
	background-color: white;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
	border-radius: 16px;	
}

.inp{
	border: 1px solid #5AFF90;
	border-radius: 8px;
	margin-left: 10%;
	margin-top: 1%;
	text-align: center;
	box-shadow: 0px 0px 17px 2px rgba(36, 255, 0, 0.35);
}
.txt{
	margin-left: 50%;

	text-decoration: none;
}
.news{
	width: 70%;
	height: 80%;
	margin-left: 15%;
	margin-top: 2%;
	padding-top: 2%;
	background-color: white;
	border-radius: 50px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.12);
	font-family: Montserrat;
	position: absolute;
}
.newblock{
	width: 28%;
	height: 30%;
	background-color: #5AFF90;
	border-radius: 16px;
	box-shadow: 0px 0px 17px 2px rgba(36, 255, 0, 0.35);
	margin-top: 5%;
	margin-left: 13%;
	padding-left: 3.5%;
	padding-top: 1%;
	float: left;
	
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
	<div class="main">
		<div class="d-flex">
			<a href="index.php"><img class="logo" src="img/logo.png"></a>
			<div class="head">
				<img class="img" src="img/pen.png">	
				<label class="ht">Новости</label>
				<img class="img" src="img/employ.png"> 
				<a href="create.php"><label class="ht">Найти работника</label></a>
				<img class="img" src="img/works.png">	
				<a href="vacations.php"><label class="ht">Найти работу</label></a>
				<img class="img" src="img/enter.png"> 
				<a href="reg.php"><label class="ht">Вход</label></a>
			</div>
		</div>
		<div class="body">
			<div class="upLine">
					<label class="mt-3">Найдите работу о которой мечтали в любой точке РФ</label>
			</div>
			<div class="blocks">
				<div class="kal"><img style="border-radius: 16px;" src="img/kal.png"></div>
				<div class="kal1 d-flex">
					<div class="ex ms-1 pt-3 ps-3" style="font-size: 0.9em;">
						<h6>Пройдите профессиональное обучение,</h6>
						<label>для повышения конкурентоспособности</label>
						<a href="" class="txt text-primary">Подробнее</a>
					</div>
					<div class="ex ms-4 pt-2 ps-3" style="font-size: 0.9em;">
						<h6>Автоматический подбор вакансий,</h6>
						<label class=""> исходя из установленных параметров</label>
						<br>
						<a href="" class="txt text-primary">Подробнее</a>
					</div>
				</div>
			</div>

		</div>
		<div class="greendown"></div>
		<div class="news">
			<div class="newblock"><h5 class="mt-3">Новости</h5>
				<label class="mt-3">Узнайте последние новости в регионах</label>
			</div>
			<div class="newblock"><h5 class="mt-3">Помощь в оформлении документов</h5>
				<label class="mt-3">Обратитесь за помощью к опытным специалистам</label>
			</div>
			<div class="newblock"><h5 class="mt-3">Крутяк</h5>

			</div>
			<div class="newblock"><h5 class="mt-3">Ништяк</h5></div>
		</div>
		<div class="remont" style="background-color: lightgrey; height: 50%; margin-top: 50%">
			<h1 class="text-center">Страница в РЕМОНТЕ</h1>
			<img style="margin-left: 35%; width: 500px; height: 500px;" src="img/remont.png">
		</div>
	</div>
</body>
</html>