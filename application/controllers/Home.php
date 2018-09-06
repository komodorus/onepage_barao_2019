<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('curso_model');

		$dias_ate = self::getDaysUntil('27-10-2018'); //retorna um array com o numero de dias;

		$data = [
			'cursos' => $this->curso_model->get()->result(),
			'dias_ate' => $dias_ate
		];

		$this->load->view('main/includes/header');
		$this->load->view('main/home', $data, false);
		$this->load->view('main/includes/footer');
	}

	public function getDaysUntil($end){

		$dStart = new DateTime('now');
		$dEnd = new DateTime($end);

		$dDiff = $dStart->diff($dEnd);

		$array = array_map('intval', str_split((int)$dDiff->days + 1));
		
		if(!isset($array[1])){
			array_unshift($array, 0);
		}

		return $array;

	} 


}
