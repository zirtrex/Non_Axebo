<?php
namespace Admin\Form;
 
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\Administrador;


class AdministradorForm extends Form
{
    public function init()
    {
        parent::__construct('AdministradorForm');
        
        $this->setHydrator(new ClassMethodsHydrator(false))
        	->setObject(new Administrador());
 
        $this->setAttributes(array('method' => 'post'));
        
        $this->add(
        		array(
        				'name' => 'codAdministrador',
        				'type' => 'hidden',
        				'attributes' => array(
        						'id' => 'codAdministrador'
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