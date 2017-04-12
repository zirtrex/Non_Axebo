<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class FileFilter extends InputFilter
{
   
    public function __construct()
    {
    	$this->add(array(
    			'name' => 'tabla',
    			'validators' => array(
    					array(
    							'name' => 'not_empty',
    							'options' => array(
    									'message' => 'Selecciona una tabla',
    							),
    					),
    			),
    	));    	
    	
        $this->add(array(
	            'name'     => 'csv',
	            'required' => true,
	            'validators' => array(
		                new \Zend\Validator\File\Size('8MB'),
		                new \Zend\Validator\File\Extension('csv'),
		                //new \Zend\Validator\File\MimeType(array('application/vnd.ms-excel','enableHeaderCheck'=>true)),
	            ),
        ));
    }
    
}
