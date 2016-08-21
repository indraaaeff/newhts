<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Extended the core Router class to allow for sub-sub-folders in the controllers directory.
*/
class MY_Router extends CI_Router {

	function __construct()
	{
		parent::__construct();
	}

	function _validate_request($segments)
	{
		if (count($segments) == 0)
		{
			return $segments;
		}

		// Does the requested controller exist in the root folder?
		if (file_exists(APPPATH.'controllers/'.$segments[0].'.php'))
		{
			return $segments;
		}
		// Is the controller in a sub-folder?
		if (is_dir(APPPATH.'controllers/'.$segments[0]))
		{
			// Set the directory and remove it from the segment array
			$this->set_directory($segments[0]);
			$segments = array_slice($segments, 1);

			while (count($segments) > 0 && is_dir(APPPATH.'controllers/'.$this->directory.$segments[0]))
			{
				// Set the directory and remove it from the segment array
				$this->set_directory($this->directory . $segments[0]);
				$segments = array_slice($segments, 1);
			}

			if (count($segments) > 0)
			{
				// Does the requested controller exist in the sub-folder?
				if ( ! file_exists(APPPATH.'controllers/'.$this->fetch_directory().ucfirst($segments[0]).'.php'))
				{
					if ( ! empty($this->routes['404_override']))
					{
						$x = explode('/', $this->routes['404_override']);

						$this->set_directory('');
						$this->set_class($x[0]);
						$this->set_method(isset($x[1]) ? $x[1] : 'index');

						return $x;
					}
					else
					{
						show_404($this->fetch_directory().$segments[0]);
					}
				}else{
					$this->set_class($segments[0]);
					$this->set_method(isset($segments[1]) ? $segments[1] : 'index');
				}
			}
			else
			{
				// Is the method being specified in the route?
				if (strpos($this->default_controller, '/') !== FALSE)
				{
					$x = explode('/', $this->default_controller);

					$this->set_class($x[0]);
					$this->set_method($x[1]);
				}
				else
				{
					$this->set_class($this->default_controller);
					$this->set_method('index');
				}

				// Does the default controller exist in the sub-folder?
				if ( ! file_exists(APPPATH.'controllers/'.$this->fetch_directory().$this->default_controller.'.php'))
				{
					$this->directory = '';
					return array();
				}

			}

			return $segments;
		}


		// If we've gotten this far it means that the URI does not correlate to a valid
		// controller class.  We will now see if there is an override
		if ( ! empty($this->routes['404_override']))
		{
			$x = explode('/', $this->routes['404_override']);

			$this->set_class($x[0]);
			$this->set_method(isset($x[1]) ? $x[1] : 'index');

			return $x;
		}


		// Nothing else to do at this point but show a 404
		show_404($segments[0]);
	}

	function set_directory($dir, $append = false)
	{
		// Allow forward slash, but don't allow periods.
		$this->directory = str_replace('.', '', $dir).'/';
	}

	function _set_default_controller()
	{
		if (empty($this->default_controller))
		{
			show_error('Unable to determine what should be displayed. A default route has not been specified in the routing file.');
		}
		// Is the method being specified?
		if (sscanf($this->default_controller, "%[^/]/%s",$class, $method) !== 2)
		{
			$method = 'index';
		}

		$dfltCtrl = explode('/', $this->default_controller);
		if (count($dfltCtrl)>2) {
			$this->set_directory($dfltCtrl[0]);
			$class = $dfltCtrl[1];
			$method = $dfltCtrl[2];
		}

		if ( ! file_exists(APPPATH.'controllers/'.$this->directory.ucfirst($class).'.php'))
		{
			// This will trigger 404 later
			return;
		}
		$this->set_class($class);
		$this->set_method($method);

		// Assign routed segments, index starting from 1
		$this->uri->rsegments = array(
			1 => $class,
			2 => $method
		);

		log_message('debug', 'No URI present. Default controller set.');
	}

}

/* End of file MY_Router.php */
/* Location: ./application/core/MY_Router.php */