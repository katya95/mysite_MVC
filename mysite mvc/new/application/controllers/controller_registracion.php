<?php

class Controller_Registracion extends Controller
{
	
	function action_index()
	{
		$this->view->generate('registracion_view.php', 'template_view.php');
	}
}
?>