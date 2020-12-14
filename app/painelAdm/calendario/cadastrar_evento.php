




<?php 

        include "conexao.php";
                            
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $medico = $_POST["medico"];
        
        $query = "INSERT INTO `eventos` (`title`, `start`,`medico`) VALUES ('$nome', '$data','$medico')";
        
        $exec = $conexao->exec($query);                         
        
        if($exec){            
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/agenda.php";

        }
        else{
            echo "Houve um problema Porfavor contate o administrador";
        }
       
        
?>