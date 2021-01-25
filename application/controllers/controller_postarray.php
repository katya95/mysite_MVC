<?php

class Controller_Postarray extends Controller
{

	function __construct()
	{
		$this->model = new Model_Postarray();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('postarray_view.php', 'template_view.php', $data);
	}



    
    

}
?>