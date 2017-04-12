<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class AdministradorFilter extends InputFilter
{    
    public function __construct()
    {
        
    	$this->add(
    			array(
    					'name' => 'codAdministrador',
    					'required' => false,
    			)
    	);

    }
}