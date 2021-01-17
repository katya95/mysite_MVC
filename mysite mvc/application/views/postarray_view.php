<h1>Посты</h1>
<p>
<table>
<tr><td>Автор</td><td>Тема</td><td>Пост</td></tr>
<?php
//This file created for exemple. Output posts from file
foreach($data as $row)
	{
		echo '<tr><td>'.$row['name'].'</td><td>'.$row['title'].'</td><td>'.$row['text'].'</td></tr>';
	}
?>
</table>
</p>


