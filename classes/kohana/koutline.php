<?php defined('SYSPATH') or die('No direct script access.');

abstract class Kohana_Koutline {
	
	protected static $_instance;
	
	protected $_configs = array();
	
	protected $_template_file;
	
	protected $_compiled_file;
	
	protected $_file_name;
	
	/**
	 * Sets the initial template name and default configs. 
	 *
	 * @param   string  view template	
	 * @return  void
	 */
	public function __construct($file) 
	{				
		$this->_configs = Kohana::config('koutline')->configs;		
		$this->_file_name = $file;
	}

	/**
	 * Returns a new Koutline object.
	 *
	 * @param   string  view template	 
	 * @return  Koutline object
	 */
	public static function factory($template) 
	{
		return new Koutline ( $template );
	}
	
	/**
	 * Load Outline instance with configs.
	 *
	 * @throws   View_Exception
	 * @param    outline config options
	 * @return   Outline instance
	 */
	public static function load($config = NULL) 
	{	
		$configs = (is_array($config)) 
		? array_merge(kohana::config('koutline')->engine, $config) 
		: kohana::config('koutline')->engine;
		
		// return a new outline tpl instance
		self::$_instance = new Outline ( $configs );
		
		return self::$_instance;
	}
	
	/**
	 * Returns the template file.
	 *
	 * @throws   View_Exception
	 * @return   string
	 */
	public function template_file()
	{
		if (($path = Kohana::find_file('views', $this->_file_name)) === FALSE)
		{
			throw new Kohana_View_Exception('The requested view :file could not be found', array(
				':file' => $this->_file_name,
			));
		}
		
		return $this->template_file = $path;
	}
	
	/**
	 * Returns the compiled file.
	 *
	 * @return   string
	 */
	public function compiled_file()
	{
		return $this->_configs['compiled_path'] . $this->_file_name . $this->_configs['compiled_suffix'];	
	}
		
	/**
	 * Renders the view object to a string.
	 *
	 * @throws   View_Exception
	 * @param    data
	 * @return   string
	 */
	public function render($data = array()) 
	{		
		self::$_instance->compile($this->template_file(), $this->compiled_file(), $this->_configs['auto_compile']);
	
		// Import the view variables to local namespace
		extract($data, EXTR_SKIP);
		
		// Capture the view output
		ob_start();

		try
		{
			// Load the view within the current scope
			include self::$_instance->load($this->compiled_file());
		}
		catch (Exception $e)
		{
			// Delete the output buffer
			ob_end_clean();

			// Re-throw the exception
			throw $e;
		}

		// Get the captured output and close the buffer
		return ob_get_clean();
	}

} // End Koutline