<?php
namespace Admin\Form;
 
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\CicloAcademico;


class CicloAcademicoForm extends Form
{
    public function __construct()
    {
        parent::__construct('CicloAcademicoForm');
        
        $this->setHydrator(new ClassMethodsHydrator(false))
        	->setObject(new CicloAcademico());
 
        $this->setAttributes(array('method' => 'post',));
        
        $this->add(
        		array(
        				'name' => 'codCicloAcademico',
        				'type' => 'hidden',
        				'attributes' => array(
        						'id' => 'codCarreraProfesional'
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'anio',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Año',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        						'value_options' => array(
        								'2010' => '2000',
        								'2011' => '2001',
        								'2012' => '2012',
        								'2013' => '2013',
        								'2014' => '2014',
        								'2015' => '2015',
        								'2016' => '2016',
        								'2017' => '2017',
        								'2018' => '2018',
        								'2019' => '2019',
        						),
        				),
        				'attributes' => array(
        						'class' => 'form-control',
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'semestre',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Semestre',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        						'value_options' => array(
        								'I' => 'I',
        								'II' => 'II',        								
        						),
        				),
        				'attributes' => array(
        						'class' => 'form-control',
        				),
        		)
        );    
 
        $this->add(
        		array(
        				'name' => 'guardar',
        				'type' => 'Zend\Form\Element\Submit',
        				'attributes' => array(
        						'value' => 'Guardar',
        						'class' => 'btn btn-success',
        				),
        		)
        );
    }
}