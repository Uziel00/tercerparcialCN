<?php

class usuario{
    private $idUsuario;
    private $usuario;
    private $contra;
    private $correo;
    private $imgen;

    function __construct()
    {
        
    }

    public function getIdUsuario(){
		return $this->idUsuario;
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getContra(){
		return $this->contra;
	}

	public function setContra($contra){
		$this->contra = $contra;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getImgen(){
		return $this->imgen;
	}

	public function setImgen($imgen){
		$this->imgen = $imgen;
	}

}