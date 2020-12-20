<?php

class Model_user extends Model
{
protected $db;
    public function __construct($db) {
        $this->db = $db;
        
        
    }
	public function get_data()
	{	
		
		$id = file_get_contents('application/views/content2_view.php');
	    return $this->db->getColumn("SELECT * FROM post  WHERE `id_user` = ?", [$id]);
      
	}

}
?>