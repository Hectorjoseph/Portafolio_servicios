<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Header.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title> <?php echo isset($pageTitle) ? $pageTitle : 'Servicios de Emergencia'; ?> </title>
    <link rel="icon" href="../Imagenes/Posible4.jpg" type="image/png">
</head>

<body>
    <header>
        <img class="logo" src="../Imagenes/Posible4.jpg" alt="Logo de Servicios Emergencia">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#servicios">Acerca de los Servicios</a></li>
                <li><a href="#expertos">Expertos</a></li>
                <li><a href="inicioSesion.php">inicio Sesion</a></li>
            </ul>
        </nav>
    </header>
