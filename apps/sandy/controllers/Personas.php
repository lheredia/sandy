<?php 

class Personas extends MY_Controller {
    
    public $table = 'personas';
    public $fields = [
        'id',
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'sexo',
        'correoElectronico',
        'fechaNacimiento',
        'nombrePreferencia',
    ];
    
}
