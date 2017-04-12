<?php
namespace Admin\Form;
 
use Zend\Form\Form;


class CargaAcademicaForm extends Form
{
    public function __construct()
    {
        parent::__construct('CargaAcademicaForm');
 
        $this->setAttributes(array('method' => 'post'));   
        
        $this->add(
        		array(
        				'name' => 'codCargaAcademica',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'codCargaAcademica',
        						'readonly' => 'readonly',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Código Carga Académica',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
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
        						'readonly' => 'readonly',
        						'required' => 'required',
        						'class' => 'form-control',
        				),
        				'options' => array(
        						'label' => 'Código del curso',
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
        						'readonly' => 'readonly',
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
        				'name' => 'fechaInicioClases',
        				'type' => 'Zend\Form\Element\Text',
        				'attributes' => array(
        						'id' => 'fechaInicioClases',
        						'placeholder' => 'Ingrese fecha de inicio de clases',
        						'class' => 'form-control datepicker',
        				),
        				'options' => array(
        						'label' => 'Fecha de inicio de clases',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'esComun',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Común',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        						'value_options' => array(
        								'Si' => 'Si',
        								'No' => 'No'
        						),
        				),
        				'attributes' => array(
        						'id' => 'esComun',
        						'class' => 'form-control',
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'codAreaConocimiento',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Elige el Area del Conocimiento',
        						'empty_option' => 'Elegir solo si No es común',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        						'disable_inarray_validator' => true,
        				),
        				'attributes' => array(
        						'id' => 'codAreaConocimiento',
        						'class' => 'form-control',
        				),
        		)
        );

        $this->add(
        		array(
		        		'name' => 'codCarreraProfesional',
		        		"type"     => 'Zend\Form\Element\Select',
		        		"options"  => array(
		        				'label' => 'Elige la Carrera Profesional',
		        				'empty_option' => 'Elegir solo si este curso es específico para un Area del Conocimiento',
		        				'label_attributes' => array(
		        						'class' => 'col-sm-2 control-label'
		        				),
		        				'disable_inarray_validator' => true,
		        		),
		        		'attributes' => array(
		        				'id' => 'codCarreraProfesional',
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
		        		),
		        		'attributes' => array(
		        				'class' => 'form-control',
		        		),
        		)
        );

        $this->add(
        		array(
        				'name' => 'codModalidad',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Elige una modalidad',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        				'attributes' => array(
        						'class' => 'form-control',
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'codAula',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Elige un aula',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        				'attributes' => array(
        						'class' => 'form-control',
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'codSeccion',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Elige una Sección',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        				'attributes' => array(
        						'class' => 'form-control',
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'codDocente',
        				"type"     => 'Zend\Form\Element\Select',
        				"options"  => array(
        						'label' => 'Elige un Docente',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        				),
        				'attributes' => array(
        						'class' => 'form-control',
        				),
        		)
        );
        
        $this->add(
        		array(
        				'name' => 'paralelo',
        				"type"     => 'Zend\Form\Element\Text',
        				"options"  => array(
        						'label' => 'Paralelo',
        						'label_attributes' => array(
        								'class' => 'col-sm-2 control-label'
        						),
        						'value_options' => array(
        								'A' => 'A',
        								'B' => 'B',
        								'C' => 'C',
        								'D' => 'D',
        								'E' => 'E',
        								'F' => 'F',
        								'G' => 'G',
        								'H' => 'H',
        						),
        				),
        				'attributes' => array(
        						'id' => 'paralelo',
        						'class' => 'form-control',
        						'placeholder' => 'Ingrese paralelo',
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