<?php $resultdados = new Conexao();

$dados = $resultdados->consultarBanco('SELECT * FROM especialidades');

?>





<div class="content-wrapper">
    <!-- Content Header (Page header) mantem tudo no seu devido lugar -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Cadastro De Médicos</h1>
                </div>
            </div>


            <div class="row">
                <div class="col-1 mt-4"> </div>
                <div class="col-3 mt-4 "> <img src="app/painelAdm/dist/img/med.png" alt=""> </div>
                <div class="col-6  mb-3">
                    <form action="?pg=cadastrodemedicos" method="POST">
                        <div class="form-group">
                            <label for="inputAddress">Nome Completo:</label>
                            <input class="form-control" type="text" name="nomemedico" placeholder="Exemplo:Jose da Silva">
                        </div>
                        <div class="row">
                            <div class="form-group  col-md-6">
                                <label for="inputEmail4">RG:</label>
                                <input class="rg form-control" type="text" name="rg" name="numbers" placeholder="Exemplo:9.858.659" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">CPF:</label>
                                <input type="text" name="cpf" class="form-control cpf" placeholder="Exemplo:133.151.154-56" id="inputPassword4">
                            </div>

                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <label name="especialidade"  for="inputState" >Especialidade:</label>
                            <select id="inputState" name="especialidade" class="form-control">

                                <?php foreach ($dados as $dadosusuarios) {   ?>
                                <option name="especialidade"  ><?php echo $dadosusuarios["especialidade"] ?></option>

                                <?php   } ?>
                            </select>

                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-lg btn-block"> Cadastrar<span class="icon-cheveron-right"></span> </button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /parte do meio -->



</div>
<!-- /.final meio -->