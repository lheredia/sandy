<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplicacion extends CI_Controller {
    
	public function index()
	{
        
        log_message('debug', 'Antes de ver vista');
        log_message('error', 'Se callo el internet');
        
		$this->load->view('aplicacion');
        
	}
    
    public function usuarios()
	{
        
        $query = $this->db->get('usuarios');
        
        if( !$query) {
            
            exit('error');
            
        }
        
        $records = $query->result_array();
        
        $this->load->view('usuarios', [
            'f'=>$records,
            'tf'=>count($records)
        ]);
        
	}
    
	public function saludo($idioma = 'es')
	{
        
        $this->load->view('saludo', [
            'idioma'=>$idioma,
            'idiomas'=>[
                [
                    'id'=>1,
                    'nombre'=>'Español',
                ],
                [
                    'id'=>2,
                    'nombre'=>'English',
                ],
                [
                    'id'=>3,
                    'nombre'=>'Frances',
                ]
            ]
        ]);
        
	}
}
