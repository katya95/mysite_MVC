﻿<?php

class View
{
	//general template
	function generate($content_view, $template_view, $data = null)
	{
		include 'application/views/'.$template_view;
	}
}
?>