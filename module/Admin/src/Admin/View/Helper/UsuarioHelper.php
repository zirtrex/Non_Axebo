<?php

namespace Admin\View\Helper;


use Zend\View\Helper\AbstractHelper;

class UsuarioHelper extends AbstractHelper
{
	protected $sm;
	protected $codUsuario;
	protected $rol;
	
	public function __construct($sm)
	{
		if (!$this->sm)
		{
			$this->sm = $sm;
		}
		return $this->sm;
	}
	
	public function __invoke($codUsuario, $rol)
	{		
		
		$this->codUsuario = $codUsuario;
		$this->rol = $rol;
		
		return $this->getDatosUsuario();
	}
	
	private function getDatosUsuario()
	{
		if($this->rol == "docente")
		{
			$docenteTable = $this->sm->getServiceLocator()->get('DocenteTable');
			return $dataDocente = $docenteTable->obtenerDocentePorCodUsuario($this->codUsuario);
		}
		else if ($this->rol == "administrador")
		{
			$administradorTable = $this->sm->getServiceLocator()->get('AdministradorTable');
			return $dataDocente = $administradorTable->obtenerAdministradorPorCodUsuario($this->codUsuario);
		}
		return false;
		
	}
}
