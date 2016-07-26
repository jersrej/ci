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
		//$this->load->view('skupull');
	}	

	public function validation(){
		$this->_success();
	}
	
	public function _success(){
		$data_row_sku = $this->input->get('skus');
		
		$f = file_get_contents('https://www.lazada.com.ph/mobapi/all-products/?q=' & $data_row_sku);
		var_dump($f); 
		
		echo $data_row_sku;
		
		return $data_row_sku;
	}
}