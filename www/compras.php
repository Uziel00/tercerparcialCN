<?php
require_once("logica/usuario.php");
require_once("logica/CrudProductos.php");
require_once("logica/productos.php");

$producto = new productos();
$crudP = new CrudProductos();
$crudPu = new CrudProductos();
$user = new usuario();

$user = $crudPu->mostrarUser($_SESSION['usuario']);

$lista = $crudP->mostrarCarrito($_SESSION['usuario']);


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
    <link href="css/editar.css" rel="stylesheet">
    <title>PHierros</title>
</head>

<body>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="" title="PHierros" class="navbar-brand">
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

                <form action="buscar.php" class="d-flex container-fluid">
                    <input name="buscar" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button href="?buscar=$_GET['buscar']" class="btn bus btn-outline-success" type="submit"><i class="fi-rr-search"></i></button>
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
        <h1>Tus compras</h1>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="media/WhatsApp Image 2021-07-24 at 19.27.57.jpeg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">$12,500</p>
                        <form action="">
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
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