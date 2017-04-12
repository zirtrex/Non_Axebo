<?php
namespace Admin\Form;

use Zend\Form\Form;


class FileForm extends Form
{
    
    public function __construct()
    {        
        parent::__construct('Archivos');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype','multipart/form-data');        
        
        $this->add(array(
        		'name' => 'tabla',
        		"type"     => 'Zend\Form\Element\Select',
        		"options"  => array(        				
        				'value_options' => $this->getNombreTablas(),
        				'empty_option' => '--Seleccione nombre de la tabla a insertar--',
        		),
        		'attributes' => array(
        				'class' => 'form-control',
        		),
        ));        
        
        $this->add(array(
        		'name' => 'csv',
        		'attributes' => array(
        				'type' => 'file',
        		        'id' => 'csv',
        		        'required' => 'required',
        		),        		
        )); 

        $this->add(array(
        		'type'    => 'Zend\Form\Element\Csrf',
        		'name'    => 'csrf'
        ));
         
        $this->add(array(
        		'name' => 'submit',
        		'attributes' => array(
        				'type' => 'submit',
        				'value' => 'Subir archivo',
        				'class' => 'btn btn-primary',
        		)
        ));
    }
    
    public function getNombreTablas()
    {    	 
    	return array(
    			'area_conocimiento' 	=> 'area_conocimiento',
    			'carrera_profesional' 	=> 'carrera_profesional',
    			'ciclo_academico' 		=> 'ciclo_academico',
    			'usuario' 				=> 'usuario',
    			'persona' 				=> 'persona',
    			'administrador' 		=> 'administrador',
    			'estudiante' 			=> 'estudiante',
    			'docente' 				=> 'docente',
    			'plan_estudio' 			=> 'plan_estudio',
    			'curso' 				=> 'curso',
    			'semana' 				=> 'semana',
    			'tematica' 				=> 'tematica',
    			'silabo_detalle' 		=> 'silabo_detalle',    			
    			'curso_aperturado' 		=> 'curso_aperturado',
    			'modalidad' 			=> 'modalidad',
    			'aula' 					=> 'aula',
    			'seccion' 				=> 'seccion',
    			'carga_academica' 		=> 'carga_academica',
    			'dia_semana' 			=> 'dia_semana',
    			'horario' 				=> 'horario',
    			'matricula' 			=> 'matricula'
    	);
    
    }
   
}

?>