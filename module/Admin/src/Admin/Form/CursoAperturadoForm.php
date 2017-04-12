<?php
namespace Admin\Form;
 
use Zend\Form\Form;


class CursoAperturadoForm extends Form
{
    public function __construct()
    {
        parent::__construct('CursoAperturadoForm');
 
        $this->setAttributes(array('method' => 'post'));
        
        $this->add(
        		array(
        				'name' => 'codCursoAperturado',
        				'type' => 'hidden',
        				'attributes' => array(
        						'id' => 'codCursoAperturado'
        				),
        		)
        );
        
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
        						'disabled' => 'disabled',
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
        						'disabled' => 'disabled',
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
		        		'name' => 'codCicloAcademico',
		        		"type"     => 'Zend\Form\Element\Select',
		        		"options"  => array(
		        				'label' => 'Elige el Ciclo Académico',
		        				'label_attributes' => array(
		        						'class' => 'col-sm-2 control-label'
		        				),
		        				'empty_option' => '----Seleccione Ciclo Académico----',
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