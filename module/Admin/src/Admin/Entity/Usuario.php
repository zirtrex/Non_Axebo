<?php

namespace Admin\Entity;

class Usuario { 

    protected $codUsuario;
    
    protected $codDocente;
    
    protected $usuario;
    
    protected $clave;
    
    protected $rol;
    
    protected $estado;
    
    protected $numeroIntentos;
    
    protected $token;

    protected $ultimoIngreso;  

    public function getCodUsuario() {
		return $this->codUsuario;
	}

	public function setCodUsuario($codUsuario) {
		$this->codUsuario = $codUsuario;
	}

	public function getCodDocente() {
		return $this->codDocente;
	}

	public function setCodDocente($codDocente) {
		$this->codDocente = $codDocente;
	}

	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	public function getClave() {
		return $this->clave;
	}

	public function setClave($clave) {
		$this->clave = $clave;
	}

	public function getRol() {
		return $this->rol;
	}

	public function setRol($rol) {
		$this->rol = $rol;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function getNumeroIntentos() {
		return $this->numeroIntentos;
	}

	public function setNumeroIntentos($numeroIntentos) {
		$this->numeroIntentos = $numeroIntentos;
	}

	public function getToken() {
		return $this->token;
	}

	public function setToken($token) {
		$this->token = $token;
	}

	public function getUltimoIngreso() {
		return $this->ultimoIngreso;
	}

	public function setUltimoIngreso($ultimoIngreso) {
		$this->ultimoIngreso = $ultimoIngreso;
	}

	public function exchangeArray(Array $data)
    {
        $this->codUsuario = (isset($data['codUsuario'])) ? $data['codUsuario'] : null;
        
        $this->codDocente = (isset($data['codDocente'])) ? $data['codDocente'] : null;
    
        $this->usuario = (isset($data['usuario'])) ? $data['usuario'] : null;
    
        $this->clave = (isset($data['clave'])) ? $data['clave'] : null;
        
        $this->rol = (isset($data['rol'])) ? $data['rol'] : null;
        
        $this->estado = (isset($data['estado'])) ? $data['estado'] : null;

        $this->numeroIntentos = (isset($data['numeroIntentos'])) ? $data['numeroIntentos'] : null;

        $this->token = (isset($data['token'])) ? $data['token'] : null;

        $this->ultimoIngreso = (isset($data['ultimoIngreso'])) ? $data['ultimoIngreso'] : null;
         
    }
    
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
    
    
    
        
}
