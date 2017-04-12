<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class CarreraProfesionalFilter extends InputFilter
{    
    public function __construct()
    {   
    	$this->add(array(
    			'name' => 'codCarreraProfesional',
    			'required' => true
    	));
    	 
    	$this->add(array(
    			'name' => 'codigo',
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
    	));
    	 
    	$this->add(array(
    			'name' => 'carreraProfesional',
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
    									'max' => 250,
    							),
    					),
    			),
    	));

    	$this->add(
    			array(
    					'name' => 'codAreaConocimiento',
    					'required' => true,
    			)
    	);
     
    }
}