<?php

namespace Admin\Entity;

class CicloAcademico
{	

	protected $codCicloAcademico;
	
	protected $anio;
	
	protected $semestre;
	
	protected $estado;

	public function getCodCicloAcademico() {
		return $this->codCicloAcademico;
	}

	public function setCodCicloAcademico($codCicloAcademico) {
		$this->codCicloAcademico = $codCicloAcademico;
	}

	public function getAnio() {
		return $this->anio;
	}

	public function setAnio($anio) {
		$this->anio = $anio;
	}

	public function getSemestre() {
		return $this->semestre;
	}

	public function setSemestre($semestre) {
		$this->semestre = $semestre;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function exchangeArray(Array $data)
	{
		$this->codCicloAcademico = (isset($data['codCicloAcademico'])) ? $data['codCicloAcademico'] : null;
	
		$this->anio = (isset($data['anio'])) ? $data['anio'] : null;
	
		$this->semestre = (isset($data['semestre'])) ? $data['semestre'] : null;
		
		$this->estado = (isset($data['estado'])) ? $data['estado'] : null;
		 
	}
	
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}	
		
}
