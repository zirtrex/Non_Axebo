<?php
namespace Admin\Form;
 
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\AreaConocimiento;


class AreaConocimientoForm extends Form
{
    public function __construct()
    {
        parent::__construct('AreaConocimientoForm');
        
        $this->setHydrator(new ClassMethodsHydrator(false))
        ->setObject(new AreaConocimiento());
 
        $this->setAttributes(array('method' => 'post',));
        
        $this->add(
        		array(
        				'name' => 'codAreaConocimiento',
        				'type' => 'hidden'
        		)
        );
 
        $this->add(
        		array(
        				'name' => 'areaConocimiento',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'areaConocimiento',
        						'placeholder' => 'Ingrese Area del Conocimiento',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Area del Conocimiento',
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