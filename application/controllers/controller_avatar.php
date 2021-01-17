<?php

class Controller_Avatar extends Controller
{
	
	function action_index()
	{
		$this->view->generate('avatar_view.php', 'template_view.php');
	}
}
?>