<?php

class ModelPost extends Model
{
	protected $db;
    public function __construct($db)
    {
        $this->db = $db;  
    }
    // posts output
	public function getData()
	{	
  		return $post=$this->db->getRows("SELECT * FROM post");
	}

//Active Record
	public function getTitle($id)
	{
		return $this->db->getValue("SELECT `title` FROM `post` WHERE `id_post` = ?", [$id]);
	}

	public function getText($id)
	{
		return $this->db->getValue("SELECT `text` FROM `post` WHERE `id_post` = ?", [$id]);
	}
	
	public function getCount()
	{
		return $this->db->getValue("SELECT COUNT(1) FROM `post`");
	}
}

?>