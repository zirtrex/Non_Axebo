<?php
namespace Admin\Form;
 
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\Usuario;


class UsuarioForm extends Form
{
    public function __construct()
    {
        parent::__construct('UsuarioForm');
        
        $this->setHydrator(new ClassMethodsHydrator(false))
        	->setObject(new Usuario());
 
        $this->setAttributes(array('method' => 'post'));
        
        $this->add(
                array(
                        'name' => 'codUsuario',
                        'type' => 'hidden',
                        'attributes' => array(
                                'id' => 'codUsuario'
                        ),
                )
        );
        
        $this->add(
        		array(
        				'name' => 'codDocente',
        				'type' => 'hidden',
        				'attributes' => array(
        						'id' => 'codDocente'
        				),
        		)
        );
      
        $this->add(
                array(
                        'name' => 'usuario',
                        'type' => 'Zend\Form\Element\Text',
                        'attributes' => array(
                                'id' => 'usuario',
                                'placeholder' => 'Ingrese el usuario',
                                'required' => 'required',
                                'class' => 'form-control',
                        ),
                        'options' => array(
                                'label' => 'Usuario',
                                'label_attributes' => array(
                                        'class' => 'col-sm-2 control-label'
                                ),
                        ),
                )
        );

        $this->add(
                array(
                        'name' => 'clave',
                        'type' => 'Zend\Form\Element\Password',
                        'attributes' => array(
                                'id' => 'clave',
                                'placeholder' => 'Ingrese la clave',
                                'required' => 'required',
                                'class' => 'form-control',
                        ),
                        'options' => array(
                                'label' => 'Clave',
                                'label_attributes' => array(
                                        'class' => 'col-sm-2 control-label'
                                ),
                        ),
                )
        );
        
        $this->add(
                array(
                        'name' => 'rol',
                        'type' => 'hidden',
                        'attributes' => array(
                                'id' => 'rol'
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