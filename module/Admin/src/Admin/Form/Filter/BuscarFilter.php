<?php
namespace Admin\Form\Filter;

use Zend\InputFilter\InputFilter;


class BuscarFilter extends InputFilter
{
	function __construct()
	{
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
	}	
}
