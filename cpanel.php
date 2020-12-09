<?php









$cpanel = isset($_GET["pg"]);




if ($cpanel) {

    switch ($_GET["pg"]) {


       

        case 'login':
            include_once "app/site/login.php";
            break;

        case 'agenda':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/agenda.php";

            include_once "app/painelAdm/paginas/includes/footer.php";


            break;
        case 'cadastrodemedicos':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/cadastrodemedicos.php";
            inserirprofi();
            include_once "app/painelAdm/paginas/includes/footer.php";


            break;

        case 'profissionais':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/profissionais.php";

            include_once "app/painelAdm/paginas/includes/footer.php";


            break;
        case 'pacientes':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/pacientes.php";

            include_once "app/painelAdm/paginas/includes/footer.php";

            break;

        case 'marcarconsulta':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/marcarconsulta.php";

            include_once "app/painelAdm/paginas/includes/footer.php";

            break;


        case 'cadastrodeespecialidades':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/cadastrodeespecialidades.php";

            include_once "app/painelAdm/paginas/includes/footer.php";


            break;

        case 'planodesaude':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/planodesaude.php";

            include_once "app/painelAdm/paginas/includes/footer.php";


            break;

        default:

            break;
    }
} else {
    include_once "app/painelAdm/paginas/includes/header.php";
    include_once "app/painelAdm/paginas/includes/navegacao.php";
    include_once "app/painelAdm/paginas/inicial.php";

    include_once "app/painelAdm/paginas/includes/footer.php";
}
