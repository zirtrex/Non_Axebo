<?php
namespace Admin\Form\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Admin\Entity\Persona;


class PersonaFieldset extends Fieldset implements InputFilterProviderInterface
{
	protected $dbAdapter;
	
    public function __construct($dbAdapter)
    {
        
        parent::__construct('Persona');
        
        $this->dbAdapter = $dbAdapter;
        
        $this->setHydrator(new ClassMethodsHydrator(false))
             ->setObject(new Persona());
        
        $this->add(
        		array(
        				'name' => 'codPersona',
        				'type' => 'hidden',
        				'attributes' => array(
        						'id' => 'codPersona'
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'nombres',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'nombres',
        						'placeholder' => 'Ingrese nombre(s)',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Nombre(s)',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'primerApellido',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'primerApellido',
        						'placeholder' => 'Ingrese primer apellido',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Primer Apellido',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'segundoApellido',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'segundoApellido',
        						'placeholder' => 'Ingrese segundo apellido',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Segundo Apellido',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(array(
        		'type' => 'Zend\Form\Element\Radio',
        		'name' => 'tipoDocumento',
        		'attributes' => array(
        				'id' => 'tipoDocumento',
        				'required' => 'required',
        		),
        		'options' => array(
        				'label' => 'Tipo de Documento',
        				'label_attributes' => array(
        						'class' => 'col-sm-2 control-label'
        				),
        				'value_options' => array(
        						'C' => 'Cédula',
        						'P' => 'Pasaporte',
        				),
        		),
        ));
        
        $this->add(
        		array(
        				'name' => 'numeroDocumento',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'numeroDocumento',
        						'placeholder' => 'Ingrese número de documento',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Número de documento',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'fechaNacimiento',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'fechaNacimiento',
        						'placeholder' => 'Ingrese fecha de nacimiento',
        						'class' => 'form-control datepicker',
        				),
        				'options' => array(
        						'label' => 'Fecha de Nacimiento',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'correo',
        				'type' => 'Zend\Form\Element\Email',
        				'attributes' => array(
        						'id' => 'correo',
        						'placeholder' => 'Ingrese correo',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Correo',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'celular',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'celular',
        						'placeholder' => 'Ingrese celular',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Celular',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );

        
      
    }
    
    public function getInputFilterSpecification()
    {
    	
    	return array(    			
    			
				'codPersona' => array(
    					'required' => false,
    			),
    			
    			'nombres' => array(
    					'required' => true,
    					'filters' => array(
    							array('name' => 'StripTags'),
    							array('name' => 'StringTrim'),
    					),
    					'validators' => array(
    							array(
    									'name' => 'StringLength',
    									'options' => array(
    											'encoding' => 'UTF-8',
    											'min' => 2,
    											'max' => 45,
    									),
    							),
    					),
    			),

    			'primerApellido' => array(
    					'required' => true,
    					'filters' => array(
    							array('name' => 'StripTags'),
    							array('name' => 'StringTrim'),
    					),
    					'validators' => array(
    							array(
    									'name' => 'StringLength',
    									'options' => array(
    											'encoding' => 'UTF-8',
    											'min' => 1,
    											'max' => 45,
    									),
    							),
    					),
    			),
    			
    			'segundoApellido' => array(
    					'required' => false,
    					'filters' => array(
    							array('name' => 'StripTags'),
    							array('name' => 'StringTrim'),
    					),
    					'validators' => array(
    							array(
    									'name' => 'StringLength',
    									'options' => array(
    											'encoding' => 'UTF-8',
    											'min' => 1,
    											'max' => 45,
    									),
    							),
    					),
    			),
    			
    			'tipoDocumento' => array(
    					'required' => true,
    			),
    			
    			'numeroDocumento' => array(
    					'required' => true,
    					'filters' => array(
    							array('name' => 'StripTags'),
    							array('name' => 'StringTrim'),
    					),
    					'validators' => array(
    							array(
    									'name' => 'StringLength',
    									'options' => array(
    											'encoding' => 'UTF-8',
    											'min' => 6,
    											'max' => 12,
    									),
    							),
    					),
    			),
    			
    			'fechaNacimiento' => array(
    					'required' => false,
    					'filters' => array(
    							array('name' => 'StripTags'),
    							array('name' => 'StringTrim'),
    					),
    					'validators' => array(
    							array(
    									'name' => 'StringLength',
    									'options' => array(
    											'encoding' => 'UTF-8',
    											'min' => 1,
    											'max' => 50,
    									),
    							),
    					),
    			),
    			
    			'correo' => array(
    					'required' => true,
    					'validators' => array(
    							array(
    									'name' => 'StringLength',
    									'options' => array(
    											'encoding' => 'UTF-8',
    											'min' => 1,
    											'max' => 200,
    									),
    							),
    							array(
    									'name' => 'EmailAddress',
    									'options' => array(
    											'domain' => true,
    									),
    							),
    							/*array(
    							 'name' => 'Zend\Validator\Db\NoRecordExists',
    									'options' => array(
    											'table' => 'persona',
    											'field' => 'correo',
    											'adapter' => $this->dbAdapter,
    											'messages' => array(
    													\Zend\Validator\Db\NoRecordExists::ERROR_RECORD_FOUND => 'El correo ya existe',
    											),
    									),
    							),*/
    					),
    					
    			),
    			
    			'celular' => array(
    					'required' => false,
    					'filters' => array(
    							array('name' => 'StripTags'),
    							array('name' => 'StringTrim'),
    					),
    					'validators' => array(
    							array(
    									'name' => 'StringLength',
    									'options' => array(
    											'encoding' => 'UTF-8',
    											'min' => 8,
    											'max' => 11,
    									),
    							),
    					),
    			)
    	);

    }
    
}
