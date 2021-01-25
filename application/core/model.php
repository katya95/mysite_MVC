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
	public function getNameModel($id)
	{
		return $this->db->getValue("SELECT `name` FROM `user` WHERE `id_user` = ?", [$id]);
	}

	public function getSurnameModel($id)
	{
		return $this->db->getValue("SELECT `surname` FROM `user`WHERE `id_user` = ?", [$id]);
	}
	
	public function getCityModel($id)
	{
		return $this->db->getValue("SELECT `city` FROM `user` WHERE `id_user` = ?", [$id]);
	}
	
	public function getEmailModel($id)
	{
		return $this->db->getValue("SELECT `email` FROM `user` WHERE `id_user` = ?", [$id]);
	}
	
}

	
?>