<?php
include_once "app/painelAdm/helpers/helperAdm.php";

$pg = "cpanel";


session_start();
if (isset($_GET["pg"])) {
    $pg = $_GET["pg"];
}

if (isset($_SESSION['usuario'])) {
    switch ($pg) {


        case 'cpanel':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'login':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'agenda':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/agenda.php";
            // include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'solicitaçaocontato':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/solicitaçaocontato.php";

            include_once "app/painelAdm/paginas/includes/footer.php";
            break;


        case 'cadastrodemedicos':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";

            inserirprofi();

            // include_once "app/painelAdm/paginas/cadastrodemedicos.php";
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
            inserirpaciente();
            // include_once "app/painelAdm/paginas/marcarconsulta.php";

            include_once "app/painelAdm/paginas/includes/footer.php";

            break;

        case 'apagarprofissionais':
            $parametros = array(
                ':id_profi' => $_GET['id']
            );
            $apagarprofissionais = new Conexao();
            $apagarprofissionais->intervencaoNoBanco('DELETE FROM profissionais WHERE id_profi = :id_profi', $parametros);
            header('location: ?pg=profissionais');
            break;

        case 'apagarconsulta':
            $parametros = array(
                ':id_eventos' => $_GET['id']
            );
            $apagarprofissionais = new Conexao();
            $apagarprofissionais->intervencaoNoBanco('DELETE FROM eventos WHERE id_eventos = :id_eventos', $parametros);
            header('location: ?pg=marcaçoes');
            break;


        case 'apagarpacientes':
            $parametros = array(
                ':id_paciente' => $_GET['id']
            );
            $apagarpacientes = new Conexao();
            $apagarpacientes->intervencaoNoBanco('DELETE FROM pacientes WHERE id_paciente = :id_paciente', $parametros);
            header('location: ?pg=pacientes');
            break;

        case 'apagarcontato':
            $parametros = array(
                ':id_contato' => $_GET['id']
            );
            $apagarpacientes = new Conexao();
            $apagarpacientes->intervencaoNoBanco('DELETE FROM contato WHERE id_contato = :id_contato', $parametros);
            header('location: ?pg=solicitaçaocontato');
            break;

        case 'cadastrodeespecialidades':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            inserirespecialidade();
            // include_once "app/painelAdm/paginas/cadastrodeespecialidades.php";

            include_once "app/painelAdm/paginas/includes/footer.php";


            break;

        case 'editarpacientes':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                atualizarpacientes();
            } else {
                //$editarpacientes = isset($_GET['id']);
                //if ($editarpacientes) {

                //$dadosusuario = atualizarpacientes($editarpacientes);
                include_once "app/painelAdm/paginas/editarpacientes.php";
                //} else {

                // }
            };
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;


        case 'editarprofissionais':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                atualizarprofissionais();
            } else {
                //$editarpacientes = isset($_GET['id']);
                //if ($editarpacientes) {

                //$dadosusuario = atualizarpacientes($editarpacientes);
                include_once "app/painelAdm/paginas/editarprofissionais.php";
                //} else {

                // }
            };
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;




        case 'sair';
            session_destroy();
            header('Location: ' . $_SERVER['PHP_SELF']);
            //header('Refresh: 0');
            break;


        case 'planodesaude':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/planodesaude.php";
            include_once "app/painelAdm/paginas/includes/footer.php";


            break;
        case 'marcarconsultaagenda':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/marcarconsultaagenda.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;



        case 'eventos':

            // inserirconsulta();
            include_once "app/painelAdm/calendario/cadastrar_evento.php";

            break;

        case 'contatovisu':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/visualizarcontato.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        case 'marcaçoes':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/marcaçoes.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

        default:
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;
    }
} else {
    $erro;
    //verifica se foi submetido metodo post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (verificaSeLogado()) {
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
        }
    } else {
        include_once "app/site/paginas/login.php";
    }
}
