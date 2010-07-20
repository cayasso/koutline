<?php defined('SYSPATH') or die('No direct script access.');

abstract class Kohana_Koutline_Controller_Template extends Controller {
	
	/**
	 * @var  string  page template
	 */
	public $template = 'template';

	/**
	 * @var  boolean  auto render template
	 **/
	public $auto_render = TRUE;

	/**
	 * Loads the template [View] object.
	 */
	public function before()
	{
		if ($this->auto_render === TRUE)
		{		
			$this->template = View::factory($this->template, NULL, 'koutline');		
		}

		return parent::before();
	}
	
	/**
	 * Assigns the template [View] as the request response.
	 */
	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			$this->request->response = $this->template;
		}

		return parent::after();
	}

	
} // End Controller_Template
