<?php

class Controller_Insert extends Controller
	{
	protected $db;
	//linking the DB and model, which implements data output using PDO
    public function __construct() 
    {
        $this->view = new View();
         $this->db = new DB();
        $this->model = new ModelInsert( $this->db);
    }

	function action_index()
	{
	$data = $this->model->get_data();		
	$this->view->generate('insert_view.php', 'template_view.php', $data);
	}
}
?>