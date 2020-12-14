<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>
<div class="row">
</div>
<div class="p-2">
    <div class="display-3 font-weight-bolder text-center"> Cadastro</div>
    <br>
    <div class="col-4 offset-4 mb-5">
        <form action="index.php?pg=cadastrarrecepsionista2" method="POST">
            <div class="form-group ">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" required name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
            <hr>



            <div class="form-group ">
                <label for="email"><strong>Senha</strong></label>
                <input type="password" required name="senha" class="form-control" >
            </div>
            <hr>
        
            <div class="form-group text-right">
                
                <button type="submit" class="btn btn-primary">Cadastrar
                    <span class="bre-send"></span>
                </button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col"></div>
    </div>
</div>