<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



class Sync extends CI_Controller {

    private $tables = [
        'cursos' => [
            'name' => 'cursos',
            'prefix' => 'curso_'
        ],
        'matriz_curricular' => [
            'name' => 'curso_matriz_curricular',
            'prefix' => 'matriz_'
        ],
        'docentes' => [
            'name' => 'docentes',
            'prefix' => 'docente_'
        ],
        'avaliacao' => [
            'name' => 'cursos_avaliacao',
            'prefix' => '' 
        ],
        'diferenciais' => [
            'name' => 'cursos_diferencial',
            'prefix' => ''
        ]
    ];

    public function index()
    {
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '2048M');
        
        $data = json_decode(file_get_contents(base_url('cursos.json')));
        $dataParsed = json_decode(json_encode(self::extractCursoMatrizDocentes($data)), FALSE);
        $metas = json_decode(json_encode(self::getMetas()));
        
        // $this->db->query('SET FOREIGN_KEY_CHECKS = 0;');
        
        // foreach (json_decode(json_encode($this->tables)) as $table) {
        //     $this->db->query("TRUNCATE TABLE $table->name;");
        // }

        // $this->db->query('SET FOREIGN_KEY_CHECKS = 1;');
            
        self::updateNomesValores($data);
        // self::updateCursos($dataParsed);
        // self::updateAvaliacao(json_decode(file_get_contents(base_url('avaliacao.json'))));
        // self::updateIcons();
        
        // foreach ($metas as $meta) {
        //     $this->db
        //         ->where('curso_id', $meta->curso)
        //         ->update('cursos', 
        //         [
        //             'curso_keywords' => $meta->keywords,
        //             'curso_description' => $meta->description
        //         ]
        //     );
        // }
        
        
    }

    private function updateNomesValores($cursos){

        foreach ($cursos as $curso) {
            
            // echo "<pre>";
            // print_r ($curso);
            // echo "</pre>";
            
            $this->db->where('curso_id', $curso->codigoCurso)->update(
                $this->tables['cursos']['name'],
                [
                    'curso_nome' => $curso->nome,
                    'curso_valor' => $curso->valor
                ]
            );
        }

    }

    private function updateCursos($dataParsed){
        
        foreach ($dataParsed as $curso) {
            $this->db->insert(
                $this->tables['cursos']['name'],
                $curso
            );

            foreach ($curso->matriz_curricular as $matriz) {

                $matriz->curso_id = $curso->curso_id;

                $this->db->insert(
                    $this->tables['matriz_curricular']['name'],
                    $matriz
                );
            }

            foreach ($curso->docentes as $docente) {

                $docente->curso_id = $curso->curso_id;

                $this->db->insert(
                    $this->tables['docentes']['name'],
                    $docente
                );
            }
            

            // self::updateDiferencial($curso->curso_id, get_detalhes($curso->curso_detalhes));

        }

    }

    private function updateIcons(){
        $cursos = $this->db->get('cursos')->result();
        foreach ($cursos as $curso) {
            # code...
            if (!is_dir('assets/img/cursos/icones/' . $curso->curso_slug)) {
                echo 'making dir: ' . 'assets/img/cursos/icones/' . $curso->curso_slug . '<br>';
                mkdir('assets/img/cursos/icones/' . $curso->curso_slug, 0777, true);
            }
        }
    }

    private function updateDiferencial($id, $detalhes){
        foreach ($detalhes as $value) {
            $this->db->insert(
                $this->tables['diferenciais']['name'],
                [
                    'curso' => $id,
                    'titulo' => $value
                ]
            );
        }
    }

    private function updateAvaliacao($data){
        foreach ($data as $value) {
            $this->db->where('curso_id', $value->CURSO_ID)->update(
                $this->tables['cursos']['name'],
                [
                    $this->tables['cursos']['prefix'] . 'nota_mec' => $value->MEC,
                    $this->tables['cursos']['prefix'] . 'nota_enade' => $value->ENADE,
                    $this->tables['cursos']['prefix'] . 'nota_cpc' => $value->CPC,
                    $this->tables['cursos']['prefix'] . 'nota_guia_do_estudante' => $value->GUIA_DO_ESTUDANTE
                ]
            );
        }

        return;
    }

    private function getMetas(){
        return json_decode(file_get_contents(base_url('metas.json')));
    }

    private function extractCursoMatrizDocentes($data){
        
        $cursos = [];
        $i = 0;

        foreach ($data as $curso) {

            array_push($cursos, [
                $this->tables['cursos']['prefix'] . 'id' => $curso->codigoCurso,
                $this->tables['cursos']['prefix'] . 'erp' => $curso->codigoERP,
                $this->tables['cursos']['prefix'] . 'nome' => $curso->nome,
                $this->tables['cursos']['prefix'] . 'slug' => $curso->slug,
                $this->tables['cursos']['prefix'] . 'ativo' => $curso->ativo,
                $this->tables['cursos']['prefix'] . 'coordenacao' => $curso->coordenacao,
                $this->tables['cursos']['prefix'] . 'valor' => $curso->valor,
                $this->tables['cursos']['prefix'] . 'vagas' => $curso->vagas,
                $this->tables['cursos']['prefix'] . 'portaria' => $curso->portaria,
                $this->tables['cursos']['prefix'] . 'duracao' => $curso->duracao,
                $this->tables['cursos']['prefix'] . 'periodo' => $curso->periodo,
                $this->tables['cursos']['prefix'] . 'diferencial' => $curso->diferencial,
                $this->tables['cursos']['prefix'] . 'atuacao' => $curso->voceAtua,
                $this->tables['cursos']['prefix'] . 'aprende' => $curso->voceAprende,
                $this->tables['cursos']['prefix'] . 'detalhes' => $curso->detalhesHome,
                $this->tables['cursos']['prefix'] . 'resumo' => $curso->resumo,
                $this->tables['cursos']['prefix'] . 'email' => $curso->email
            ]);
            
            $matrizes = [];

            foreach ($curso->matrizCurricular as $matriz) {
                array_push($matrizes, [
                    $this->tables['matriz_curricular']['prefix'] . 'id' => $matriz->codigoMatrizCurricular,
                    $this->tables['matriz_curricular']['prefix'] . 'periodo' => $matriz->periodo,
                    $this->tables['matriz_curricular']['prefix'] . 'semestre' => $matriz->semestre,
                    $this->tables['matriz_curricular']['prefix'] . 'carga_horaria' => $matriz->cargaHoraria,
                    $this->tables['matriz_curricular']['prefix'] . 'disciplina' => $matriz->disciplina
                ]);
            }
            
            $docentes = [];
            
            foreach ($curso->docentes as $docente) {
                array_push($docentes, [
                    $this->tables['docentes']['prefix'] . 'nome' => $docente->nome,
                    $this->tables['docentes']['prefix'] . 'lattes' => $docente->lattes,
                    $this->tables['docentes']['prefix'] . 'titulo' => $docente->titulo
                ]);
            }

            $cursos[$i]['matriz_curricular'] = $matrizes;
            $cursos[$i]['docentes'] = $docentes;
            $i++;
        }
    
        return $cursos;
    }

}

/* End of file Sync.php */
