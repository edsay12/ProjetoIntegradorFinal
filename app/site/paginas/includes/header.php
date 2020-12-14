<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="app/assets/css/bootstrap.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="app/assets/img/footerphoto.gif">
    <!-- Icomoon -->
    <link rel="stylesheet" href="app/assets/icon/icon.css">

    <!-- Meu CSS -->
    <link rel="stylesheet" href="app/assets/css/projetofinalcss.css">
    
    

</head>

<body>


    <!-- Header -->

    <div class="container-fluid table-light alert-link">
        <div class="container">
            <nav class="navbar  navbar-expand-lg navbar-info">
                <img src="app/assets/img/miniatura.png" alt="" class=" p-2">
                <a class="navbar-brand" href="#"></a>
                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link <?php echo (($_GET['pg'] == 'inicial') ? 'btn py-2 btn-outline-primary' : ''); ?>" href="index.php?pg=inicial"> <span class=""> </span> Inicial </a></li>
                        <li class="nav-item active">
                            <a class="nav-link <?php echo (($_GET['pg'] == 'sobre') ? 'btn py-2 btn-outline-primary' : ''); ?>" href="index.php?pg=sobre"><span class=""></span>Sobre</a></li>
                        <li class="nav-item active">
                            <a class="nav-link <?php echo (($_GET['pg'] == 'contato') ? 'btn py-2 btn-outline-primary' : ''); ?>" href="index.php?pg=contato"> <span class=""> Contato</span></a></li>
                    </ul>



                    <?php

                    if (isset($_SESSION['usuario'])) { ?>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="bre-user"></span> Login
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-danger" href="#"><span class="bre-exit"></span> Sair</a>
                                </div>
                            </li>
                        </ul>
                    <?php
                    } else { ?>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link btn btn-outline-primary" href="cpanel.php?pg=login">Administração</a>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </nav>
        </div>
    </div>