<?php

namespace Admin\Entity;

class PlanEstudio {	

	protected $codPlanEstudio;
	
	protected $titulo;
	
	protected $anioPlanEstudio;
	
	protected $numeroCiclos;
	
	protected $numeroCursosObligatorios;
	
	protected $numeroCursosLectivos;

	protected $codCarreraProfesional;
	
	protected $estado;


	public function getCodPlanEstudio() {
		return $this->codPlanEstudio;
	}

	public function setCodPlanEstudio($codPlanEstudio) {
		$this->codPlanEstudio = $codPlanEstudio;
	}

	public function getTitulo() {
		return $this->titulo;
	}

	public function setTitulo($titulo) {
		$this->titulo = $titulo;
	}

	public function getAnioPlanEstudio() {
		return $this->anioPlanEstudio;
	}

	public function setAnioPlanEstudio($anioPlanEstudio) {
		$this->anioPlanEstudio = $anioPlanEstudio;
	}

	public function getNumeroCiclos() {
		return $this->numeroCiclos;
	}

	public function setNumeroCiclos($numeroCiclos) {
		$this->numeroCiclos = $numeroCiclos;
	}

	public function getNumeroCursosObligatorios() {
		return $this->numeroCursosObligatorios;
	}

	public function setNumeroCursosObligatorios($numeroCursosObligatorios) {
		$this->numeroCursosObligatorios = $numeroCursosObligatorios;
	}

	public function getNumeroCursosLectivos() {
		return $this->numeroCursosLectivos;
	}

	public function setNumeroCursosLectivos($numeroCursosLectivos) {
		$this->numeroCursosLectivos = $numeroCursosLectivos;
	}

	public function getCodCarreraProfesional() {
		return $this->codCarreraProfesional;
	}

	public function setCodCarreraProfesional($codCarreraProfesional) {
		$this->codCarreraProfesional = $codCarreraProfesional;
	}	

	public function getEstado() {
		return $this->estado;
	}
	
	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function exchangeArray(Array $data)
	{
		$this->codPlanEstudio = (isset($data['codPlanEstudio'])) ? $data['codPlanEstudio'] : null;
	
		$this->titulo = (isset($data['titulo'])) ? $data['titulo'] : null;
	
		$this->anioPlanEstudio = (isset($data['anioPlanEstudio'])) ? $data['anioPlanEstudio'] : null;
	
		$this->numeroCiclos = (isset($data["numeroCiclos"])) ? $data["numeroCiclos"] : null;
		 
		$this->numeroCursosObligatorios = (isset($data['numeroCursosObligatorios'])) ? $data['numeroCursosObligatorios'] : null;
		
		$this->numeroCursosLectivos = (isset($data['numeroCursosLectivos'])) ? $data['numeroCursosLectivos'] : null;
		
		$this->codCarreraProfesional = (isset($data['codCarreraProfesional'])) ? $data['codCarreraProfesional'] : null;
		
		$this->estado = (isset($data['estado'])) ? $data['estado'] : null;
		 
	}
	
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}	
		
}
