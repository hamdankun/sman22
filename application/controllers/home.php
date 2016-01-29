<?php

if ( ! defined('BASEPATH')) exit('No direct scrispt access allowed');
/**
* 
*/
class Home extends CI_Controller
{

	public $title = 'Home';
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = $this->title;
		$this->load->view('layout/header.php',$data);
		$this->load->view('home/index');
		$this->load->view('layout/footer.php');
	}

	public function coba()
	{
		$this->load->view('test.php');
	}
}


?>