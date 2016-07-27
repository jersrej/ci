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

		//header('Content-type: application/json');
		
		echo "3";
		
		$url = 'https://www.lazada.com.ph/mobapi/all-products/?q=' . $data_row_sku;
		$json = file_get_contents($url);
		$json_data = json_decode($json, TRUE);
		//$json_data = json_decode(json_encode($json), TRUE);
		//var_dump($json_data);
		//echo "My token: ". $json_data->{'metadata'};
		
		foreach ($json_data as $v) {
			//echo $v['metadata'];
			//echo $v->'metadata';
		}

		
		//$f = file_get_contents($url);
		//var_dump($f); 
		echo "<br />";
		echo $data_row_sku;
		
		return $data_row_sku;
	}
}