<?php
require_once("conexion.php");
require_once("productos.php");
require_once("usuario.php");
session_start();
class CrudProductos
{
    public $precio = 100000000;
    function __construct()
    {
    }

    public function mostrar()
    {
        $db = Db::conectar();
        $listaPro = [];
        $select = $db->query("SELECT * FROM productos");
        foreach ($select->fetchAll(PDO::FETCH_ASSOC) as $produc) {
            $product = new productos();
            $product->setIdProducto($produc['idProductos']);
            $product->setNombre($produc['nombre']);
            $product->setMateriales($produc['materiales']);
            $product->setPrecio($produc['PrecioAproximado']);
            $product->setDescripcion($produc['Descripcion']);
            $product->setEtiquetas($produc['Etiquetas']);
            $product->setImagen($produc['imgProducto']);
            $listaPro[] = $product;
        }
        return $listaPro;
    }

    public function mostrarCarrito($id)
    {
        $db = Db::conectar();
        $listaPro = [];
        $select = $db->prepare("SELECT p.idProductos, p.nombre,p.materiales,p.PrecioAproximado,p.Descripcion,p.Etiquetas,p.imgProducto,c.Cantidad
         FROM productos as p, carrito as c where p.idProductos = c.idProductos and c.idUsuario=:id");
        $select->bindValue('id',$id);
        $select->execute();
        foreach ($select->fetchAll(PDO::FETCH_ASSOC) as $produc) {
            $product = new productos();
            $product->setIdProducto($produc['idProductos']);
            $product->setNombre($produc['nombre']);
            $product->setMateriales($produc['materiales']);
            $product->setPrecio($produc['PrecioAproximado']);
            $product->setDescripcion($produc['Descripcion']);
            $product->setEtiquetas($produc['Etiquetas']);
            $product->setImagen($produc['imgProducto']);
            $product->setCanti($produc['Cantidad']);
            $listaPro[] = $product;
        }
        return $listaPro;
    }

    public function mostrarVentanas()
    {
        $db = Db::conectar();
        $listaPro = [];
        $select = $db->prepare('SELECT * FROM productos where Etiquetas="Ventana"');
        $select->execute();
        foreach ($select->fetchAll(PDO::FETCH_ASSOC) as $produc) {
            $product = new productos();
            $product->setIdProducto($produc['idProductos']);
            $product->setNombre($produc['nombre']);
            $product->setMateriales($produc['materiales']);
            $product->setPrecio($produc['PrecioAproximado']);
            $product->setDescripcion($produc['Descripcion']);
            $product->setEtiquetas($produc['Etiquetas']);
            $product->setImagen($produc['imgProducto']);
            $listaPro[] = $product;
        }
        return $listaPro;
    }

    public function mostrarPuertas()
    {
        $db = Db::conectar();
        $listaPuert = [];
        $select = $db->prepare('SELECT * FROM productos where Etiquetas = "Puerta"');
        $select->execute();
        foreach ($select->fetchAll(PDO::FETCH_ASSOC) as $produc) {
            $product = new productos();
            $product->setIdProducto($produc['idProductos']);
            $product->setNombre($produc['nombre']);
            $product->setMateriales($produc['materiales']);
            $product->setPrecio($produc['PrecioAproximado']);
            $product->setDescripcion($produc['Descripcion']);
            $product->setEtiquetas($produc['Etiquetas']);
            $product->setImagen($produc['imgProducto']);
            $listaPuert[] = $product;
        }
        return $listaPuert;
    }

    public function mostrarTechados()
    {
        $db = Db::conectar();
        $listaTecha = [];
        $select = $db->prepare('SELECT * FROM productos where Etiquetas = "Techado"');
        $select->execute();
        foreach ($select->fetchAll(PDO::FETCH_ASSOC) as $produc) {
            $product = new productos();
            $product->setIdProducto($produc['idProductos']);
            $product->setNombre($produc['nombre']);
            $product->setMateriales($produc['materiales']);
            $product->setPrecio($produc['PrecioAproximado']);
            $product->setDescripcion($produc['Descripcion']);
            $product->setEtiquetas($produc['Etiquetas']);
            $product->setImagen($produc['imgProducto']);
            $listaTecha[] = $product;
        }
        return $listaTecha;
    }

    public function mostrarPortones()
    {
        $db = Db::conectar();
        $listaPort = [];
        $select = $db->prepare('SELECT * FROM productos where Etiquetas = "Porton"');
        $select->execute();
        foreach ($select->fetchAll(PDO::FETCH_ASSOC) as $produc) {
            $product = new productos();
            $product->setIdProducto($produc['idProductos']);
            $product->setNombre($produc['nombre']);
            $product->setMateriales($produc['materiales']);
            $product->setPrecio($produc['PrecioAproximado']);
            $product->setDescripcion($produc['Descripcion']);
            $product->setEtiquetas($produc['Etiquetas']);
            $product->setImagen($produc['imgProducto']);
            $listaPort[] = $product;
        }
        return $listaPort;
    }

    public function mostrarTrabajos()
    {
        $db = Db::conectar();
        $listaTra = [];
        $select = $db->prepare('SELECT * FROM productos where Etiquetas = "Trabajo industrial"');
        $select->execute();
        foreach ($select->fetchAll(PDO::FETCH_ASSOC) as $produc) {
            $product = new productos();
            $product->setIdProducto($produc['idProductos']);
            $product->setNombre($produc['nombre']);
            $product->setMateriales($produc['materiales']);
            $product->setPrecio($produc['PrecioAproximado']);
            $product->setDescripcion($produc['Descripcion']);
            $product->setEtiquetas($produc['Etiquetas']);
            $product->setImagen($produc['imgProducto']);
            $listaTra[] = $product;
        }
        return $listaTra;
    }

    public function buscar($buscar)
    {
        $db = Db::conectar();
        $listaBusc = [];
        $select = $db->prepare('SELECT * FROM productos where Etiquetas = "' . $buscar . '"');
        $select->execute();
        foreach ($select->fetchAll(PDO::FETCH_ASSOC) as $produc) {
            $product = new productos();
            $product->setIdProducto($produc['idProductos']);
            $product->setNombre($produc['nombre']);
            $product->setMateriales($produc['materiales']);
            $product->setPrecio($produc['PrecioAproximado']);
            $product->setDescripcion($produc['Descripcion']);
            $product->setEtiquetas($produc['Etiquetas']);
            $product->setImagen($produc['imgProducto']);
            $listaBusc[] = $product;
        }
        return $listaBusc;
    }

    public function verProducto($id)
    {

        $db = Db::conectar();
        $selectA = $db->prepare('SELECT * FROM productos WHERE idProductos=:id');
        $selectA->bindValue('id', $id);
        $selectA->execute();
        $produc = $selectA->fetch();
        $verpro = new productos();
        $verpro->setNombre($produc['nombre']);
        $verpro->setIdProducto($produc['idProductos']);
        $verpro->setMateriales($produc['materiales']);
        $verpro->setPrecio($produc['PrecioAproximado']);
        $verpro->setDescripcion($produc['Descripcion']);
        $verpro->setEtiquetas($produc['Etiquetas']);
        $verpro->setImagen($produc['imgProducto']);

        return $verpro;
    }

    public function sesion($user, $pass)
    {
        if ($user == "" && $pass == "") {
            header('Location:./../index.php');
        } else {
            $db = Db::conectar();
            $login = $db->prepare('SELECT * FROM usuario WHERE Usuario=:Usuario and Contrasena=:Contrasena');
            $login->bindValue('Usuario', $user);
            $login->bindValue('Contrasena', $pass);
            $login->execute();
            $file = $login->fetch();
            $usuario = new usuario();

            $usuario->setIdUsuario($file['idUsuario']);
            $usuario->setUsuario($file['Usuario']);
            $usuario->setContra($file['Contraseña']);
            $usuario->setCorreo($file['Correo']);
            $usuario->setImgen($file['imgUsuario']);
        }
        if ($usuario->getUsuario() != $user) {
            $_SESSION['usuario'] = $usuario->getIdUsuario();
            header('Location:./../ingresa.php');
        } else {
            header('Location:./../index.php');
        }
    }
    public function mostrarUser($id)
    {
        $db = Db::conectar();
        $login = $db->prepare('SELECT * FROM usuario WHERE idUsuario=:idUsuario');
        $login->bindValue('idUsuario', $id);
        $login->execute();
        $file = $login->fetch();
        $usuario = new usuario();
        $usuario->setIdUsuario($file['idUsuario']);
        $usuario->setUsuario($file['Usuario']);
        $usuario->setContra($file['Contrasena']);
        $usuario->setCorreo($file['Correo']);
        $usuario->setImgen($file['imgUsuario']);

        return $usuario;
    }

    public function insertarCarr($carrito)
    {
        $db = Db::conectar();
        $inserta = $db->prepare('INSERT INTO carrito VALUES(NULL,:idProducto,:idUsuario,:Cantidad)');
        $inserta->bindValue('idProducto',$carrito->getIdProduc());
        $inserta->bindValue('idUsuario',$carrito->getIdUser());
        $inserta->bindValue('Cantidad',$carrito->getCantidad());
        $inserta->execute();
    }
}
