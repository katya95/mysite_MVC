  <h1>Профиль</h1>
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
$db = new DB();
$user=new ModelProfile($db);
$id = file_get_contents('application/views/content2_view.php');
echo 'Имя:'.' '.$user->getNameModel($id).'<br/>';
echo 'Фамилия:'.' '.$user->getSurnameModel($id).'<br/>';
echo 'Город:'.' '.$user->getCityModel($id).'<br/>';
echo 'Е-мейл:'.' '.$user->getEmailModel($id).'<br/>';
echo 'Фотография:'.' <img src="application/foto/'.$user->getAvatar($id).'"width=30%>'.'<br/>';

?>

