<?php
class Controller_Test extends Controller {

	public function action_index()
	{		
		$a = View::factory('include/a');
		
		echo View::factory('welcome', array('nombre' => 'John Doe Wilson', 'texto' => $a));
	}
}

