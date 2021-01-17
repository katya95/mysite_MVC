<h1>Загрузка фотографии</h1>         
    <?php        
 
    class Avatar{
           public function can_upload($file)
            {
   				 if($file['name'] == '')
				return 'Выберите файл';
				//file size check. If size=0, then hi is big
				if($file['size'] == 0)
				return 'Размер файла слишком большой.';
				$getName = explode('.', $file['name']);
				$m = strtolower(end($getName));
				$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
				if(!in_array($m, $types))
				return 'Недопустимый тип файла.';
		return true;
 		 }
//function to add image in folder and linking to user id in database. Filename is equal to user id 
  		public function make_upload($file)
  		{	
 		 $a=0;
 		 //comparison with user id
		$a = file_get_contents('application/views/content2_view.php');
		$getName = explode('.', $file['name']);
		$mname = strtolower(end($getName));
		$name=$a .'.'. $mname;
		copy($file['tmp_name'], 'application/foto/' . $name);
		$connection=new DB();
		$connection->query("UPDATE user SET avatar='$name' WHERE id_user='$a'") ;
 		 }
    }
?>
<!-- Form from load image -->
    <form method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <input type="submit" value="Load file!">
    </form>
    
     <?php

     $image=new Avatar();
     
    if(isset( $_FILES['file']))
     {
      $c =  $image->can_upload($_FILES['file']);
    	 if($c === true)
    	 {
     	    $image->make_upload($_FILES['file']);
      	  echo "<strong>file uploaded successfully!</strong>";
       	 }
   	   else
   	   {
        echo "<strong>$c</strong>";  
    	}
    }
    ?>