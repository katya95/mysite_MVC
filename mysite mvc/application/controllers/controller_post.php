<?php
 
class Controller_Post extends Controller
{

	/*function __construct()
	{
		$this->model = new Model_Post();
		$this->view = new View();
	}
	*/

protected $db;
    public function __construct() {
        $this->view = new View();
         $this->db = new DB();
        $this->model = new Model_post( $this->db);
    }

function action_index()
	{
		$data = $this->model->get_post();		
		$this->view->generate('post_view.php', 'template_view.php', $data);
	}
    
    

}
?>