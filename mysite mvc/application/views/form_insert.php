<!--  ссылка изменить с конкретным id-->
<form action="update.php" method='POST' enctype="multipart/form-data">
            <!-- <input type='hidden' name= id_otzuv' value=' $id_otzuv' />-->
            <p>Name:<br> 
            <input name='name' type='text'  value='$name' /></p>
            <p>Surname: <br> 
            <input name='name_2' type='text'  value='$name_2' /></p>
            <p>city: <br> 
            <input name='city' type='text'  value='$city' /></p>
            <p>Email: <br> 
            <input name='email' type='text'  value='$email' /></p>
            <p>Password: <br> 
            <input name='password' type='password'  value='$password' /></p>
          <!--  <input type="file" name="avatar" /></p>-->
            <input type='submit' value='Сохранить'>
            </form>
            
            
