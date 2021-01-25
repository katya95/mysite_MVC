<h1>Пользователи</h1>
<p>
<table width='80%'><tr><td>
<b>Вывод пользователей</b>
</td></tr>
<?php 
//output posts
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
$db = new DB();
$user=new ModelUser($db);
echo  '<tr><td>';
 $user->getIdUser();
echo '</td></tr></table>';

   		
?>