<?php
namespace Admin\Form;
 
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\PlanEstudio;


class PlanEstudioForm extends Form
{
    public function __construct()
    {
        parent::__construct('PlanEstudioForm');
        
        $this->setHydrator(new ClassMethodsHydrator(false))
        	->setObject(new PlanEstudio());
 
        $this->setAttributes(array('method' => 'post'));
        
        $this->add(
        		array(
        				'name' => 'codPlanEstudio',
        				'type' => 'hidden',
        				'attributes' => array(
        						'id' => 'codPlanEstudio'
        				),
        		)
        );

        $this->add(
        		array(
        				'name' => 'titulo',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'titulo',
        						'placeholder' => 'Ingrese título',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Título',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'anioPlanEstudio',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'anioPlanEstudio',
        						'placeholder' => 'Ingrese año del plan de estudio',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Año',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'numeroCiclos',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Número de Ciclos',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        						'value_options' => array(
        								'1' => '1',
        								'2' => '2',
        								'3' => '3',
        								'4' => '4',
        								'5' => '5',
        								'6' => '6',
        								'7' => '7',
        								'8' => '8',
        								'9' => '9',
        								'10' => '10',
        						),
        				),
        				'attributes' => array(
        						'class' => 'form-control',
        				),
        		)
        );        
        
        $this->add(
        		array(
		        		'name' => 'codCarreraProfesional',
		        		"type"     => 'Zend\Form\Element\Select',
		        		"options"  => array(
		        				'label' => 'Elige la Carrera Profesional',
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