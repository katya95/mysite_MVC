<?php 
mb_internal_encoding("UTF-8");
error_reporting(-1);
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
                            }
 ?>