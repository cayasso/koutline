<?php defined('SYSPATH') or die('No direct script access.');

class View extends Kohana_View { 

	protected static $_parsers = array('koutline');
	
	protected static $_parser = NULL;
	
	protected $_file_name;
	
	/**
	 * Returns a new View object.
	 *
	 * @param   string  view filename
	 * @param   array   array of values
	 * @param   string  parser option
	 * @return  View
	 */
	public static function factory($file = NULL, array $data = NULL, $parser = NULL)
	{
		if (in_array($parser, self::$_parsers))
		{
			self::$_parser = $parser;
		}
				
		return new View($file, $data);
	}
	
	/**
	 * Sets the view filename.
	 *
	 * @throws  View_Exception
	 * @param   string  filename
	 * @return  View
	 */
	public function set_filename($file)
	{
		$this->_file_name = $file;	
		return parent::set_filename($file);
	}
	
	/**
	 * Renders the view object to a string. Global and local data are merged
	 * and extracted to create local variables within the view file.
	 *
	 * Note: Global variables with the same key name as local variables will be
	 * overwritten by the local variable.
	 *
	 * @throws   View_Exception
	 * @param    view filename
	 * @return   string
	 */	 
	 
	public function render($file = NULL)
	{
		if (Kohana::config('koutline')->integration AND self::$_parser === 'koutline')
		{	
			if ($file !== NULL)
			{
				$this->set_filename($file);
			}
	
			if (empty($this->_file))
			{
				throw new Kohana_View_Exception('You must set the file to use within your view before rendering');
			}
			
			return Koutline::factory($this->_file_name)->render($this->_data + View::$_global_data);			
		}
		
		return 	parent::render($file);		
	}
}