<?php

class Controller_Out extends Controller
{
	
	function action_index()
	{
		$this->view->generate('out_view.php', 'template_view.php');
	}
}
?>