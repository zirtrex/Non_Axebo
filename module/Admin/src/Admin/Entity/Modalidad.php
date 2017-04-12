<?php

namespace Admin\Entity;

class Modalidad {	

	protected $codModalidad;
	
	protected $modalidad;

	public function getcodModalidad() {
		return $this->codModalidad;
	}

	public function setcodModalidad($codModalidad) {
		$this->codModalidad = $codModalidad;
	}

	public function getModalidad() {
		return $this->modalidad;
	}

	public function setModalidad($modalidad) {
		$this->modalidad = $modalidad;
	}

	
	public function exchangeArray(Array $data)
	{
		$this->codModalidad = (isset($data['codModalidad'])) ? $data['codModalidad'] : null;
	
		$this->modalidad = (isset($data['modalidad'])) ? $data['modalidad'] : null;
		 
	}
	
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}	
		
}
