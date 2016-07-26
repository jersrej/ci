<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pull extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->load->model('database_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		//$this->load->library('email');
	}
	
	public function index(){
		$this->load->view('skupull');
	}	
}