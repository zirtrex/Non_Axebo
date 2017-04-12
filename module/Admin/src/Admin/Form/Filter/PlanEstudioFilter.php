<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class PlanEstudioFilter extends InputFilter
{    
    public function __construct()
    {
    	$this->add(
    			array(
    					'name' => 'codPlanEstudio',
    					'required' => true
    			)
    	);
        
    	$this->add(
    			array(
    					'name' => 'titulo',
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
    							    			'min' => 10,
    											'max' => 250,
    									),
    							),
    					),
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'anioPlanEstudio',
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
    											'max' => 4,
    									),
    							),
    					),
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'numeroCiclos',
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
    											'min' => 1,
    											'max' => 2,
    									),
    							),
    					),
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'codCarreraProfesional',
    					'required' => true,
    			)
    	);

    }
}