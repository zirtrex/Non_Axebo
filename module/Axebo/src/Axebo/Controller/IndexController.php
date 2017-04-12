<?php

namespace Axebo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Model\Miscellanea;
use Zend\ServiceManager\ServiceLocatorAwareInterface;

class IndexController extends AbstractActionController implements ServiceLocatorAwareInterface
{
	//Muestra los cursos que tiene asignado un docente, es procesado cuando se inicia sesión
	public function indexAction()
	{		

        return new ViewModel(array());

	}
	
	//obtengo los datos del docente actual
	private function getDatosDocente()
	{		
		if($this->identity())
		{
			$docenteTable = $this->getServiceLocator()->get('DocenteTable');		
			return $dataDocente = $docenteTable->obtenerDocentePorCodUsuario($this->identity()['codUsuario']);
		}
		
		return;
	}
}






