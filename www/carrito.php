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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
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
        <h1>Carro de compras</h1>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <form action="">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th class="mob-hide"></th>
                                    <th class="mob-hide">Precio</th>
                                    <th class="table-qty">Cantidad</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lista as $producto){ ?>
                                <tr>
                                    <td>
                                        <h5><?php echo $producto->getNombre(); ?></h5>
                                    </td>
                                    <td class="text-center">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($producto->getImagen()); ?>" alt="<?php echo $producto->getNombre(); ?>">
                                    </td>
                                    <td class="mob-hide">

                                        <span class="order-product-price">$<?php echo $producto->getPrecio(); ?></span>

                                    </td>
                                    <td>
                                        <select class="form-select" name="cantidad" title="Qty">
                                        <option value=<?php echo $producto->getCanti(); ?> selected="selected"><?php echo $producto->getCanti(); ?></option>
                                            <option value="1">1</option>
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
                                    </td>
                                    <td>
                                        <span class="order-product-subtotal">$<?php echo $producto->getCanti() * $producto->getPrecio(); ?></span>
                                    </td>
                                    <td clas="text-right">
                                        <a href="" class="cart-product-remove" title="Remove Product">
                                            <i class="fi-rr-cross-circle"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="row">
                    <div class="col-sm-12 col-m2-cart-stimate">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="card-title">Costo estimado compra</h5>
                            </div>
                            <div class="car-text">
                                <form action="">
                                    <div class="form-group">
                                        <label for="municipio">Municipio</label>
                                        <select name="municipios" id="estimate_shipping_municipality" class="form-select">
                                            <option value=""></option>
                                            <option value="Balancan">Balancán</option>
                                            <option value="Cardenas">Cárdenas</option>
                                            <option value="Centla">Centla</option>
                                            <option value="Centro">Centro</option>
                                            <option value="Comalcalco">Comalcalco</option>
                                            <option value="Cunduacán">Cunduacán</option>
                                            <option value="Emiliano Zapata">Emiliano Zapata</option>
                                            <option value="Huimanguillo">Huimanguillo</option>
                                            <option value="Jalapa">Jalapa</option>
                                            <option value="Jalpa de Méndez">Jalpa de Méndez</option>
                                            <option value="Jonuta">Jonuta</option>
                                            <option value="Macuspana">Macuspana</option>
                                            <option value="Nacajuca">Nacajuca</option>
                                            <option value="Paraíso">Paraíso</option>
                                            <option value="Tacotalpa">Tacotalpa</option>
                                            <option value="Teapa">Teapa</option>
                                            <option value="Tenosique">Tenosique</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="localidad">Localidad</label>
                                        <input class="form-control" type="text" aria-label="default input example">
                                    </div>
                                    <div class="form-group">
                                        <label for="CodigoPostal">Codigo Postal</label>
                                        <input class="form-control" type="text" aria-label="default input example">
                                    </div>
                                    <div class="form-group">
                                        <label for="referencias">Referencias</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="personaresive">Persona que recive</label>
                                        <input class="form-control" type="text" aria-label="default input example">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 cart-totals">
                        <table class="table table-striped">
                            <tbody>
                                <tr class="totals key">
                                    <td colspan="1" class="text-left"><strong>Total</strong></td>
                                    <td colspan="1" class="text-right"><strong>$1.300.000</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center cart-actions">
                            <a href="" class="btn btn-primary btn-block" title="Proceed to Checkout">Comprar</a>
                            <a href="index.php" class="btn btn-link btn-block" title="← Continue Shopping">← Continuar comprando</a>
                        </div>
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