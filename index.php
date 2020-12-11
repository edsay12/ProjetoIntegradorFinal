<?php

include_once "app/painelAdm/helpers/conexao.php";

// Header
include_once "app/site/paginas/includes/header.php";



$paginas = isset($_GET['pg']);

if ($paginas) {
    # code...


    switch ($_GET["pg"]) {


        case 'contato':
            include_once "app/site/paginas/contato.php";
            break;

        case 'servicos':
            include_once "app/site/paginas/servicos.php";
            break;

        case 'inicial':
            include_once "app/site/paginas/includes/navegacao.php";
            include_once "app/site/paginas/inicial.php";
            break;

        case 'sobre':
            include_once "app/site/paginas/sobre.php";
            break;

        default:
        include_once "app/site/paginas/includes/navegacao.php";
            include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/includes/navegacao.php";
    include_once "app/site/paginas/inicial.php";
}

//footer
include_once "app/site/paginas/includes/footer.php";
