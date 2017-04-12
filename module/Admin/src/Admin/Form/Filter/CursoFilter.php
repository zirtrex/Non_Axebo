<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class CursoFilter extends InputFilter
{    
    public function __construct()
    {
        
    	$this->add(
    			array(
    					'name' => 'codigo',
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
    							    			'min' => 2,
    											'max' => 45,
    									),
    							),
    					),
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'curso',
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
    											'max' => 200,
    									),
    							),
    					),
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'nivel',
    					'required' => false,
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
    					'name' => 'abreviatura',
    					'required' => false,
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
    											'max' => 10,
    									),
    							),
    					),
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'creditos',
    					'required' => false,
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
    											'max' => 3,
    									),
    							),
    					),
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'codPlanEstudio',
    					'required' => true,
    			)
    	);

    }
}