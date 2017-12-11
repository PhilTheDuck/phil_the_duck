<!doctype html>
<html lang="en">


<head>
    <title>FindYourMate</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

	<title>FindYourMate</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<div class="nav justify-content-start">
					<a class="navbar-brand" href="#">
						<img src="img/1.png" width="248" height="173" alt="">
					</a>


					<form class="mr-sm-2 form-inline" action="goposition.php" method="get">
						<select class="custom-select">
							<option selected>Ваш город</option>
							<option value="1">Санкт-Петербург</option>
							<option value="2">Москва</option>
							<option value="3">Томск</option>
						</select>
					</form>

				</div>
				<div class="nav justify-content-end">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="registration.html">Регистрация</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0" action="login.php" method="post">
						<input class="form-control mr-sm-2" type="text" placeholder="Логин" name="login">
						<input class="form-control mr-sm-2" type="password" placeholder="Пароль" name="password">
						<button class="btn btn-outline-success" type="submit">Войти</button>
					</form>

				</div>



			</div>
		</nav>
		<div class="top-img">
			<h1 class="phrase">Умная фраза со смыслом</h1>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Введите запрос..." name="search" >
				<div class="input-group-btn">
					<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Вы ищете...
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Команду</a>
						<a class="dropdown-item" href="#">Участника команды</a>
						<a class="dropdown-item" href="#">Другое</a>
					</div>
				</div>
				<button type="submit" class="btn btn-outline-primary">Найти</button>
			</div>

		</div>
	</header>
	<div class="hobby-list">

		<div class="container">
			<div class="row">


				<div class="col-md-4">
					<ul>
						<li><a href="">Музыка</a></li>
						<li><a href="#">Барабаны</a></li>
						<li><a href="#">Гитара</a></li>
						<li><a href="#">Скрипка</a></li>
						<li><a href="#">Соло</a></li>
						<li><a href="#">Арфа</a></li>
					</ul>

				</div>
				<div class="col-md-4">
					<ul>
						<li><a href="">Танцы и спорт</a></li>
						<li><a href="#">Современные танцы</a></li>
						<li><a href="#">Бальные танцы</a></li>
						<li><a href="#">Акробатика</a></li>
						<li><a href="#">Футбол</a></li>
						<li><a href="#">Волейбол</a></li>
					</ul>
				</div>

				<div class="col-md-4">
					<ul>
						<li><a href="">Изобразительное искусство</a></li>
						<li><a href="#">Фото</a></li>
						<li><a href="#">Портрет</a></li>
						<li><a href="#">Живопись</a></li>
						<li><a href="#">Скульптура</a></li>
						<li><a href="#">Графика</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="footer-info">

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="index.php"><img src="img/1.png" width="248" height="173"></a>
				</div>
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4 justify-content-end">
					<ul>
						<li>onetwo@mail.com</li>
						<li>+79819656366</li>
					</ul>
				</div>
			</div>
		</div>

		</div>
	</footer>




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
