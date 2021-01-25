<?php

class Controller_Profile extends Controller
{
protected $db;
    public function __construct()
     {
         $this->view = new View();
         $this->db = new DB();
         $this->model = new ModelProfile( $this->db);
    }

	function action_index()
	{
		$data = $this->model->getData();		
		$this->view->generate('profile_view.php', 'template_view.php',$data);
	}
}
?>