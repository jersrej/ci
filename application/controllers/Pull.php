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
		//$sku  = array();
		//$name = array();
		//$url  = array();
		
		$data_row_sku = $this->input->get('skus');
		$exp = explode(',', $data_row_sku);
		
		foreach ($exp as $skus){
			//echo $a;
			$url = 'https://www.lazada.com.ph/mobapi/all-products/?q=' . $skus;
			$json = file_get_contents($url);
			$json_data = json_decode($json);

			if ($json_data->success){
				foreach ($json_data->metadata->results as $a) {	
					$results_html[]  = array(
						'output' => 
							"<li>
								<p>".$a->data->sku."</p>
								<p>".$a->data->name."</p>
								<p>".$a->data->url."</p>
							</li>"
							//"<li>".$a->data->name."</li>"
							//"<li>".$a->data->url."</li>"
					);
				}
			}
			//echo $sku. " " .$name. " " .$url;
			//echo "<br />";
		}
		echo $_GET['callback']. '(' . json_encode($results_html) . ');';
		//return $sku[];
	}
}