<?php
namespace Admin\Form;
 
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\Estudiante;
//use Zend\Captcha;
//use Zend\Form\Element; 


class EstudianteForm extends Form
{
    public function init()
    {
        parent::__construct('EstudianteForm');
        
        $this->setHydrator(new ClassMethodsHydrator(false))
        	->setObject(new Estudiante());
 
        $this->setAttributes(array('method' => 'post'));
        
        $this->add(
        		array(
        				'name' => 'codEstudiante',
        				'type' => 'hidden',
        				'attributes' => array(
        						'id' => 'codEstudiante'
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
		        				'empty_option' => '----Seleccione una Carrera----',
		        		),
		        		'attributes' => array(
		        				'class' => 'form-control',
		        		),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'anioIngreso',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'anioIngreso',
        						'placeholder' => 'Ingrese año de ingreso',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Año de Ingreso',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
 
        $this->add(
        		array(
        				'type' => 'PersonaFieldset',
        				'options' => array(
        						//'use_as_base_fieldset' => true
        				)
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