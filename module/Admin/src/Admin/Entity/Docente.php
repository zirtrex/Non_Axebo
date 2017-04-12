<?php

namespace Admin\Entity;

use Admin\Entity\Persona;
use Admin\Entity\Usuario;

class Docente {	

	protected $codDocente;
	
	protected $modalidad;
	
	protected $gradoAcademico;
	
	protected $profesion;
	
	protected $Usuario;
	
	protected $Persona;
	
	protected $estado;
		

	public function getCodDocente() {
		return $this->codDocente;
	}

	public function setCodDocente($codDocente) {
		$this->codDocente = $codDocente;
	}

	public function getModalidad() {
		return $this->modalidad;
	}

	public function setModalidad($modalidad) {
		$this->modalidad = $modalidad;
	}

	public function getGradoAcademico() {
		return $this->gradoAcademico;
	}

	public function setGradoAcademico($gradoAcademico) {
		$this->gradoAcademico = $gradoAcademico;
	}

	public function getProfesion() {
		return $this->profesion;
	}

	public function setProfesion($profesion) {
		$this->profesion = $profesion;
	}

	public function getUsuario() {
		return $this->Usuario;
	}

	public function setUsuario(Usuario $usuario) {
		$this->Usuario = $usuario;
	}

	public function getPersona() {
		return $this->Persona;
	}

	public function setPersona(Persona $persona) {
		$this->Persona = $persona;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function exchangeArray(Array $data)
	{
		$this->codDocente = (isset($data['codDocente'])) ? $data['codDocente'] : null;
	
		$this->modalidad = (isset($data['modalidad'])) ? $data['modalidad'] : null;
	
		$this->gradoAcademico = (isset($data['gradoAcademico'])) ? $data['gradoAcademico'] : null;
	
		$this->profesion = (isset($data["profesion"])) ? $data["profesion"] : null;
		
		$this->estado = (isset($data['estado'])) ? $data['estado'] : null;

		$usuario = new Usuario();
		
		$usuario->setCodUsuario(isset($data['codUsuario']) ? $data['codUsuario'] : null);
		
		$this->Usuario = $usuario;

		$persona = new Persona();
		
		$persona->setCodPersona(isset($data['codPersona']) ? $data['codPersona'] : null);
		$persona->setNombres(isset($data['nombres']) ? $data['nombres'] : null);
		$persona->setPrimerApellido(isset($data['primerApellido']) ? $data['primerApellido'] : null);
		$persona->setSegundoApellido(isset($data['segundoApellido']) ? $data['segundoApellido'] : null);
		$persona->setTipoDocumento(isset($data['tipoDocumento']) ? $data['tipoDocumento'] : null);
		$persona->setNumeroDocumento(isset($data['numeroDocumento']) ? $data['numeroDocumento'] : null);
		$persona->setFechaNacimiento(isset($data['fechaNacimiento']) ? $data['fechaNacimiento'] : null);
		$persona->setCorreo(isset($data['correo']) ? $data['correo'] : null);
		$persona->setCelular(isset($data['celular']) ? $data['celular'] : null);
		
		$this->Persona = $persona;
		
		 
	}
	
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}	
		
}
