<?php

class carritoDato{
    private $idCarrito;
    private $idUser;
    private $idProduc;
    private $cantidad;

    function __construct()
    {
        
    }

    public function getIdCarrito(){
		return $this->idCarrito;
	}

	public function setIdCarrito($idCarrito){
		$this->idCarrito = $idCarrito;
	}

	public function getIdUser(){
		return $this->idUser;
	}

	public function setIdUser($idUser){
		$this->idUser = $idUser;
	}

	public function getIdProduc(){
		return $this->idProduc;
	}

	public function setIdProduc($idProduc){
		$this->idProduc = $idProduc;
	}

    public function getCantidad(){
		return $this->cantidad;
	}

	public function setCantidad($cantidad){
		$this->cantidad = $cantidad;
	}

}