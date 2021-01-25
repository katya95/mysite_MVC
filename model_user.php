<?php

class ModelUser extends Model
{
	protected $db;
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
	public function getId()
	{
		return $this->db->getColumn("SELECT `id_user` FROM `user`");
	}
	public function getName($id)
	{
		return $this->db->getValue("SELECT `name` FROM `user` WHERE `id_user` = ?", [$id]);
	}

	public function getSurname($id)
	{
		return $this->db->getValue("SELECT `surname` FROM `user`WHERE `id_user` = ?", [$id]);
	}
	
	public function getCity($id)
	{
		return $this->db->getValue("SELECT `city` FROM `user` WHERE `id_user` = ?", [$id]);
	}
	
	public function getEmail($id)
	{
		return $this->db->getValue("SELECT `email` FROM `user` WHERE `id_user` = ?", [$id]);
	}
	
	public function getIdUser()
	{
 		$data=$this->getId();
		foreach ($data as $item) {
			echo 'Пользователь '.$this->getName($item).' '. $this->getSurname($item).'<br/>';
			echo 'Город: '.$this->getCity($item).'<br/>';
			echo 'Емейл: '.$this->getEmail($item).'<br/>';
  			echo '<br/>';
		}
	}	

}

?>