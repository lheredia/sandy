<?php 

class Usuarios extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->model('MUsuarios');
        
    }
    
	public function index()
	{
        
        $records = $this->MUsuarios->read();
        
        $this->load->view('usuarios/list', [
            'f'=>$records,
            'tf'=>count($records)
        ]);
        
	}
    
    public function create() {
        
        $input = [
            'nombre'=>$this->input->post('nombre'),
            'pass'=>$this->input->post('pass'),
            'activo'=>$this->input->post('activo'),
            'isGod'=>$this->input->post('isGod'),
        ];
        
        $this->MUsuarios->create($input);
        
        redirect('usuarios/');
        
    }
    
    public function eliminar() {
        
        $input = [
            'id'=>$this->input->post('id'),
        ];
        
        $this->MUsuarios->delete($input);
        
        redirect('usuarios/');
        
    }
    
    public function modificar() {
        
        $input = [
            'id'=>$this->input->post('id'),
            'nombre'=>$this->input->post('nombre'),
            'pass'=>$this->input->post('pass'),
            'activo'=>$this->input->post('activo'),
            'sistema'=>$this->input->post('sistema'),
            'isGod'=>$this->input->post('isGod'),
        ];

        $this->MUsuarios->update($input);
        
        redirect('usuarios/');
        
    }
    
}
