<?php 

class Oficinas extends MY_Controller {
    
    public $table = 'oficinas';
    public $fields = [
        'id',
        'nombre',
        'activo',
        'externa'
    ];
    
    public function create($input = []) {
        
        if( isset($this->fields)) {
            
            $input = $this->getInput();
            
        }
        
        /* ejecutamos modelo */
        $this->MCrud
            ->setTable($this->table)
            ->setAutoincrementable(FALSE)->create($input);
        
        /* redireccion  */
        redirect($this->table . '/');
        
    }
    
}
