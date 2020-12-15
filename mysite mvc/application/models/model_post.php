<?php

class Model_post extends Model
{
protected $db;
    public function __construct($db) {
        $this->db = $db;
        
        
    }
	public function get_data()
	{	
		
		
		
		return $this->db->getColumn("SELECT * FROM post");
       // foreach (($this->db->getColumn("SELECT * FROM post")) as $item) {
 // echo $item['title'].' '. $item['text'].'<br>';
	}

}
?>