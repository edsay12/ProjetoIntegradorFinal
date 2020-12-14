<?php

include_once "app/painelAdm/helpers/helperAdm.php";





$paginas = isset($_GET['pg']);

if ($paginas) {
    # code...


    switch ($_GET["pg"]) {

        case 'cadastrarrecepsionista':

            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app\site\paginas\includes\cadastrarecepsionista.php";
            break;


        case 'cadastrarrecepsionista2':
            inserirrecepcionista();
            break;

        case 'login':
            include_once "app/site/paginas/login.php";
            break;

        case 'contato':
            include_once "app/site/paginas/includes/header.php";
            include_once "app/site/paginas/contato.php";
            include_once "app/site/paginas/includes/footer.php";

            break;


        case 'cadastrodemensagem':
            include_once "app/site/paginas/includes/header.php";
            cadastrodemensagem();
            // include_once "app/site/paginas/contato.php";
            include_once "app/site/paginas/includes/footer.php";

            break;

        case 'servicos':
            include_once "app/site/paginas/includes/header.php";
            include_once "app/site/paginas/servicos.php";
            include_once "app/site/paginas/includes/footer.php";
            break;

        case 'inicial':
            include_once "app/site/paginas/includes/header.php";
            include_once "app/site/paginas/includes/navegacao.php";
            include_once "app/site/paginas/inicial.php";
            include_once "app/site/paginas/includes/footer.php";
            break;

        case 'sobre':
            include_once "app/site/paginas/includes/header.php";
            include_once "app/site/paginas/sobre.php";
            include_once "app/site/paginas/includes/footer.php";
            break;

        default:
            include_once "app/site/paginas/includes/header.php";
            include_once "app/site/paginas/includes/navegacao.php";
            include_once "app/site/paginas/inicial.php";
            include_once "app/site/paginas/includes/footer.php";
            break;
    }
} else {
    include_once "app/site/paginas/includes/header.php";
    include_once "app/site/paginas/includes/navegacao.php";
    include_once "app/site/paginas/inicial.php";
    include_once "app/site/paginas/includes/footer.php";
}
