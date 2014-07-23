<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reinforce extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> database();
		$this -> load -> library('session');
		$this -> load -> helper('alert');
	}
	
	public function _remap(){
		$login_data = $this->session->userdata('login_data');
		if(isset($login_data))
		$data['login_data'] = $login_data;
		$reinforc_array=array('subject'=>$this->input->post('subject'),
		'reason'=>$this->input->post('reason'),
		'month'=>$this->input->post('month'),
		'day'=>$this->input->post('day'),
		'startTime'=>$this->input->post('startTime'),
		'endTime'=>$this->input->post('endTime'),
		'classroom'=>$this->input->post('classroom')
		);
		if($reinforc_array['subject']!=null || $reinforc_array['reason']!=null || $reinforc_array['month']!=null || 
		$reinforc_array['day']!=null || $reinforc_array['startTime']!=null || $reinforc_array['endTime']!=null || $reinforc_array['classroom']!=null){
		$this->load->model('reinforce_model');
		$this->reinforce_model->reinforce_registration($reinforc_array);
		}
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('reinforce', $data);
		$this->load->view('footer');
	}
}