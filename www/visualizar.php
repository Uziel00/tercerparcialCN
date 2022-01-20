<?php
require_once("logica/CrudProductos.php");
require_once("logica/productos.php");
require_once("logica/usuario.php");

$crudPu = new CrudProductos();
$user = new usuario();

$user = $crudPu->mostrarUser($_SESSION['usuario']);

$productos = new productos();
$crudP = new CrudProductos();

$productos = $crudP->verProducto($_GET['id']);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="media/logo_proyecto_BD.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link href="css/editar.css" rel="stylesheet">
    <title>PHierros</title>
</head>

<body>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="index.php" title="PHierros" class="navbar-brand">
                    <img src="media/logo_proyecto_BD_nombre_opt1.png" class="store-image" alt="Bootstrap">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fi-rr-menu-burger"></i>
                </button>

                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link active" aria-current="page">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="ventanas.php">Ventanas</a></li>
                                    <li><a class="dropdown-item" href="puertas.php">Puertas</a></li>
                                    <li><a class="dropdown-item" href="portones.php">Portones</a></li>
                                    <li><a class="dropdown-item" href="techados.php">Techados</a></li>
                                    <li><a class="dropdown-item" href="industriales.php">Trabajos industriales</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="ayuda.php" class="nav-link active" aria-current="page">Ayuda</a>
                            </li>
                        </ul>
                        <span class="text-muted show">--------------------------------------------</span>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="carrito.php"><i class="fi-rr-shopping-cart"></i> Carrito</a>
                            </li>
                            <li class="nav-item">
                                <?php if ($_SESSION['usuario'] < 0) { ?>
                                    <a class="nav-link" href="ingresa.php"><i class="fi-rr-user"></i> Ingresa</a>
                                <?php } else { ?>
                                    <a class="nav-link active" aria-current="page" href=""><i class="fi-sr-user"></i><?php echo $user->getUsuario(); ?></a>
                                <?php } ?>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="compras.php"><i class="fi-rr-shopping-bag"></i> Compras</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <form action="buscar.php" method="GET" class="d-flex container-fluid">
                    <input name="buscar" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <input type="hidden" name="busqueda" value="busqueda">
                    <button class="btn bus btn-outline-success" type="submit"><i class="fi-rr-search"></i></button>
                </form>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active" aria-current="page">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ventanas.php">Ventanas</a></li>
                                <li><a class="dropdown-item" href="puertas.php">Puertas</a></li>
                                <li><a class="dropdown-item" href="portones.php">Portones</a></li>
                                <li><a class="dropdown-item" href="techados.php">Techados</a></li>
                                <li><a class="dropdown-item" href="industriales.php">Trabajos industriales</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="ayuda.php" class="nav-link active" aria-current="page">Ayuda</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="carrito.php"><i class="fi-rr-shopping-cart"></i> Carrito</a>
                        </li>
                        <li class="nav-item">
                            <?php if ($_SESSION['usuario'] < 0) { ?>
                                <a class="nav-link" href="ingresa.php"><i class="fi-rr-user"></i> Ingresa</a>
                            <?php } else { ?>
                                <a class="nav-link active" aria-current="page" href=""><i class="fi-sr-user"></i><?php echo $user->getUsuario(); ?></a>
                            <?php } ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="compras.php"><i class="fi-rr-shopping-bag"></i> Compras</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="container producto">
        <h2><?php echo $productos->getNombre(); ?></h2>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($productos->getImagen()); ?>" class="img-fluid imag" alt="<?php echo $productos->getNombre(); ?>">
            </div>
            <div class="col-lg-6">
                <form action="logica/administrar.php" method="POST" class="form-horizontal">
                    <div class="row mb-3">
                        <label for="precio" class="col-sm-3 col-md-3 col-form-label">Precio: </label>
                        <div class="col-sm-8 col-dm-9">
                            <label for="Pre" class="col-sm-2 col-form-label product-form-price">$<?php echo $productos->getPrecio(); ?></label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="precio" class="col-sm-3 col-md-3 col-form-label">Cantidad: </label>
                        <div class="col-sm-8 col-dm-9">
                            <select class="form-select" name="cantidad" title="Qty">
                                <option value="1" selected="selected">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="descripcion" class="col-sm-3 col-md-3 col-form-label">Descripcion: </label>
                        <div class="col-sm-8 col-dm-9">
                            <label for="des" class="col-sm-10 col-form-label"><?php echo $productos->getDescripcion(); ?></label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Etiqueta" class="col-sm-3 col-md-3 col-form-label">Etiqueta: </label>
                        <div class="col-sm-8 col-dm-9">
                            <label for="mat" class="col-sm-10 col-form-label"><?php echo $productos->getEtiquetas(); ?></label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Materiales" class="col-sm-3 col-md-3 col-form-label">Materiales: </label>
                        <div class="col-sm-8 col-dm-9">
                            <label for="mat" class="col-sm-10 col-form-label"><?php echo $productos->getMateriales(); ?></label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Materiales" class="col-sm-3 col-md-3 col-form-label"></label>
                        <div class="col-sm-8 col-dm-9">
                            <input type="hidden" name="idUsuario" value="<?php echo $user->getIdUsuario() ?>">
                            <input type="hidden" name="idProducto" value="<?php echo $productos->getIdProducto() ?>">
                            <input type="hidden"  name="insertarCarr" value="insertarCarr">
                            <button class="button btn btn-primary btn-block" title="Agreagar al carrito">Agregar al carrito</button>
                            <a href="index.php" class="btn btn-link btn-block" title="← Continue Shopping">← Continuar comprando</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="container-xxl inf">
        <p>Copyright © 2021
            Carretera Principal S/N, Ejido La Lucha, 86680 Cunduacan, Tabasco, Mexico.
        </p>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https: // unpkg .com / ionicons @ 5.5.2 / dist / ionicons / ionicons.js "> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>