<?php
 
class Controller_User extends Controller
{
	//linking the DB and model, which implements data output using PDO
	protected $db;
    public function __construct()
     {
         $this->view = new View();
         $this->db = new DB();
         $this->model = new ModelUser( $this->db);
    }
	//for output page "user" using general template
	function action_index()
	{
		$data = $this->model->getData();		
		$this->view->generate('user_view.php', 'template_view.php', $data);
	}

}