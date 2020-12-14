<!-- Meu CSS -->
<link rel="stylesheet" href="app/assets/css/painel.css">

<body class="corpo">

    <div class="container">
        <div class="content">
            <div id="cadastro">
                <form method="post" action="index.php?pg=cadastrarrecepsionista2">
                    <h1>Cadastro Recepcionista</h1>
                    <p>
                        <label for="email_cad"> Cadastro</label>
                        <input type="text" required name="nome" onfocus="" class="form-control" id="nome" placeholder="Digite seu nome">
                    </p>
                    <p>
                        <label for="senha_cad">Senha</label>
                        <input type="password" required name="senha" class="form-control">
                    </p>
                    <button type="submit" class="btn btn-primary">Cadastrar
                        <span class="bre-send"></span>
                    </button>
                    <a href="cpanel.php?pg=login" class="btn btn-block btn-warning my-4">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>