<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {
    
    public function detalhe($slug)
    {

        $this->load->model('curso_model');
        $this->load->model('matriz_model');
        $this->load->model('docente_model');
        $this->load->model('diferencial_model');
        

        $data['curso'] = $this->curso_model->getBySlug($slug)->row();
        
        $cursoId = $data['curso']->curso_id;
        
        $matrizUnsorted = $this->matriz_model->get($cursoId)->result();
        
        $data['matriz_curricular'] = self::sortMatriz($matrizUnsorted);

        $data['diferenciais'] = array_filter(preg_split("/\\r\\n|\\r|\\n|;/", $data['curso']->curso_diferencial));
        
        $data['detalhes'] = $this->diferencial_model->get($cursoId)->result();
        $data['docentes'] = $this->docente_model->get($cursoId)->result();

        $this->load->view('main/includes/header', $data);
        $this->load->view('main/curso', $data);
        $this->load->view('main/includes/footer', $data);
        
    }

    private function sortMatriz($matrizUnsorted)
    {
        $matrizSorted = [];
        $temp = [];

        $semestre = 1;

        foreach ($matrizUnsorted as $matriz) {
            if ($matriz->matriz_periodo != $semestre) {
                array_push($matrizSorted, $temp);
                $temp = [];
                $semestre++;
            }
            array_push($temp, $matriz);
        }
        
        array_push($matrizSorted, $temp);

        return $matrizSorted;
    }
}

/* End of file Curso.php */
