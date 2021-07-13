<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
 
 

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
   

		$this->load->view('login_v');
		 
	}
	var $msj;
	public function inicio()
	{
		$this->msg =0;
		$d['msg'] = $this->msg;
		$users['usuarios'] = $this->Mi_model->get_user();
		if ($this->session->userdata('user')) {
			$this->load->view('cabeza');
			$this->load->view('principal',$users);
			$this->load->view('pie',$d);
	  } else {
			redirect('/');
	  }  
		
	}
	public function inicio2()
	{
		$this->msg =1;
		$d['msg'] = $this->msg;
		$users['usuarios'] = $this->Mi_model->get_user();
		if ($this->session->userdata('user')) {
			$this->load->view('cabeza');
			$this->load->view('principal',$users);
			$this->load->view('pie',$d);
	  } else {
			redirect('/');
	  }  
		
	}

	
	public function guarda()
	{
		$this->load->database();
		$id = $this->db->order_by('id',"desc")->limit(1)->get('tiempo')->row('id');
		$hi = $this->db->order_by('id',"desc")->limit(1)->get('tiempo')->row('h_inicio');
		$hf = $this->db->order_by('id',"desc")->limit(1)->get('tiempo')->row('h_fin');

		

		$dia = $_POST['fecha'];
		$data['tiempo'] = $this->Mi_model->get_dato($id);
		$a = $_POST['t1'];
		$b = $_POST['t2'];
		$c = $_POST['t3'];
		$dato=$a.':'.$b.':'.$c;
		$hoy = getdate();
		$hora=$hoy['hours'].':'.$hoy['minutes'].':'.$hoy['seconds'];
		 
  		   
				$datos = array(
					'nombre' => $this->input->post('nombre'),
					'hora'=>$dato,
					'dia' => $this->input->post('fecha'),
					'h_inicio' => $this->input->post('hrs_i'),
					'h_fin' => $hora
				);
			 
			$this->Mi_model->update_dato($id,$datos);
			redirect('Inicio/inicio');
		 
			
	 	  
	}

	public function valida(){
		$nombre = $this->input->post('nombre');
		$cve = $this->input->post('cve');
		$user = $this->Mi_model->get_usuario($nombre,$cve);

		if ( $user ){
			$this->session->set_userdata('user',$user);
			redirect('Inicio/inicio');
		   
		} else
		{
			redirect('/');
		}

   }
   public function cierra_sesion(){
		$this->session->sess_destroy();
		$this->load->view('login_v');
}
	 

}