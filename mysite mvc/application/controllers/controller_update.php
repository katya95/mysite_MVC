<?php

class Controller_Update extends Controller
{
protected $db;
    public function __construct()
     {
         $this->view = new View();
         $this->db = new DB();
         $this->model = new ModelUpdate( $this->db);
    }

function action_index()
	{
		$data = $this->model->  updateUser();		
		$this->view->generate('update_view.php', 'template_view.php', $data);
	}
	
}
?>