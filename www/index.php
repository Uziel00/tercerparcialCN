<?php
require_once("logica/usuario.php");
require_once("logica/CrudProductos.php");
require_once("logica/productos.php");
$productos = new productos();
$crudP = new CrudProductos();
$crudPu = new CrudProductos();
$user = new usuario();

$user = $crudPu->mostrarUser($_SESSION['usuario']);
$lista = $crudP->mostrar();


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
    <div class="container-xxl">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="media/wallpapertip_welding-wallpaper_125403.jpg" class="d-block w-100" alt="soldador, soldadura">
                    <div class="carousel-caption d-md-block">
                        <h5>Trabajos de calidad</h5>
                        <p>Empresa dedicada a la elaboracion de trabajos de herreria.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="media/kerf-soldadura-04.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h5>Elaboramos los modelos que usted desee.</h5>
                        <p>Realizamos los presupuestos de acuerdo a las especificaciones que nos envies.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="media/herreria-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h5>Nos enfocamos a complacer a nuestros clientes.</h5>
                        <p>Los materiales utilizados siempre seran los que usted solicite en su proyecto.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container producto">
        <h1>Productos</h1>
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
            <?php foreach ($lista as $productos) { ?>
                <div class="col">
                    <div class="card">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($productos->getImagen()); ?>" class="card-img-top" alt="<?php echo $productos->getNombre(); ?>">
                        <div class="card-body">
                            <input type="hidden" <?php echo $productos->getIdProducto() ?>>
                            <h5 class="card-title"><?php echo $productos->getNombre(); ?></h5>
                            <p class="card-text"><?php echo $productos->getDescripcion(); ?></p>
                            <p class="card-text">Costo aproximado <br> $<?php echo $productos->getPrecio(); ?></p>
                            <input type="hidden" <?php echo $productos->getEtiquetas() ?>>
                            <input type="hidden" <?php echo $productos->getMateriales() ?>>
                            <a href="visualizar.php?id=<?php echo $productos->getIdProducto() ?>" class="btn btn-primary">Ver proyecto</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center">Nuestras opciones</h1>
        <div class="row row-cols-2 row-cols-lg-2 g-lg-2">
            <div class="col inf">
                <div class="card inf text-center" style="width: 18rem;">
                    <img src="media/pngegg (4).png" class="card-img-top ico" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Elige tu opcion de pago </h5>
                        <p class="card-text">Podras pagar con tu tarjeta de credito o debito, tambien podras realizar tranferencias bancarias de acuerdo al anticipo.</p>
                    </div>
                </div>
            </div>
            <div class="col inf">
                <div class="card inf text-center" style="width: 18rem;">
                    <img src="media/pngegg (5).png" class="card-img-top ico" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Entregas en todo el estado</h5>
                        <p class="card-text">El costo de la entrega sera evaluado segun tu localizacion, el costo es minimo.</p>
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