<?php

require_once("../logica/CrudProductos.php");
require_once("../logica/usuario.php");
require_once("../logica/carritoDato.php");

$crudUser = new CrudProductos();
$user = new usuario();
$carrito = new carritoDato();
$crudCarr = new CrudProductos();

if (isset($_POST['insertar'])) {
    
} elseif (isset($_POST['sesion'])) {
    $usua = $_POST['usuario'];
    $pass = $_POST['contrasena'];
    $crudUser->sesion($usua, $pass);
}

if(isset($_POST['insertarCarr'])){
    $carrito->setIdUser($_POST['idUsuario']);
    $carrito->setIdProduc($_POST['idProducto']);
    $carrito->setCantidad($_POST['cantidad']);
    $crudCarr->insertarCarr($carrito);
    header('Location:./../visualizar.php?id=' . $_POST['idProducto'].'');
}
