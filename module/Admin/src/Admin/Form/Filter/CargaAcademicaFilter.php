<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;

class CargaAcademicaFilter extends InputFilter
{    
    public function __construct()
    {   
        
		$this->add(
				array(
						'name' => 'fechaInicioClases',
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
												'min' => 9,
												'max' => 10,
										),
								),
						),
				)
		);
	        
		$this->add(
				array(
						'name' => 'paralelo',
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
												'max' => 10,
										),
								),
						),
				)
		);
		
		$this->add(
				array(
						'name' => 'esComun',
						'required' => true
				)
		);
		
		$this->add(
				array(
						'name' => 'codAreaConocimiento',
						'required' => false
				)
		);
		
		$this->add(
				array(
						'name' => 'codCarreraProfesional',
						'required' => false
				)
		);
		
		$this->add(
				array(
						'name' => 'codCicloAcademico',
						'required' => true
				)
		);
		
		$this->add(
				array(
						'name' => 'codModalidad',
						'required' => true
				)
		);
		
		$this->add(
				array(
						'name' => 'codAula',
						'required' => true
				)
		);
		
		$this->add(
				array(
						'name' => 'codSeccion',
						'required' => true
				)
		);
		
		$this->add(
				array(
						'name' => 'codDocente',
						'required' => true
				)
		);
        
    }
    
}