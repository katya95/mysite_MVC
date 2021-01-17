<h1>Посты</h1>
<p>
<table width='80%'><tr><td>

Вывод постов
</td></tr>
<?php 
//output posts
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
$db = new DB();
$post=new ModelPost($db);
	for ($i=0;$i<=$post->getCount() ;$i++){
		echo  '<tr><td><b>Тема поста:'.' '. $post->getTitle($i).'</b><br/>';
		echo '<p>'. $post->getText($i).'</p></td></tr>';
	}
echo '</table>';
   		
?>



