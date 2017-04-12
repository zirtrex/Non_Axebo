<?php

namespace Admin\Entity;

class CarreraProfesional
{	

	protected $codCarreraProfesional;
	
	protected $codigo;
	
	protected $carreraProfesional;
	
	protected $codAreaConocimiento;
	
	protected $estado;
		

	public function getCodCarreraProfesional() {
		return $this->codCarreraProfesional;
	}

	public function setCodCarreraProfesional($codCarreraProfesional) {
		$this->codCarreraProfesional = $codCarreraProfesional;
	}

	public function getCarreraProfesional() {
		return $this->carreraProfesional;
	}

	public function setCarreraProfesional($carreraProfesional) {
		$this->carreraProfesional = $carreraProfesional;
	}

	public function getCodigo() {
		return $this->codigo;
	}

	public function setCodigo($codigo) {
		$this->codigo = $codigo;
	}

	public function getCodAreaConocimiento() {
		return $this->codAreaConocimiento;
	}

	public function setCodAreaConocimiento($codAreaConocimiento) {
		$this->codAreaConocimiento = $codAreaConocimiento;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function exchangeArray(Array $data)
	{
		$this->codCarreraProfesional = (isset($data['codCarreraProfesional'])) ? $data['codCarreraProfesional'] : null;		
	
		$this->codigo = (isset($data['codigo'])) ? $data['codigo'] : null;
		
		$this->carreraProfesional = (isset($data['carreraProfesional'])) ? $data['carreraProfesional'] : null;
		
		$this->codAreaConocimiento = (isset($data['codAreaConocimiento'])) ? $data['codAreaConocimiento'] : null;
	
		$this->estado = (isset($data['estado'])) ? $data['estado'] : null;		 
	}
	
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}	
		
}
