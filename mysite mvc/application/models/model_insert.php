<?php

class Model_insert extends Model
{
protected $db;
    public function __construct($db) {
        $this->db = $db;
        
        
    }
	public function get_data()
	{	
		
		
		$query = "INSERT INTO `user` (
  `name`,
  `surname`,
  `city`,
  `email`,
  `password`
  )
VALUES (
  :name,
  :surname,
  :city,
  :email,
  :password
)";
 
$args = [
  'name' => $_POST['name'],
  'surname' => $_POST['name_2'],
  'city' => $_POST['city'],
  'email' =>$_POST['email'],
  'password' =>$_POST['password'],
'avatar'=>''];
 
 $this->db->sql($query, $args);
		
	}

}
?>