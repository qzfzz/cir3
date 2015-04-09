<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class EX_LOADER extends CI_Loader
{

	var $_ci_ob_level;
	var $_ci_view_path        = '';
	var $_ci_cached_vars    = array();
	var $_ci_classes        = array();
	var $_ci_models            = array();
	var $_ci_helpers        = array();
	
	
	/**
	 * Constructor
	 *
	 * Sets the path to the view files and gets the initial output buffering level
	 *
	 * @access    public
	*/
	function __construct()
	{
		$this->_ci_view_path = APPPATH.'views/';
		$this->_ci_ob_level  = ob_get_level();
	
		log_message('debug', "Loader Class Initialized");
	}
	
	
    /**
     * Loads library from module
     * done
     * @param  string
     * @param  string
     * @param  mixed
     * @return void
     * @access public
     */
    function module_library($module, $library = '', $params = null)
    {
        return $this->library($library, $params, NULL, $module);
    }


    /**
     * Loads model from module
     * done
     * @param  string
     * @param  string
     * @param  string
     * @param  mixed
     * @return void
     * @access public
     */
    function module_model($module, $model, $name = '', $db_conn = false)
    {
        return $this->model($model, $name, $db_conn, $module);
    }

    /**
     * Loads view from module
     * done
     * @param  string
     * @param  string
     * @param  array
     * @param  bool
     * @return void
     * @access public
     */
    function module_view( $module, $view, $vars = array(), $return = false)
    {
    	$this->add_package_path( FCPATH . 'application/' . $module, true );
    	
        return $this->view($view, $vars, $return, $module);
    }

    /**
     * Loads file from module
     *
     * @param  string
     * @param  string
     * @param  bool
     * @return void
     * @access public
     */
    function module_file($module, $path, $return = false)
    {
        return $this->file($path, $return, $module);
    }

    /**
     * Loads helper from module
     * done
     * @param  string
     * @param  mixed
     * @return void
     * @access public
     */
    function module_helper($module, $helpers = array())
    {
        return $this->helper($helpers, $module);
    }

    /**
     * Loads language file from module
     * done
     * @param  string
     * @param  mixed
     * @param  string
     * @return void
     * @access public
     */
    function module_language( $module, $file = array(), $lang = '')
    {
        return $this->language( $file, $lang, $module );
    }

    /**
     * Loads config file from module
     * done
     * @param  string
     * @param  string
     * @param  bool
     * @param  bool
     * @return void
     * @access public
     */
    function module_config( $module, $file = '', $use_sections = false, $fail_gracefully = false)
    {
        return $this->config( $file, $use_sections, $fail_gracefully, $module );
    }

    //}}}


   
}

?>