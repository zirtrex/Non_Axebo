<?php

namespace Admin\Entity;

use Admin\Entity\Persona;
use Admin\Entity\Usuario;

class Estudiante {	

	protected $codEstudiante;
	
	protected $anioIngreso;
	
	protected $Usuario;
	
	protected $Persona;
	
	protected $codCarreraProfesional;
	
	protected $estado;
	

	public function getCodEstudiante() {
		return $this->codEstudiante;
	}

	public function setCodEstudiante($codEstudiante) {
		$this->codEstudiante = $codEstudiante;
	}

	public function getAnioIngreso() {
		return $this->anioIngreso;
	}

	public function setAnioIngreso($anioIngreso) {
		$this->anioIngreso = $anioIngreso;
	}

	public function getUsuario() {
		return $this->Usuario;
	}

	public function setUsuario(Usuario $Usuario) {
		$this->Usuario = $Usuario;
	}

	public function getPersona() {
		return $this->Persona;
	}

	public function setPersona(Persona $Persona) {
		$this->Persona = $Persona;
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
		$this->codEstudiante = (isset($data['codEstudiante'])) ? $data['codEstudiante'] : null;
	
		$this->anioIngreso = (isset($data['anioIngreso'])) ? $data['anioIngreso'] : null;
		
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
		
		$this->codCarreraProfesional = (isset($data['codCarreraProfesional'])) ? $data['codCarreraProfesional'] : null;
		
		$this->estado = (isset($data['estado'])) ? $data['estado'] : null;
		 
	}
	
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}	
		
}
