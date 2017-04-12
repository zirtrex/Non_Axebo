<?php
namespace Admin\Form;
 
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\Docente;


class DocenteForm extends Form
{
    public function init()
    {
        parent::__construct('DocenteForm');
        
        $this->setHydrator(new ClassMethodsHydrator(false))
        	->setObject(new Docente());
 
        $this->setAttributes(array('method' => 'post'));
        
        $this->add(
        		array(
        				'name' => 'codDocente',
        				'type' => 'hidden',
        				'attributes' => array(
        						'id' => 'codDocente'
        				),
        		)
        );     

        $this->add(array(
        		'type' => 'Zend\Form\Element\Radio',
        		'name' => 'modalidad',
        		'attributes' => array(
        				'id' => 'modalidad',
        				'required' => 'required',
        		),
        		'options' => array(
        				'label' => 'Modalidad',
        				'label_attributes' => array(
        						'class' => 'col-sm-2 control-label'
        				),
        				'value_options' => array(
        						'TC' => 'Tiempo Completo',
        						'MC' => 'Medio Completo',
        				),
        		),
        ));
        
        $this->add(
        		array(
        				'name' => 'gradoAcademico',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'gradoAcademico',
        						'placeholder' => 'Ingrese grado académico',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Grado Académico',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'profesion',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'profesion',
        						'placeholder' => 'Ingrese profesión',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Profesión',
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