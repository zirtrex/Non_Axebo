<?php

namespace Admin\Entity;

class Persona {	

	protected $codPersona;
	
	protected $nombres;
	
	protected $primerApellido;
	
	protected $segundoApellido;
	
	protected $tipoDocumento;
	
	protected $numeroDocumento;
	
	protected $fechaNacimiento;
	
	protected $correo;
	
	protected $celular;

	protected $imagen;
	
	
	public function getCodPersona() {
		return $this->codPersona;
	}

	public function setCodPersona($codPersona) {
		$this->codPersona = $codPersona;
	}

	public function getNombres() {
		return $this->nombres;
	}

	public function setNombres($nombres) {
		$this->nombres = $nombres;
	}

	public function getPrimerApellido() {
		return $this->primerApellido;
	}

	public function setPrimerApellido($primerApellido) {
		$this->primerApellido = $primerApellido;
	}
	
	public function getSegundoApellido() {
		return $this->segundoApellido;
	}
	
	public function setSegundoApellido($segundoApellido) {
		$this->segundoApellido = $segundoApellido;
	}

	public function getTipoDocumento() {
		return $this->tipoDocumento;
	}

	public function setTipoDocumento($tipoDocumento) {
		$this->tipoDocumento = $tipoDocumento;
	}

	public function getNumeroDocumento() {
		return $this->numeroDocumento;
	}

	public function setNumeroDocumento($numeroDocumento) {
		$this->numeroDocumento = $numeroDocumento;
	}

	public function getFechaNacimiento() {
		return $this->fechaNacimiento;
	}

	public function setFechaNacimiento($fechaNacimiento) {
		$this->fechaNacimiento = $fechaNacimiento;
	}

	public function getCorreo() {
		return $this->correo;
	}

	public function setCorreo($correo) {
		$this->correo = $correo;
	}

	public function getCelular() {
		return $this->celular;
	}

	public function setCelular($celular) {
		$this->celular = $celular;
	}

	public function getImagen() {
		return $this->imagen;
	}

	public function setImagen($imagen) {
		$this->imagen = $imagen;
	}

	public function exchangeArray(Array $data)
	{
		$this->codPersona = (isset($data['codPersona'])) ? $data['codPersona'] : null;
	
		$this->nombres = (isset($data['nombres'])) ? $data['nombres'] : null;
	
		$this->primerApellido = (isset($data['primerApellido'])) ? $data['primerApellido'] : null;
		
		$this->segundoApellido = (isset($data['segundoApellido'])) ? $data['segundoApellido'] : null;
	
		$this->tipoDocumento = (isset($data["tipoDocumento"])) ? $data["tipoDocumento"] : null;
		 
		$this->numeroDocumento = (isset($data['numeroDocumento'])) ? $data['numeroDocumento'] : null;
		
		$this->fechaNacimiento = (isset($data['fechaNacimiento'])) ? $data['fechaNacimiento'] : null;
		
		$this->correo = (isset($data['correo'])) ? $data['correo'] : null;
		
		$this->celular = (isset($data['celular'])) ? $data['celular'] : null;

		$this->imagen = (isset($data['imagen'])) ? $data['imagen'] : null;
		 
	}
	
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}
	
	
	
		
}
