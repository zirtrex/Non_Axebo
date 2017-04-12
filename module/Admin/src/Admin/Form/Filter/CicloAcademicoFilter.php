<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class CicloAcademicoFilter extends InputFilter
{    
    public function __construct()
    {
    	$this->add(
    			array(
    					'name' => 'codCicloAcademico',
    					'required' => true
    			)
    	);
    	
    	$this->add(
    			array(
    					'name' => 'anio',
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
    					'name' => 'semestre',
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

    }
    
}