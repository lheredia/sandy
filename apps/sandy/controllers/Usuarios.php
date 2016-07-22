<?php 

class Usuarios extends MY_Controller {
    
    public $table = 'usuarios';
    
    public function create($input = []) {
        
        parent::create([
            'nombre'=>$this->input->post('nombre'),
            'pass'=>$this->input->post('pass'),
            'activo'=>$this->input->post('activo'),
            'isGod'=>$this->input->post('isGod'),
        ]);
        
    }
    
    public function modificar($input = []) {
        
        parent::modificar([
            'id'=>$this->input->post('id'),
            'nombre'=>$this->input->post('nombre'),
            'pass'=>$this->input->post('pass'),
            'activo'=>$this->input->post('activo'),
            'sistema'=>$this->input->post('sistema'),
            'isGod'=>$this->input->post('isGod'),
        ]);
        
    }
    
}
