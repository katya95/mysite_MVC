<?php

class Controller_Insert extends Controller
{
protected $db;
    public function __construct() {
        $this->view = new View();
         $this->model_db = new DB();
        $this->model = new Model_insert( $this->model_db);
    }

	
	function action_index()
	{
		$this->view->generate('insert_view.php', 'template_view.php');
	}
}
?>