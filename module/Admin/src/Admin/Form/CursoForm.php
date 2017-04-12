<?php
namespace Admin\Form;
 
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\Curso;


class CursoForm extends Form
{
    public function __construct()
    {
        parent::__construct('CursoForm');
        
        $this->setHydrator(new ClassMethodsHydrator(false))
        	->setObject(new Curso());
 
        $this->setAttributes(array('method' => 'post'));
        
        $this->add(
        		array(
        				'name' => 'codCurso',
        				'type' => 'hidden',
        				'attributes' => array(
        						'id' => 'codCurso'
        				),
        		)
        );

        $this->add(
        		array(
        				'name' => 'codigo',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'codigo',
        						'placeholder' => 'Ingrese código',
        						'required' => 'required',
        						'class' => 'form-control',
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
        				'name' => 'curso',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'curso',
        						'placeholder' => 'Ingrese nombre del curso',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Curso',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );        
        
        $this->add(
        		array(
        				'name' => 'nivel',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'nivel',
        						'placeholder' => 'Ingrese nivel',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Nivel',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'abreviatura',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'abreviatura',
        						'placeholder' => 'Ingrese abreviatura',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Abreviatura',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'creditos',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'creditos',
        						'placeholder' => 'Ingrese número de créditos',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Créditos',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
		        		'name' => 'codPlanEstudio',
		        		"type"     => 'Zend\Form\Element\Select',
		        		"options"  => array(
		        				'label' => 'Elige la plan de estudios',
		        				'label_attributes' => array(
		        						'class' => 'col-sm-2 control-label'
		        				),
		        				'empty_option' => '----Seleccione un plan de estudios----',
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