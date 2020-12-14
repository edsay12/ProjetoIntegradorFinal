<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel Administrativo</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/painelAdm/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/painelAdm/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- Meu CSS -->
  <link rel="stylesheet" href="app/assets/css/painel.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="app/painelAdm/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

  <?php if (isset($erro)) {  ?>

    <div class="alert alert-danger" id="erro"><?php echo $erro; ?></div>
  <?php }  ?>


  <div class="container">
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <br><br>
    <div class="content">
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="">
          <h1>Login</h1>
      
        </form>
      </div>

      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="">
          <h1>Painel Adm</h1>

          
          <p>
            <label for="email_cad">Usuário:</label>
            <input id="email_cad" name="email_cad" required="required" type="text" placeholder="clinicasenac@hotmail.com" />
          </p>



         
          

          <p>
            <label for="senha_cad">Senha:</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="" />
          </p>

          <a href="cpanel.php?pg=agenda" class="btn btn-block btn-primary">Entrar</a>

          
          <a href="index.php?pg=inicial" class="btn btn-block btn-warning my-4">Voltar</a>
          <hr style="border-color: black;" >
          <div style="text-align: center;" ><a   href="index.php?pg=cadastrarrecepsionista" type="submit" class=" "><strong>Cadastro de Recepcionista</strong></a> </div>
        </form>
      </div>
    </div>
  </div>










  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="app/painelAdm/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="app/painelAdm/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="app/painelAdm/dist/js/adminlte.min.js"></script>