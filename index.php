<?php 

include_once "app/painelAdm/helpers/conexao.php";

// Header
include_once "app/site/paginas/includes/header.php";


switch($_GET["pg"]) {
   

    case 'contato':
        include_once "app/site/paginas/includes/header.php";
        include_once "app/site/paginas/contato.php";
        include_once "app/site//paginas/includes/footer.php";
        break;
        
    case 'servicos':
        include_once "app/site/paginas/includes/header.php";
      
        include_once "app/site/paginas/servicos.php";
        include_once "app/site/paginas/includes/footer.php";
        break;
       
    case 'inicial':
        include_once "app/site/paginas/includes/header.php";
        include_once "app/site/paginas/includes/navegacao.php";
        include_once "app/site/paginas/sobre.php";
        include_once "app/site/paginas/includes/footer.php";
    break;

    default:
    
break;

}
//footer
include_once "app/site/paginas/includes/footer.php";
