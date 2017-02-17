<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>St_animation</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	</head>
	<body bgcolor="#F5F5F5">
		<div id="site">
			<div id="info">
				<header>
					<!логотип>
					<div id="logo">
						<a href="http://site_sg.ru" title="На главную">
							<img src="images/logo1.png"/>
							<span>St_animation</span>
						</a>
					</div>
					<!Ульяновск>
					<div id="ulaynovsk">
						<a title="город Ульяновск">Ульяновск</a>
					</div>
					<!Кнопки войти и зарегистрироваться>
					<div id="reg_log">
						<a href="" title="Войти в кабинет">
							<div id="btn">
								Войти
							</div>
						</a>
						<a href="" title="Зарегистрироваться на сайте">
							<div id="btn">
								Регистрация
							</div>
						</a>
					</div>
				</header>
				<nav>
					<div id="hideMenu">
						<a href="http://site_sg.ru" title="Главная">Главная</a>
						<a href="novosti.php" title='Новости'>Новости</a>
						<a href="biography.php" title='Биография'>Биография</a>
						<a href="interesbl.php" title='Интересы'>Интересы</a>
						<a href="fotogalerey.php" title="Портфолио">Фотогалерея</a>
						<a href="portfolio.php" title='Портфолио'>Портфолио</a>
					</div>	
				</nav>
			<!Основная часть, название страницы, текст>
			<div id="main">
				<div id="prava1">
					<h2 class="heading" title="Права">Права</h2>
					<br/><br/>
					<div class="text7">
						<span>При воспроизведении или цитировании информации, опубликованной на site_sg.ru, указание источника
обязательно!</span>
					</div>
				</div>
			</div>
			</div>	
			<footer>
				<div id="myname" title='Гаврилов Станислав Александрович'>
					<span>Гаврилов Станислав Александрович</span>
				</div>
				<div id="prava">
					<a href="prava.php" title='Все права защищены'>Все права защищены &#169; <?=date ('Y')?></a>
				</div>
				<div id="ccbllki">
					<a href="https://ok.ru/stanislav73rus" 
						class="cc1" title="Я в ОК"><img src="images/OK.png"/></a>
					<a href="https://vk.com/club57528420"
						class="cc2" title="Группа Вк"><img src="images/VK.png"/></a>
					<a href="https://www.facebook.com/profile.php?id=100006467527935&ref=bookmarks" 
						class="cc3" title="Я в FaceBook"><img src="images/FaceBook.png"/></a>
				</div>
			</footer>
		</div>
	</body>
</html>