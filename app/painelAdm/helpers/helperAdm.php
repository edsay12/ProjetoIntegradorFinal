<?php
include_once "app/painelAdm/helpers/conexao.php";

function verificaSeLogado()
{

    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);


    $resultConexao = new Conexao();

    $parametros = array(
        ':usuario' => $usuario
    );

    $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios WHERE nome = :usuario', $parametros);

    if (count($resultadoConsulta) > 0) {
        $senha_bd = $resultadoConsulta[0]['senha'];

        if (password_verify($senha, $senha_bd)) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['img_usuario'] = $resultadoConsulta[0]['img'];
            return true;
        } else {
            $erro = 'Usuário e/ou senha inválidos';

            //incluir a pagina de login aqui:
            include_once "app/painelAdm/paginas/login.php";
        }
    } else {
        $erro = 'Usuário e/ou senha inválidos';

        //incluir a pagina de login aqui:
        include_once "app/painelAdm/paginas/login.php";
    }
}


function inserirprofi()
{

    //Pegando as variáveis via post
    $nome = trim($_POST['nome']);
    $rg = trim($_POST['rg']);
    $cpf = trim($_POST['cpf']);

    //movendo imagens para a pasta app/painelAdm/assets/img
    move_uploaded_file($_FILES['img_usuario']['tmp_name'], 'app/painelAdm/assets/img/' . $_FILES['img_usuario']['name']);

    //Validar as variáveis e encriptar a senha
    $parametros = array(
        ':nome' => $nome,
        ':rg' => $rg,
        ':cpf' => $cpf,
        
    );

    $resultDados = new Conexao();
    $resultDados->intervencaoNoBanco('INSERT INTO usuarios(nome, rg, cpf) VALUES (:nome, :rg, :cpf)', $parametros);

    //incluir a pagina que será exibida após cadastrar um usuario aqui:
    include_once "app/painelAdm/paginas/marcarconsulta.php";
}

function inserirProduto()
{

    //Pegando as variáveis via post
    $nome = trim($_POST['nome']);
    $desc = trim($_POST['desc']);
    $preco = trim($_POST['preco']);

    //Validar as variáveis e encriptar a senha
    $parametros = array(
        ':nome' => $nome,
        ':descricao' => $desc,
        ':preco' => $preco
    );

    $resultDados = new Conexao();
    $resultDados->intervencaoNoBanco('INSERT INTO produtos(nome, descricao, preco) VALUES (:nome,:descricao ,:preco)', $parametros);

    //incluir a pagina que será exibida após cadastrar um produto aqui:
    include_once "app/painelAdm/paginas/produtos.php";
}

function atualizarUsuario()
{

    //pegando variaveis via POST
    $idUsuario = trim($_POST['id_usuario']);
    $senha = trim($_POST['senha']);

    //validando as variaveis
    $parametros = array(
        ':id_usuario' => $idUsuario,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT)
    );

    //atualizando no banco
    $atualizaUsuario = new Conexao();
    $atualizaUsuario->intervencaoNoBanco('UPDATE usuarios SET senha = :senha WHERE id_usuario = :id_usuario', $parametros);

    //incluir a pagina que será exibida quando um usuario for atualizado aqui:
    include_once "app/painelAdm/paginas/usuarios-listar.php";
}

function visualizarUsuario($id)
{
    if ($id) {
        $parametros = array(':id_usuario' => $_GET['id']);

        $resultUsuarioConsulta = new Conexao();
        $dados = $resultUsuarioConsulta->consultarBanco('SELECT * FROM usuarios WHERE id_usuario = :id_usuario', $parametros);

        if (count($dados) > 0) {
            return $dados;
        } else {

            //?pg vai receber o nome para o qual será redirecionado caso não encontre um usuario para visualizar:
            Header('Location: ?pg=usuarios-listar');
        }
    }
}


function visualizarMensagem()
{
    $idUsuario = $_GET['id'];

    $parametros = array(
        ':visualizou' => 1,
        ':id_usuario' => $idUsuario
    );

    //atualizando no banco
    $atualizaUsuario = new Conexao();
    $atualizaUsuario->intervencaoNoBanco('UPDATE contato SET visualizou = :visualizou WHERE id_usuario = :id_usuario', $parametros);
}
