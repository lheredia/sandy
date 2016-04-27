<?php

class MUsuarios extends CI_Model
{
    
    public function create($input) {
        
        $query = $this->db->insert('usuarios', $input);
        
        if( !$query) {
            
            exit('error');
            
        }
        
        return $this->db->insert_id();
        
    }
    
    public function read() {
        
        $query = $this->db->get('usuarios');
        
        if( !$query) {
            
            return FALSE;
            
        }
        
        return $query->result_array();
        
    }
    
    public function update($input) {
        
        $this->db->where('id', $input['id']);
        
        unset($input['id']);

        $query = $this->db->update('usuarios', $input);
        
        if( !$query) {
            
            return FALSE;
            
        }
        
        return TRUE;
        
    }
    
    public function delete($input) {
        
        $query = $this->db
            ->where('id', $input['id'])
            ->delete('usuarios');
        
        if( !$query) {
            
            return FALSE;
            
        }
        
        return TRUE;
        
    }
    
}
