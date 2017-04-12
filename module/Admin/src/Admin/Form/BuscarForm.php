<?php
namespace Admin\Form;
 
use Zend\Form\Form;


class BuscarForm extends Form
{
    public function __construct()
    {
        parent::__construct('BuscarForm'); 
        $this->setAttributes(array('method' => 'post'));
 
        $this->add(array(
        		'name' => 'texto',
        		'type' => 'Zend\Form\Element\Text',
        		'attributes' => array(
        				'id' => 'texto',
        				'placeholder' => 'Ingrese una palabra para empezar a buscar',
        				'class' => 'form-control',
        		),
        		'options' => array(
        				'label' => 'Buscar',
        				'label_attributes' => array(
        						'class' => 'col-sm-2 control-label'
        				),
        		),
        ));
 
        $this->add(
        		array(
        				'name' => 'buscar',
        				'type' => 'Zend\Form\Element\Submit',
        				'attributes' => array(
        						'value' => 'Buscar',
        						'class' => 'btn btn-default',
        				),
        		)
        );
    }
}