<?php
namespace Admin\Form;
 
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\CarreraProfesional;


class CarreraProfesionalForm extends Form
{
    public function __construct()
    {
        parent::__construct('CarreraProfesionalForm');
        
        $this->setHydrator(new ClassMethodsHydrator(false))
        ->setObject(new CarreraProfesional());
 
        $this->setAttributes(array('method' => 'post',));
        
        $this->add(
        		array(
        				'name' => 'codCarreraProfesional',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'class' 	=> 'form-control',
        						'readonly' 	=> 'readonly'
        				),
        				'options' => array(
        						'label' => 'Código',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
 
        $this->add(
        		array(
        				'name' => 'codigo',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'codigo',
        						'placeholder' => 'Ingrese identificador',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Ingrese identificador',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
 
        $this->add(
        		array(
        				'name' => 'carreraProfesional',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'carreraProfesional',
        						'placeholder' => 'Ingrese carrera profesional',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Carrera Profesional',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'codAreaConocimiento',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Elige el Area del Conocimiento',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
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