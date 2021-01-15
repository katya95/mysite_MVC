<?php 
include_once ('application/models/model_insert.php');
include_once ('application/config.php');
$back = "<meta http-equiv='refresh' content='0; {$_SERVER['HTTP_REFERER']} ' ";
$answer='';
$db = new DB();
$update=new ModelUpdate($db);
if( isset ($_POST['name']) && trim(strlen($_POST['name'])) > 0 ){
	$update-> setNameActive($_POST['name']);
}
if( isset ($_POST['name_2']) && trim(strlen($_POST['name_2'])) > 0 ){
	$update-> setSurnameActive($_POST['name_2']);
}
if( isset ($_POST['city']) && trim(strlen($_POST['city'])) > 0 ){
	$update-> setCityActive($_POST['city']);
}
if( isset ($_POST['email']) && trim(strlen($_POST['email'])) >  0){
		if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $_POST['email'])){
			$update-> setEmailActive($_POST['email']);
		}else {
			$answer= 'Емейл указан неверно! ';
			echo $back;
		}
}
if( isset ($_POST['password']) && trim(strlen($_POST['password'])) > 0 ){
	$update-> setPasswordActive($_POST['password']);
}
$update->updateUserActive();
$answer='Данные отправлены';
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='refresh' content='5; URL=<?php echo $_SERVER['HTTP_REFERER'];?> '  />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>пост</title>
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