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

	public function getIdUser()
	{
 		$data=$this->getIdModel();
		foreach ($data as $item) {
			echo 'Пользователь '.$this->getNameModel($item).' '. $this->getSurnameModel($item).'<br/>';
			echo 'Город: '.$this->getCityModel($item).'<br/>';
			echo 'Емейл: '.$this->getEmailModel($item).'<br/>';
  			echo '<br/>';
		}
	}	

}

?>