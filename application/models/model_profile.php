<?php

class ModelProfile extends Model
{
	protected $db;
	protected $name;
	protected $password;
	protected $answer;
    public function __construct($db)
    {
        $this->db = $db;  
    }
    // users output
	public function getData()
	{	
  		return $user=$this->db->getRows("SELECT * FROM user");
	}

//Active Record
	public function getName($id)
	{
		return $this->db->getValue("SELECT `name` FROM `user` WHERE `id_user` = ?", [$id]);
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
public function getAvatar($id)
	{
		return $this->db->getValue("SELECT `avatar` FROM `user` WHERE `id_user` = ?", [$id]);
	}
	
	public function getCount()
	{
		return $this->db->getValue("SELECT COUNT(1) FROM `user`");
	}
	
	public function checkName()
	{
	 	return $name=$_POST['name'];
	}
	
	public function checkPassword()
	{
		return $password=$_POST['password'];
	}
	
	public function check()
	{
		foreach($this->getData() as $row)
		{
		if (($row['name']==$this->checkName())&&($row['password']==$this->checkPassword())){
			$b= $row['id_user'];
			$user=$row['name'];
			$filename_user='application/views/name_view.php';
			file_put_contents($filename_user, $user);
			$filename='application/views/content2_view.php';
		   	file_put_contents($filename, $b);
			$this->answer='Добро пожаловать,'.$user.'!';
		} else {
			$this->answer='Проверьте введенные данные!';
		}
		}
	}
}

?>