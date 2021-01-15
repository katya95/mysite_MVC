<?php

class Controller_Enter2 extends Controller
{
	
	function action_index()
	{
		$this->view->generate('enter2_view.php', 'template_view.php');
	}
}
?>