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
        ];
        
        $query = $this->db->insert('usuarios', $input);
        
        if( !$query) {
            
            exit('error');
            
        }
        
        $input ['id']= $this->db->insert_id();
        
        /* diccionario de datos  */
        $data = [
            'usuario'=>$input
        ];
        
        $this->load->view('usuarios/create', $data);
        
    }
    
    public function update() {
        
        $input = [
            'id'=>$this->input->post('id'),
            'nombre'=>$this->input->post('nombre'),
            'pass'=>$this->input->post('pass'),
        ];
        
        $this->db->where('id', $input['id']);
        
        unset($input['id']);
        
        $query = $this->db->update('usuarios', $input);
        
        if( !$query) {
            
            exit('error');
            
        }
        
        /* diccionario de datos  */
        $data = [
            'usuario'=>$input
        ];
        
        $this->load->view('usuarios/update', $data);
        
    }
    
}
