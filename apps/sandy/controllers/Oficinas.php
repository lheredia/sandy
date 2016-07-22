<?php 

class Oficinas extends MY_Controller {
    
    public $table = 'oficinas';
    public $autoIncrementable = FALSE;
    public $fields = [
        'id',
        'nombre',
        'activo',
        'externa'
    ];
    
}
