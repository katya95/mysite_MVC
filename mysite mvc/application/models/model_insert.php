<?php

class ModelInsert extends Model
{
	protected $db;
    public function __construct($db)
    {
        $this->db = $db;  
    }
    //adding a new user-data is read on the form
	public function get_data()
	{	
		/*$query = "INSERT INTO `user` (
		`id_user`,	
 		 `name`,
 		 `surname`,
 		 `city`,
 		 `email`,
 		 `password`,
	 	 `avatar`
 		 )
		VALUES (
 		 :id_user,
 		 :name,
 		 :surname,
		  :city,
 		 :email,
		  :password,
		  :avatar
		)";
 
		$args = [
		'id_user'=>NULL,
 		 'name' => $_POST['name'],
 		 'surname' => $_POST['name_2'],
 		 'city' => $_POST['city'],
 		 'email' =>$_POST['email'],
  		'password' =>$_POST['password'],
		'avatar'=>NULL
		];
 $this->db->sql($query, $args);	*/
	}
	
	//Option 2. Using ActiveRecord
 protected $name;
   protected $name_2;
    protected $city;
    protected $email;
   protected $password;
      //insert name
    public  function setName($name)
    {
    $this->name = $name;
    }
    public function getName()
    {
    return $this->name;
    }
    //insert surname
	public  function setSurname($name_2)
	{
    $this->name_2 = $name_2;
    }
public function getSurname()
    {
    return $this->name_2;
    }
      //insert city
	public  function setCity($city)
	{
    $this->city = $city;
    }
public function getCity()
    {
    return $this->city;
    }
      //insert email
	public  function setEmail($email)
	{
    $this->email = $email;
    }
public function getEmail()
    {
    return $this->email;
    }
      //insert password
	public  function setPassword($password)
	{
    $this->password = $password;
    }
public function getPassword()
    {
    return $this->password;
    }
    //insert data in database
    public function insert() {
    $query = "INSERT INTO `user` (
		`id_user`,	
 		 `name`,
 		 `surname`,
 		 `city`,
 		 `email`,
 		 `password`,
	 	 `avatar`
 		 )
		VALUES (
 		 :id_user,
 		 :name,
 		 :surname,
		  :city,
 		 :email,
		  :password,
		  :avatar
		)";
 
		$args = [
		'id_user'=>NULL,
 		 'name' => $this->name,
 		 'surname' => $this->name_2,
 		 'city' => $this->city,
 		 'email' =>$this->email,
  		'password' =>$this->password,
		'avatar'=>NULL
		];
			
 $this->db->sql($query, $args);	
    }
    
}

?>