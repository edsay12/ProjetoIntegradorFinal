<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

              <h1 class="m-0"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <a href="cpanel.php?pg=pacientes" class="btn btn-success">Pacientes</a>

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <link rel='stylesheet' href='app\painelAdm\calendario\fullcalendar\fullcalendar.css' />
      <script src='app\painelAdm\calendario\fullcalendar/lib/jquery.min.js'></script>
      <script src='app\painelAdm\calendario\fullcalendar/lib/moment.min.js'></script>
      <script src='app\painelAdm\calendario\fullcalendar/fullcalendar.js'></script>

      <!-- script de tradução -->
      <script src='app\painelAdm\calendario\fullcalendar/lang/pt-br.js'></script>

      <script>
        $(document).ready(function() {

          //CARREGA CALENDÁRIO E EVENTOS DO BANCO
          $('#calendario').fullCalendar({
            header: {
              left: 'prev,next today',
              center: 'title',
              right: ''
            },
            defaultDate: '2020-12-12',
            editable: true,
            eventLimit: true,
            events: 'app/painelAdm/calendario/eventos.php',
            eventColor: '#dd6777'
          });




          //CADASTRA NOVO EVENTO
          $('#novo_evento').submit(function() {
            //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
            var dados = jQuery(this).serialize();
            $.ajax({
              type: "POST",
              url: "app/painelAdm/calendario/cadastrar_evento.php",
              data: dados,
              success: function(data) {
                if (data == "1") {
                  alert("Cadastrado com sucesso! ");
                  //atualiza a página!
                  location.reload();
                } else {
                  alert("Houve algum problema.. ");
                }
              }
            });
            return false;
          });
        });
      </script>

      <style>
        #calendario {
          position: relative;
          width: 90%;
          margin: 0px auto;
        }
      </style>

      </head>

      <body>
        <div id='calendario'>

        </div>
    </div>
  </div>
</div>
</div>