<?php
//comparing data from a form with data from a database
$id=0;
include_once ('application/config.php');
include_once ('application/models/model_profile.php');
$db = new DB();
$user=new ModelProfile($db);
$user->checkName();
$user->checkPassword();
$answer='Данные отправлены';
$user->check();
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
