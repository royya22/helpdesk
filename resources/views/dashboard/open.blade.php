
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://setjen.mpr.go.id/img/setjen-min.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/offcanvas/">

    <title>Tiket Open</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/offcanvas.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="dashboard">

    @section('menu')
      <?php $menu = "open"; ?>
    @endsection
    
    @include('dashboard.header')

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-left">

        @include('dashboard.menu')

        <div class="col-xs-12 col-sm-9">
          <p class="visible-xs">
            <button type="button" class="btn btn-primary" data-toggle="offcanvas">Menu</button>
          </p>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-danger address">
                <br>
                <div class="panel-heading">
                  <h3 class="panel-title">Open</h3>
                </div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="col-xs-1">ID Form</th>
                          <th class="col-xs-2">Tanggal Laporan</th>
                          <th class="col-xs-3">Nama dan Tempat</th>
                          <th class="col-xs-4">Subjek dan Keluhan</th>
                          <th class="col-xs-2">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $data)
                          <tr>
                            <th scope="row">{{ $data->kode_permohonan }}</th>
                            <td>{{ $daftar_hari[date('l', strtotime($data->created_at))] }}, <br> {{ $data->created_at }}</td>
                            <td>
                              <b>{{ $data->nama_pemohon }}</b> <br> <small>{{ $data->unit }}</small>
                            </td>
                            <td>
                              <b>{{ $data->subjek }}</b> <br> <span>{{ $data->deskripsi }}</span>
                            </td>
                            <td>
                              <p>
                                <button type="button" class="btn btn-warning btn-xs" onclick="location.href='form-pending/{{ $data->id_laporan }}';">Pending</button>
                                <button type="button" class="btn btn-success btn-xs" onclick="location.href='form-close/{{ $data->id_laporan }}';">Close</button>
                              </p>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <nav aria-label="..." style="margin-bottom:-4px">
                    <ul class="pagination">
                      <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">??</span></a></li>
                      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#" aria-label="Next"><span aria-hidden="true">??</span></a></li>
                    </ul>
                  </nav>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div><!--/.col-xs-12.col-sm-9-->
      </div><!--/row-->
    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/jquery.min.js"><\/script>')</script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../assets/js/offcanvas.js"></script>
  </body>
</html>
