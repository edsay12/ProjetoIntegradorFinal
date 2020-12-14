<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- links da navbar topo -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- formulario de pesquisa topo -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="pesquisar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- mantem tudo no lugar -->
    <ul class="navbar-nav ml-auto">


      <!-- icones da navbar topo -->

      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
                  <a class="nav-link"  href="cpanel.php?pg=sair" >
                      <i class="fas fa-arrow-left"></i>
                  </a>
              </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-1">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-2 py-2 mb-2 d-flex">
        <div class="image">
          <img src="app/painelAdm/dist/img/avatar5.png" class="img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["usuario"]    ?></a>

        </div>
      </div>
      <!-- barra de pesquisa -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Buscar">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item    <?php echo (($_GET['pg'] == 'agenda') ? 'bg-primary' : ''); ?>">
            <a href="?pg=agenda" class="nav-link">
              <i class="far icon-book_online nav-icon"></i>
              <p>Agenda</p>
            </a>
          </li>
          <li class="nav-item  <?php echo (($_GET['pg'] == 'marcaçoes') ? 'bg-primary' : ''); ?>  ">
            <a href="?pg=marcaçoes" class="nav-link">
              <i class="far icon-article nav-icon"></i>
              <p>Marcações</p>
            </a>
          </li>
           <li class="nav-item  <?php echo (($_GET['pg'] == 'solicitaçaocontato') ? 'bg-primary' : ''); ?>  ">
            <a href="?pg=solicitaçaocontato" class="nav-link">
              <i class="far icon-pending_actions nav-icon"></i>
              <p>Solicitações de Marcação</p>
            </a>
          </li>
          <li class="nav-item   <?php echo (($_GET['pg'] == 'pacientes') ? 'bg-primary' : ''); ?> ">
            <a href="?pg=pacientes" class="nav-link">
              <i class="far icon-person_add_alt_1 nav-icon"></i>
              <p>Pacientes</p>
            </a>
          </li>
          <li class="nav-item   <?php echo (($_GET['pg'] == 'profissionais') ? 'bg-primary' : ''); ?>  ">
            <a href="?pg=profissionais" class="nav-link">
              <i class="far icon-groups nav-icon"></i>
              <p>Profissionais</p>
            </a>
          </li>

          
          <li class="nav-item  <?php echo (($_GET['pg'] == 'cadastrodeespecialidades') ? 'bg-primary' : ''); ?>  ">
            <a href="?pg=cadastrodeespecialidades" class="nav-link">
              <i class="far icon-psychology nav-icon"></i>
              <p>Cadastro de especialidades</p>
            </a>
          </li>
         
          <li class="nav-item  <?php echo (($_GET['pg'] == 'planodesaude') ? 'bg-primary' : ''); ?>  ">
            <a href="?pg=planodesaude" class="nav-link">
              <i class="far icon-ballot nav-icon"></i>
              <p>Planos de Saúde</p>
            </a>
          </li>
          
















        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>