<?php 
include_once ("application/models/model_update.php");
include_once("application/config.php");
$db=new DB();
$user=new ModelUpdate($db);
$id = file_get_contents('application/views/content2_view.php');
$name=$user->getName($id);
$surname=$user->getSurname($id);
$city=$user->getCity($id);
$email=$user->getEmail($id);
$password=$user->getPassword($id);
?>

<h1>Редактирование</h1>
<form action="update" method='POST' accept-charset="utf-8">
            <!-- <input type='hidden' name= id_user' value=' $id_user' />-->
            <p>Name:<br> 
            <input name='name' type='text'  value='<?php echo $name ?>' /></p>
            <p>Surname: <br> 
            <input name='name_2' type='text'  value='<?php echo $surname ?>' /></p>
            <p>city: <br> 
            <input name='city' type='text'  value='<?php echo $city ?>' /></p>
            <p>Email: <br> 
            <input name='email' type='text'  value='<?php echo $email ?>' /></p>
            <p>Password: <br> 
            <input name='password' type='password'  value='<?php echo $password ?>' /></p>
            <!-- <input type="file" name="avatar" /></p>-->
            <input type='submit' value='‘Сохранить'>
            </form>

       