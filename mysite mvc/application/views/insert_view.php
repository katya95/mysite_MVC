<?php 
include_once ('application/models/model_insert.php');
include_once ('application/config.php');
$back = "<meta http-equiv='refresh' content='0; {$_SERVER['HTTP_REFERER']} ' ";
$answer='';
$db = new DB();
$insert=new ModelInsert($db);
if( isset ($_POST['name']) && trim(strlen($_POST['name'])) > 0 ){
	$insert-> setName($_POST['name']);
}else {
	$answer='Введите имя!';
	echo $answer;
	echo $back;
}
if( isset ($_POST['name_2']) && trim(strlen($_POST['name_2'])) > 0 ){
	$insert-> setSurname($_POST['name_2']);
}else {
	$answer='Введите фамилию!';
	echo $answer;
	echo $back;
}
if( isset ($_POST['city']) && trim(strlen($_POST['city'])) > 0 ){
	$insert-> setCity($_POST['city']);
}else {
	$answer='Введите город!';
	echo $answer;
	echo $back;
}
if( isset ($_POST['email']) && trim(strlen($_POST['email'])) >  0){
		if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $_POST['email'])){
			$insert-> setEmail($_POST['email']);
		}else {
			$answer= 'Емейл указан неверно! ';
			echo $back;
		}
}else{
 echo $back;
}
if( isset ($_POST['password']) && trim(strlen($_POST['password'])) > 0 ){
	$insert-> setPassword($_POST['password']);
}else {
	$answer='Введите пароль!';
	echo $answer;
	echo $back;
}
$insert->insert();
$answer= 'Вы зарегистрированы в системе!';

?>

   <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='refresh' content='5; URL=<?php echo $_SERVER['HTTP_REFERER'];?> '  />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>РїРѕСЃС‚</title>
</head>
<body bgcolor="#efefef" >
<table border="0" width="100%">
	<tr>
		<td width="50%"></td>
		<td valign="middle">
<div style=" margin-top:300px; height:120px; width:500px; background:#DCDCDC; border: solid 3px #808080; font-family:Arial, Helvetica, sans-serif; font-size:18px; padding:20px;">
<?php echo $answer;?>
</div>
		</td>
		<td width="50%"></td>
	</tr>
</table>
</body>
</html> 


