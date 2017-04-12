<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class AreaConocimientoFilter extends InputFilter
{    
    public function __construct()
    {   
    	$this->add(array(
    			'name' => 'codAreaConocimiento',
    			'required' => true
    	));
    	 
    	$this->add(array(
    			'name' => 'areaConocimiento',
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
    									'max' => 100,
    							),
    					),
    			),
    	));      
     
    }
}