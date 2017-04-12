<?php
namespace Admin\Form;
 
use Zend\Form\Form;

class SilaboForm extends Form
{
    public function __construct()
    {
        parent::__construct('SilaboForm');
 
        $this->setAttributes(array('method' => 'post'));

        $this->add(
        		array(
        				'name' => 'codSemana',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Elige semana',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        				'attributes' => array(
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        		)
        );
 
        $this->add(
        		array(
        				'name' => 'tematica',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'tematica',
        						'placeholder' => 'Ingrese temática',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Temática',
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