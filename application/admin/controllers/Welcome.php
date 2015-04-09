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
		//$this->output->cache( 5 );
		
		$this->load->view('welcome_message');
	}
	
	public function td()
	{
		$iSize = 1024000;
		$iSum = 0;
		for( $i = 0; $i < $iSize; ++$i )
		{
			$iSum += $i;
		}
	
		echo $iSum;
	}
	
	
	function t()
	{
		$this->output->cache( 5 );
		$this->load->view( 't' );
	}
	
}
