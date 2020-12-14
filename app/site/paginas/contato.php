<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>
<div class="row">
</div>
<div class="p-2">
    <div class="display-3 font-weight-bolder text-center" style="font-family: san;" >  Contato</div>
    <br>
    <div class="col-4 offset-4 mb-5">
        <form action="index.php?pg=cadastrodemensagem" method="POST">
            <div class="form-group ">
                <label for="nome"><strong>Nome:</strong></label>
                <input type="text" required name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
            <hr class="contato">

            <div class="form-group ">
                <label for="email"><strong>Email:</strong></label>
                <input type="text" required name="email" class="form-control" id="email" placeholder="Ex: luiza-santos@gmail.com">
            </div>
            <hr class="contato">
            <div class="form-group">
                <label for="msg"><strong>Mensagem:</strong></label>
                <textarea required class="form-control" name="mensagem" id="text" placeholder="Seja bem específico e nos dê a maior quantidade de detalhes possível." cols="30" rows="5"></textarea>
            </div>
            
            <div class="form-group text-right">
                
                <button type="submit" class="btn btn-primary">Enviar
                    <span class="bre-send"></span>
                </button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col"></div>
    </div>
</div>