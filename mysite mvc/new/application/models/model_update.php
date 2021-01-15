<?php 
//The implamentation of pattern Active Record for each parameter db
class ModelUpdate extends Model
 {

	protected $db;
    public function __construct($db)
     {
        $this->db = $db;
    }
    
	public  function updateUser()
	{
   		/* $query = "UPDATE `user`
  		SET `name` = :name,
     	`surname` = :surname,
  		 `city` = :city,
  		 `email` = :email,
  		 `password` = :password,
  		 `avatar` = :avatar
  		WHERE `id_user` = :id_user";
	 	$id_user= file_get_contents('application/views/content2_view.php');
		$args = [
  		'id_user' => $id_user,
		'name' => $_POST['name'],
		'surname' => $_POST['name_2'],
		'city' => $_POST['city'],
		'email' => $_POST['email'],
		'password' => $_POST['password'],
		'avatar' =>  'avatar'];
 		$this->db->sql($query, $args);*/
    }
    //option 2. Update data using ActiveRecord
    protected $name;
   	protected $name_2;
    protected $city;
    protected $email;
  	 protected $password;
      //update name
    public  function setName($name)
    {
   	 	$this->name = $name;
   		$query = "UPDATE `user`
 		SET `name` = :name
 	 	WHERE `id_user` = :id_user";
 		$id_user= file_get_contents('application/views/content2_view.php');
		$args = [
 	 	'id_user' => $id_user,
		'name' => $name];
		echo $id_user;
		echo $name;
		$this->db->sql($query, $args);
    }
    //update surname
	public  function setSurname($name_2)
	{
    	$this->name_2 = $name_2;
     	$query = "UPDATE `user`
  		SET  `surname` = :surname
 	 	WHERE `id_user` = :id_user";
 		$id_user= file_get_contents('application/views/content2_view.php');
		$args = [
	  	'id_user' => $id_user,
		'surname' => $name_2];
		$this->db->sql($query, $args);
    }
      //update city
	public  function setCity($city)
	{
    	$this->city = $city;
     	$query = "UPDATE `user`
  		SET  `city` = :city
 	 	WHERE `id_user` = :id_user";
 		$id_user= file_get_contents('application/views/content2_view.php');
		$args = [
 	 	'id_user' => $id_user,
		'city' => $city];
		$this->db->sql($query, $args);
    }
      //update email
	public  function setEmail($email)
	{
    	$this->email = $email;
     	$query = "UPDATE `user`
 	 	SET `email` = :email
  		WHERE `id_user` = :id_user";
 		$id_user= file_get_contents('application/views/content2_view.php');
		$args = [
 		 'id_user' => $id_user,
		'email' => $email];
		$this->db->sql($query, $args);
    }
      //update password
	public  function setPassword($password)
	{
   		$this->password = $password;
    	$query = "UPDATE `user`
 		SET `password` = :password
		WHERE `id_user` = :id_user";
 		$id_user= file_get_contents('application/views/content2_view.php');
		$args = [
  		'id_user' => $id_user,
		'password' => $password
		];
		$this->db->sql($query, $args);
    }
 	public function getName($id)
	{
		return $this->db->getValue("SELECT `name` FROM `user` WHERE `id_user` = ?", [$id]);
		echo $id;
	}

	public function getSurname($id)
	{
		return $this->db->getValue("SELECT `surname` FROM `user` WHERE `id_user` = ?", [$id]);
	}
 	public function getCity($id)
	{
		return $this->db->getValue("SELECT `city` FROM `user` WHERE `id_user` = ?", [$id]);
	}

	public function getEmail($id)
	{
		return $this->db->getValue("SELECT `email` FROM `user` WHERE `id_user` = ?", [$id]);
	}
 	public function getPassword($id)
	{
		return $this->db->getValue("SELECT `password` FROM `user` WHERE `id_user` = ?", [$id]);
	}
 	public  function setNameActive($name)
    	{
   			 $this->name = $name;
   		}
    //update surname
		public  function setSurnameActive($name_2)
		{
   			 $this->name_2 = $name_2;
  		 }
      //update city
		public  function setCityActive($city)
		{
   			 $this->city = $city;
  		 }
      //update email
		public  function setEmailActive($email)
		{
  	 	 	$this->email = $email;
   		 }
   		 
 		public  function setPasswordActive($password)
		{
   			$this->password = $password;
   		 }
   	
 	public  function updateUserActive()
	{
   		$id_user= file_get_contents('application/views/content2_view.php');
    	$query = "UPDATE `user`
  		SET `name` = :name,
     	`surname` = :surname,
   		`city` = :city,
   		`email` = :email,
   		`password` = :password
  		WHERE `id_user` = '$id_user'";
		$args = [
		'name' => $this->name,
		'surname' =>  $this->name_2,
		'city' => $this->city,
		'email' => $this->email,
		'password' =>$this->password
		];
 		$this->db->sql($query, $args);
    }
  } 

    ?>