<?php

class MY_Controller extends CI_Controller {
    
    public $table = '';
    public $autoIncrementable = TRUE;
    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->model('MCrud');
        
    }
    
    public function index() {
        
        $records = $this->MCrud->setTable($this->table)->read();
        
        $totalRecords = count($records);
        
        if( !$totalRecords) {
            
            $records = [
                array_flip($this->fields)
            ];
            
        }
        
        $this->load->view('list', [
            'title'=>$this->table,
            'baseUrl'=>SELF,
            'url'=>$this->table,
            'f'=>$records,
            'tf'=>$totalRecords
        ]);
        
	}
    
    public function create($input = []) {
        
        if( isset($this->fields)) {
            
            $input = $this->getInput();
            
        }
        
        /* ejecutamos modelo */
        $this->MCrud
            ->setTable($this->table)
            ->setAutoincrementable($this->autoIncrementable)
            ->create($input);
        
        /* redireccion  */
        redirect($this->table . '/');
        
    }
    
    public function getInput() {
        
        if( isset($this->fields)) {
            
            foreach ($this->fields as $field) {
                
                $input [$field]= $this->input->post($field);
                
            }
            
        }
        
        return $input;
        
    }
    
    public function modificar($input = []) {
        
        if( isset($this->fields)) {
            
            $input = $this->getInput();
            
        }

        $this->MCrud->setTable($this->table)->update($input);
        
        redirect($this->table . '/');
        
    }
    
    public function eliminar() {
        
        $input = [
            'id'=>$this->input->post('id'),
        ];
        
        $this->MCrud->setTable($this->table)->delete($input);
        
        redirect($this->table . '/');
        
    }
    
}
