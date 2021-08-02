<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
 
 

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
   
		 
		$users['usuarios'] = $this->Mi_model->get_user();
		$this->load->view('cabeza');
		$this->load->view('principal',$users);
		$this->load->view('pie');
		 
	}
	public function valida(){
		$nombre = $this->input->post('nombre');
		$cve = $this->input->post('cve');
		$user = $this->Mi_model->get_usuario($nombre,$cve);

		if ( $user ){
			$this->session->set_userdata('user',$user);
			$this->load->view('admin');
		   
		} else
		{
			redirect('/');
		}

   }
   public function cierra_sesion(){
		$this->session->sess_destroy();
		redirect('/');
}
   public function iniciar_sesion(){
	$this->load->view('login_v');
}
   public function admin(){
	$this->load->view('admin');
}
   public function admin2(){
	$this->load->view('admin2');
}
  
	 

}