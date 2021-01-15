<!--  <!DOCTYPE html>

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
				 <div id="logo">
					<a href="/">mysite</a>
				</div> 
				<div id="menu">-->
					
						<?php /*
						error_reporting(-1);
						mb_internal_encoding("UTF-8");
 					   //if login and password matched the stored data of database, then user logs in
							$a=0;
						    $name='';
							$a = file_get_contents('application/views/content2_view.php');
 					    	$name = file_get_contents('application/views/name_view.php');
	 							if ($a==0){
	 							
	 						echo '<a href="/enter">Вход</a>';
	 							}
	 						else{
	 						echo $name.'<br/>' ;
							echo '<a href="/out">Выход</a></li>';
                               }*/
						include ('application/views/header_view.php');
	 							 ?>
				
				<!--  </div>
			</div> -->
			<div id="page">
				<!--  <div id="sidebar">		
					<div class="side-box">
						<h3>навигация</h3>
						<ul class="list">
							<li class="first "><a href="/">Главная</a></li>
							<li><a href="/postarray">Пост</a></li>
							<li><a href="/test">Регистрация</a></li>
							<li><a href="/post">пост бд</a></li>
							<?php 
					/*
							$a = file_get_contents('application/views/content2_view.php');
	 							if ($a!=0){
							echo'<li><a href="/profile">Профиль</a></li>';
							echo '<li><a href="/registracion">Редактирование</a></li>';
							echo '<li><a href="/avatar">Изменение аватарки</a></li>'; 
	 							}*/
							include ('application/views/navigation_view.php');
							?>
						</ul>
					</div>
				</div> -->
				<!--  <div id="content">
			<div class="box">
						<?php 
						include('application/views/layout_view.php');
						/*include 'application/views/'.$content_view;*/
						 ?>
					</div>
				</div>	-->		
			</div>		
		</div>
		<!--  <div id="footer">
			 <?php include('application/views/footer_view.php');?>
			<h4>foot</h4>
		</div>-->
	</body>
</html>
