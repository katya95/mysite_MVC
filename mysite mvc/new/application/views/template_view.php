<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>mysite</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<a href="/"><h4></>mysite</h4></a>
				<div id="menu">
						<?php 
						include'header_view.php';
	 					   ?>
				</div>
			</div>
			<div id="page">
				<div id="sidebar">		
					<div class="side-box">
						<h3>навигация</h3>
						
						<!--   <ul class="list">
							<li class="first "><a href="/">Главная</a></li>
							<li><a href="/postarray">Пост</a></li>
							<li><a href="/test">Регистрация</a></li>
							<li><a href="/post">пост бд</a></li>
							<?php 
							/*$a = file_get_contents('application/views/content2_view.php');
	 							if ($a!=0){
							echo'<li><a href="/profile">Профиль</a></li>';
							echo '<li><a href="/registracion">Редактирование</a></li>';
							echo '<li><a href="/avatar">Изменение аватарки</a></li>';
	 							}*/
							?>
						</ul>-->
						<?php   include 'navigation_view.php'; ?>
					</div>
				</div>
				<div id="content">
			<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
				</div>			
			</div>		
		</div>
		<div id="footer">
			 
			<h4><?php include'footer_view.php';?></h4>
		</div>
	</body>
</html>
