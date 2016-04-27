<?php 

class Usuarios extends CI_Controller {
    
	public function index()
	{
        
        $query = $this->db->get('usuarios');
        
        if( !$query) {
            
            exit('error');
            
        }
        
        $records = $query->result_array();
        
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
        
        $query = $this->db->insert('usuarios', $input);
        
        if( !$query) {
            
            exit('error');
            
        }
        
        $input ['id']= $this->db->insert_id();
        
        redirect('usuarios/');
        
    }
    
    public function eliminar() {
        
        $input = [
            'id'=>$this->input->post('id'),
        ];
        
        $query = $this->db->delete('usuarios', $input);
        
        if( !$query) {
            
            exit('error');
            
        }
        
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

        $this->db->where('id', $input['id']);
        
        unset($input['id']);

        $query = $this->db->update('usuarios', $input);
        
        if( !$query) {
            
            exit('error');
            
        }
        
        redirect('usuarios/');
        
    }
    
}
