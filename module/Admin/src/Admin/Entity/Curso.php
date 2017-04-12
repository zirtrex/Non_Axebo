<?php

namespace Admin\Entity;

class Curso
{	

	protected $codCurso;
	
	protected $codigo;
	
	protected $curso;	
	
	protected $nivel;
	
	protected $abreviatura;
		
	protected $creditos;
	
	protected $codPlanEstudio;
	
	protected $estado;
		

	public function getCodCurso() {
		return $this->codCurso;
	}

	public function setCodCurso($codCurso) {
		$this->codCurso = $codCurso;
	}

	public function getCodigo() {
		return $this->codigo;
	}

	public function setCodigo($codigo) {
		$this->codigo = $codigo;
	}

	public function getCurso() {
		return $this->curso;
	}

	public function setCurso($curso) {
		$this->curso = $curso;
	}

	public function getNivel() {
		return $this->nivel;
	}

	public function setNivel($nivel) {
		$this->nivel = $nivel;
	}

	public function getAbreviatura() {
		return $this->abreviatura;
	}

	public function setAbreviatura($abreviatura) {
		$this->abreviatura = $abreviatura;
	}

	public function getCreditos() {
		return $this->creditos;
	}

	public function setCreditos($creditos) {
		$this->creditos = $creditos;
	}

	public function getCodPlanEstudio() {
		return $this->codPlanEstudio;
	}
	
	public function setCodPlanEstudio($codPlanEstudio) {
		$this->codPlanEstudio = $codPlanEstudio;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function exchangeArray(Array $data)
	{
		$this->codCurso = (isset($data['codCurso'])) ? $data['codCurso'] : null;
	
		$this->codigo = (isset($data['codigo'])) ? $data['codigo'] : null;
	
		$this->curso = (isset($data['curso'])) ? $data['curso'] : null;
	
		$this->nivel = (isset($data['nivel'])) ? $data['nivel'] : null;
		 
		$this->abreviatura = (isset($data['abreviatura'])) ? $data['abreviatura'] : null;
		
		$this->creditos = (isset($data['creditos'])) ? $data['creditos'] : null;
		
		$this->codPlanEstudio = (isset($data['codPlanEstudio'])) ? $data['codPlanEstudio'] : null;
		
		$this->estado = (isset($data['estado'])) ? $data['estado'] : null;
		 
	}
	
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}	
		
}
