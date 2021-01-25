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
   protected $check;
   public $answer;
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
    public function check()
    {
    if( isset ($_POST['name']) && trim(strlen($_POST['name'])) > 0 ){
    $this->setName($_POST['name']);
    $name=1;
    }else {
	$this->answer='Введите имя!';
	$name=0;
	echo $this->answer;
	}
    if( isset ($_POST['name_2']) && trim(strlen($_POST['name_2'])) > 0 ){
    $this->setSurname($_POST['name_2']);
    $name_2=1;
    }else {
	$name_2=0;
    }
    if( isset ($_POST['city']) && trim(strlen($_POST['city'])) > 0 ){
    $this->setCity($_POST['city']);
    $city=1;
    }else {
	$city=0;
    }
    if( isset ($_POST['email']) && trim(strlen($_POST['email'])) >  0){
		if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $_POST['email'])){
    $this->setEmail($_POST['email']);
    $email=1;
		}else {
		print  ("Емейл указан неверно!");
		$email=0;
		}
    } else {
    $email=0;
    }
    if( isset ($_POST['password']) && trim(strlen($_POST['password'])) > 0 ){
    $this->setPassword($_POST['password']);
    $password=1;
    }else {
    $password=0;
    }
     	if ($name==1 && $name_2==1 && $city==1 && $email==1 && $password==1){
      $this->insert(); 
      $this->answer="Вы зарегистрированы в системе!";
   		}
	}
	
}
?>