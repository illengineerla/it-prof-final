<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="ws.css">
    </style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
.main{
	width: 1920px;
	height: 2800px;
	background-color: light;
}

.head{
	width: 100%;
	height: 5%;
	margin-left: 5%;
	margin-top: 1%;
	background-color: white;
	border-radius: 50px;
	box-shadow: 0.01em 0.01em 0.8em 0.1em lightgrey;
	font-family: Montserrat;
}

.img{
	margin-left: 9%;
}

.logo{
	width: 5%;
	height: 65%;
}

.ht{
	margin-left: 0.2%;
	font-family: Montserrat;
}

.body{
	width: 70%;
	height: 40%;
	margin-left: 12%;
	margin-top: 0.5%;
	padding-top: 3%;
	background-color: white;
	border-radius: 50px;
	box-shadow: 0.01em 0.01em 0.8em 0.1em lightgrey;
	font-family: Montserrat;
}
.block{
	width: 30%;
	height: 30%;
	background-color: #79BD8F;
	margin-left: 4%;
	margin-right: 4%;
	border-radius: 16px;
}
.block1{
	width: 17%;
	height: 90%;
	background-color: #79BD8F;
	margin-left: 4%;
	margin-right: 4%;
	margin-top: 5%;
	border-radius: 16px;
}
.product-wrapper {
    display: block;
    width: 100%;
    float: left;
    transition: width .2s;
}
        .product {
            display: block;
            position: relative;
            margin: 0 20px 20px 0;
            text-decoration: none;
            z-index: 0;
            height: 350px;
            margin-top: 13.5%;
            margin-left: 5%;
            border-radius: 16px;
            border: 2px solid #00D1FF;
        }
        .products {
            list-style: none;
            margin: 0 -20px 0 0;
            padding: 0;
        }

        @media only screen and (min-width: 450px) {
            .product-wrapper {
                width: 50%;
            }
        }

        @media only screen and (min-width: 768px) {
            .product-wrapper {
                width: 33.333%;
            }
        }

        @media only screen and (min-width: 1000px) {
            .product-wrapper {
                width: 21%;
            }
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
		<div class="head">
				<img class="logo" src="img/logo.png">
				<img class="img" src="img/search.png">
			<label class="ht">Поиск работы</label>
				<img class="img" src="img/works.png"> 
			<label class="ht">Поиск работника</label>
				<img class="img" src="img/pen.png">	
			<label class="ht">Новости</label>
				<img class="img" src="img/avatar.png"> 
			<label class="ht">Личный кабинет</label>
		</div>
		<div class="body">
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
			<div class="block">
				<h3 class="mt-2 ms-3" style="color:white;">Требуется ...</h3>
				<label class="mt-1 ms-3" style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</label>
				<button class="btn ms-5">Подробнее</button>
			</div>
			<?php } ?>
		</div>
		<div class="greendown"></div>
	</div>
</body>
</html> 