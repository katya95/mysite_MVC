<?php

class Controller_Enter extends Controller
{
	
	function action_index()
	{
		$this->view->generate('enter_view.php', 'template_view.php');
	}
}
?>