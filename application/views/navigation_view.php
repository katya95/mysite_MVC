<ul class="list">
			<li class="first "><a href="/">Главная</a></li>
			<li><a href="/postarray">Пост</a></li>
			<li><a href="/test">Регистрация</a></li>
			<li><a href="/post">пост бд</a></li>
			<li><a href="/user">Пользователи</a></li>
			<?php 
			$a = file_get_contents('application/views/content2_view.php');
	 		if ($a!=0){
					echo'<li><a href="/profile">Профиль</a></li>';
					echo '<li><a href="/registracion">Редактирование</a></li>';
					echo '<li><a href="/avatar">Изменение аватарки</a></li>';
	 				}
				?>
</ul>