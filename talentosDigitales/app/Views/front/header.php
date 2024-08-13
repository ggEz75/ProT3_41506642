<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($titulo)?></title>


    <link href="<?= base_url('icons/iconPrincipal.ico') ?>" rel="icon">

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">

    <link rel="stylesheet" type="text/css" media='screen' href="<?= base_url('css/style.css') ?>">

    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>" ></script>
</head>

<body class="background">


  <div class="navContainer pb-5">
  <div class="navColor fixed-top">

    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
          
          <a class="navbar-brand" href="#">
          <img src="<?= base_url('icons/iconPage.png') ?>" style="max-height: 50px ;" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

              <form class="d-flex mt-1 me-5 navSearch" role="search">
                <input class="form-control me-3" type="search" placeholder="Buscar un contenido" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg></button>
              </form>

              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/') ?>">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('servicios') ?>">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('sobre_nosotros') ?>">Quienes somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('new') ?>">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('usuarios') ?>">Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('login') ?>">Iniciar Sesión</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
  </div>
  </div>



