<?php

class Model
{
	// method for fetching data
	public function get_data()
	{
		// todo
	}
	//The field "id_user" is index in database and used in all tables
public function getIdModel()
	{
		return $this->db->getColumn("SELECT `id_user` FROM `user`");
	}
	
}

	
?>