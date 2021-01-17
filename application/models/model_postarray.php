<?php

class Model_Postarray extends Model
{
	
	public function get_data()
	{	
		//This array created for exemple of output posts from file
		return array(
			
			array(
				'name' => 'vasya',
				'title' => 'Пост 1',
				'text' => 'текст текст текст текст ".'
			),

			array(
				'name' => 'anna',
				'title' => 'Пост 2',
				'text' => 'текст текст текст текст ".'
			),

			array(
				'name' => 'petya',
				'title' => 'Пост 3',
				'text' => 'текст текст текст текст ".'
			),

			array(
				'name' => 'nina',
				'title' => 'Пост 4',
				'text' => 'текст текст текст текст ".'
			),

		);
	}

}
?>