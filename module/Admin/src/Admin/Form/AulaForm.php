<?php
namespace Admin\Form;
 
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\Aula;


class AulaForm extends Form
{
    public function __construct()
    {
        parent::__construct('AulaForm');
        
        $this->setHydrator(new ClassMethodsHydrator(false))
        	->setObject(new Aula());
 
        $this->setAttributes(array('method' => 'post'));
        
        $this->add(
        		array(
        				'name' => 'codAula',
        				'type' => 'hidden',
        				'attributes' => array(
        						'id' => 'codAula'
        				),
        		)
        );

        $this->add(
                array(
                        'name' => 'numero',
                        'type' => 'Zend\Form\Element\Text',
                        'attributes' => array(
                                'id' => 'numero',
                                'placeholder' => 'Ingrese el número de sala',
                                'required' => 'required',
                                'class' => 'form-control',
                        ),
                        'options' => array(
                                'label' => 'Número',
                                'label_attributes' => array(
                                        'class' => 'col-sm-2 control-label'
                                ),
                        ),
                )
        );

        $this->add(
                array(
                        'name' => 'piso',
                        'type' => 'Zend\Form\Element\Text',
                        'attributes' => array(
                                'id' => 'piso',
                                'placeholder' => 'Ingrese el piso',
                                'required' => 'required',
                                'class' => 'form-control',
                        ),
                        'options' => array(
                                'label' => 'Piso',
                                'label_attributes' => array(
                                        'class' => 'col-sm-2 control-label'
                                ),
                        ),
                )
        );

        $this->add(
                array(
                        'name' => 'capacidad',
                        'type' => 'Zend\Form\Element\Text',
                        'attributes' => array(
                                'id' => 'capacidad',
                                'placeholder' => 'Ingrese la capacidad',
                                'required' => 'required',
                                'class' => 'form-control',
                        ),
                        'options' => array(
                                'label' => 'Capacidad',
                                'label_attributes' => array(
                                        'class' => 'col-sm-2 control-label'
                                ),
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