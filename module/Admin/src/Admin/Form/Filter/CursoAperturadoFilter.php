<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class CursoAperturadoFilter extends InputFilter
{    
    public function __construct()
    {        
    	
    	$this->add(
    			array(
    					'name' => 'codCarreraProfesional',
    					'required' => true,
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'codCicloAcademico',
    					'required' => true,
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'codCurso',
    					'required' => true,
    			)
    	);

    }

}