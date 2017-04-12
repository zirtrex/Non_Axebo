<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class DocenteFilter extends InputFilter
{    
    public function __construct()
    {
    	$this->add(
    			array(
    					'name' => 'codDocente',
    					'required' => false,
    			)
    	);
        
    	$this->add(
    			array(
    					'name' => 'modalidad',
    					'required' => true,
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'gradoAcademico',
    					'required' => true,
    					'filters' => array(
    							array('name' => 'StripTags'),
    							array('name' => 'StringTrim'),
    					),
    					'validators' => array(
    							array(
    									'name' => 'StringLength',
    									'options' => array(
    											'encoding' => 'UTF-8',
    											'min' => 4,
    											'max' => 250,
    									),
    							),
    					),
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'profesion',
    					'required' => true,
    					'filters' => array(
    							array('name' => 'StripTags'),
    							array('name' => 'StringTrim'),
    					),
    					'validators' => array(
    							array(
    									'name' => 'StringLength',
    									'options' => array(
    											'encoding' => 'UTF-8',
    											'min' => 4,
    											'max' => 100,
    									),
    							),
    					),
    			)
    	);

    }
}