<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class EstudianteFilter extends InputFilter
{    
    public function __construct()
    {
        
    	$this->add(
    			array(
    					'name' => 'anioIngreso',
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

    }
}