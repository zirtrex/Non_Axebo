<?php

namespace Admin\Entity;

class Aula {	

	protected $codAula;
	
	protected $piso;
	
	protected $numero;
	
	protected $capacidad;
	
	protected $estado;
		
	
	public function getCodAula() {
		return $this->codAula;
	}

	public function setCodAula($codAula) {
		$this->codAula = $codAula;
	}

	public function getPiso() {
		return $this->piso;
	}

	public function setPiso($piso) {
		$this->piso = $piso;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}


	public function getCapacidad() {
		return $this->capacidad;
	}

	public function setCapacidad($capacidad) {
		$this->capacidad = $capacidad;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function exchangeArray(Array $data)
	{
		$this->codAula = (isset($data['codAula'])) ? $data['codAula'] : null;
	
		$this->piso = (isset($data['piso'])) ? $data['piso'] : null;
	
		$this->numero = (isset($data['numero'])) ? $data['numero'] : null;
		 
		$this->capacidad = (isset($data['capacidad'])) ? $data['capacidad'] : null;
		
		$this->estado = (isset($data['estado'])) ? $data['estado'] : null;
		 
	}
	
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}	
		
}
