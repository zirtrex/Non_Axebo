<?php

namespace Admin\Entity;

class AreaConocimiento
{	

	protected $codAreaConocimiento;
	
	protected $areaConocimiento;
	
	protected $estado;

	public function getCodAreaConocimiento() {
		return $this->codAreaConocimiento;
	}

	public function setCodAreaConocimiento($codAreaConocimiento) {
		$this->codAreaConocimiento = $codAreaConocimiento;
	}

	public function getAreaConocimiento() {
		return $this->areaConocimiento;
	}

	public function setAreaConocimiento($areaConocimiento) {
		$this->areaConocimiento = $areaConocimiento;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function exchangeArray(Array $data)
	{
		$this->codAreaConocimiento = (isset($data['codAreaConocimiento'])) ? $data['codAreaConocimiento'] : null;
	
		$this->areaConocimiento = (isset($data['areaConocimiento'])) ? $data['areaConocimiento'] : null;
	
		$this->estado = (isset($data['estado'])) ? $data['estado'] : null;		 
	}
	
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}	
		
}
