<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
// 		$this->load->language( 'date' );
		
// 		echo $this->lang->line( 'date_year' );

// 		$this->load->config( 'test' );
		
// 		echo $this->config->item( 'a' );

// 		$this->load->module_model( 'admin', 'ad' );
		
// 		var_dump( $this->ad->getInfo() );
		
// 		$this->log->log_message( '', '' );
// 		$this->load->module_view( 'admin', 'welcome_message' );
// phpinfo();
// 		$this->load->driver( 'cache' );
		
// 		var_dump( $this->cache->redis );
		
// 		var_dump( $this->cache->memcached->save( 'foo', 'bar', 10 ));
		
// 		var_dump( $this->cache->memcached->get( 'foo' ) );
// 		$this->output->cache( 10 );
// 		echo $this->cache->memcached->get( 'foo' );
		$this->load->view('welcome_message');
	}
	
	public function td()
	{
// 		$iSize = 1024000;
// 		$iSum = 0;
// 		for( $i = 0; $i < $iSize; ++$i )
// 		{
// 			$iSum += $i;
// 		}
	
// 		echo $iSum;
	}
	
	
	function t()
	{
// 		$this->output->cache( 5 );
		$this->load->view( 't' );
	}
	
}
