<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('curso_model');
		
		$data = [
			'cursos' => $this->curso_model->get()->result()
		];

		$this->load->view('main/includes/header');
		$this->load->view('main/home', $data, FALSE);
		$this->load->view('main/includes/footer');
	}
	
	public function test(){

		$this->load->model('curso_model');
		
		$json = [];
		
		$cursos = $this->curso_model->get()->result();
		
		foreach ($cursos as $curso) {
			array_push($json, [
				'curso' => $curso->curso_nome . ' | ' . $curso->curso_periodo,
				'codigo' => $curso->curso_id,
				'vagas' => $curso->curso_vagas
			]);
		}

		// header('Content-disposition: attachment; filename=file.json');
		// header('Content-type: application/json');
		
		echo "<pre>";
		print_r (json_encode($json, JSON_UNESCAPED_UNICODE));
		echo "</pre>";
		


	}

}
