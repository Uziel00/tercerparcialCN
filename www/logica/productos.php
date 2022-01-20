<?php

class productos{
    private $idProducto;
    private $nombre;
    private $materiales;
    private $precio;
    private $descripcion;
    private $etiquetas;
    private $imagen;
	private $canti;

    function __construct()
    {
        
    }

    public function getIdProducto(){
		return $this->idProducto;
	}

	public function setIdProducto($idProducto){
		$this->idProducto = $idProducto;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getMateriales(){
		return $this->materiales;
	}

	public function setMateriales($materiales){
		$this->materiales = $materiales;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setPrecio($precio){
		$this->precio = $precio;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getEtiquetas(){
		return $this->etiquetas;
	}

	public function setEtiquetas($etiquetas){
		$this->etiquetas = $etiquetas;
	}

	public function getImagen(){
		return $this->imagen;
	}

	public function setImagen($imagen){
		$this->imagen = $imagen;
	}
	public function getCanti(){
		return $this->canti;
	}

	public function setCanti($canti){
		$this->canti = $canti;
	}
}