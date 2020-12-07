<div class="container-fluid table-light">
  <div class="container">
    <nav class="navbar  navbar-expand-lg navbar-info">
      <img src="https://placehold.it/70x70" alt="" class="rounded-circle p-2">
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link <?php echo (($_GET['pg'] == 'inicial') ? 'btn py-2 btn-outline-primary' : ''); ?>" href="index.php?pg=inicial"> <span class=""> </span> Inicial </a></li>
          <li class="nav-item active">
            <a class="nav-link <?php echo (($_GET['pg'] == 'sobre') ? 'btn py-2 btn-outline-primary' : ''); ?>" href="index.php?pg=sobre"><span class=""></span>Sobre</a></li>
          <li class="nav-item active">
            <a class="nav-link <?php echo (($_GET['pg'] == 'contato') ? 'btn py-2 btn-outline-primary' : ''); ?>" href="index.php?pg=contato"> <span class=""> Contato</span></a></li>
          <li class="nav-item active">
            <a class="nav-link <?php echo (($_GET['pg'] == 'servicos') ? 'btn py-2 btn-outline-primary' : ''); ?>" href="index.php?pg=servicos"> <span class="">Serviços</span></a></li>
        </ul>



        <?php

        if (isset($_SESSION[''])) { ?>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="bre-user"></span> Login
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-danger" href="#"><span class="bre-exit"></span> Sair</a>
              </div>
            </li>
          </ul>
        <?php
        } else { ?>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link btn btn-outline-primary" href="cpanel.php">Administração</a>
            </li>
          </ul>
        <?php
        }
        ?>
      </div>
    </nav>
  </div>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://placehold.it/1140x250" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://placehold.it/1140x250" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://placehold.it/1140x250" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://placehold.it/1140x250" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://placehold.it/1140x250" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://placehold.it/1140x250" class="d-block w-100" alt="...">
    </div>
  </div>
</div>