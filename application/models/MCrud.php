<?php

class MCrud extends CI_Model
{
    
    public $table = '';
    public $autoIncrement = TRUE;
    
    public function setAutoincrementable($autoIncrement) {
        
        $this->autoIncrement = $autoIncrement;
        return $this;
        
    }
    
    public function setTable($name) {
        
        $this->table = $name;
        return $this;
        
    }
    
    public function create($input) {
        
        if( $this->autoIncrement) {
            
            unset($input['id']);
            
        }
        
        $query = $this->db->insert($this->table, $input);
        
        if( !$query) {
            
            return FALSE;
            
        }
        
        return $this->db->insert_id();
        
    }
    
    public function read() {
        
        $query = $this->db->get($this->table);
        
        if( !$query) {
            
            return FALSE;
            
        }
        
        return $query->result_array();
        
    }
    
    public function update($input) {
        
        $this->db->where('id', $input['id']);
        
        unset($input['id']);

        $query = $this->db->update($this->table, $input);
        
        if( !$query) {
            
            return FALSE;
            
        }
        
        return TRUE;
        
    }
    
    public function delete($input) {
        
        $query = $this->db
            ->where('id', $input['id'])
            ->delete($this->table);
        
        if( !$query) {
            
            return FALSE;
            
        }
        
        return TRUE;
        
    }
    
}
