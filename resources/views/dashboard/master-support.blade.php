
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

    <title>Master Teknisi</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/offcanvas.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="dashboard">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>Bharana System, ID <span class="badge">v2</span></b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <button type="button" class="btn btn-danger" onclick="location.href='../login.html';">Keluar</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="password.html">Ubah Kata Sandi</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="index.html" class="list-group-item">Beranda</a>
            <a href="open.html" class="list-group-item">Tiket Open <span class="badge">3</span></a>
            <a href="pending.html" class="list-group-item">Tiket Pending <span class="badge">10</span></a>
            <a href="close.html" class="list-group-item">Tiket Close <span class="badge">212</span></a>
          </div>
          <p class="text-muted">Insiden</p>
          <div class="list-group">
            <a href="insident.html" class="list-group-item">Catatan Insiden</a>
          </div>
          <p class="text-muted">Data Master</p>
          <div class="list-group">
            <a href="master-unit.html" class="list-group-item">Master Bagian</a>
            <a href="master-subject.html" class="list-group-item">Master Subjek</a>
            <a href="master-support.html" class="list-group-item active">Master Teknisi</a>
          </div>
        </div><!--/.sidebar-offcanvas-->

        <div class="col-xs-12 col-sm-9">
          <p class="visible-xs">
            <button type="button" class="btn btn-primary" data-toggle="offcanvas">Menu</button>
          </p>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default address">
                <br>
                <div class="panel-heading">
                  <h3 class="panel-title">Teknisi &nbsp; <small><a href="insident-detail.html"><span class="label label-info">+ Tambah Teknisi</span></a></small></h3>
                </div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID Teknisi</th>
                          <th>Nama Teknisi</th>
                          <th>Jan</th>
                          <th>Feb</th>
                          <th>Mar</th>
                          <th>Apr</th>
                          <th>Mei</th>
                          <th>Jun</th>
                          <th>Jul</th>
                          <th>Agu</th>
                          <th>Sep</th>
                          <th>Okt</th>
                          <th>Nov</th>
                          <th>Des</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr class="success">
                          <th colspan="2">Total</th>
                          <th>23</th>
                          <th>64</th>
                          <th>23</th>
                          <th>45</th>
                          <th>36</th>
                          <th>326</th>
                          <th>89</th>
                          <th>85</th>
                          <th>56</th>
                          <th>23</th>
                          <th>74</th>
                          <th>34</th>
                          <th>2342</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <th scope="row">XXI0921A</th>
                          <td>Nama</td>
                          <td>5</td>
                          <td>4</td>
                          <td>2</td>
                          <td>5</td>
                          <td>7</td>
                          <td>9</td>
                          <td>3</td>
                          <td>5</td>
                          <td>8</td>
                          <td>3</td>
                          <td>8</td>
                          <td>2</td>
                          <td>87</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p style="margin:0">
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> &nbsp; Cetak</button>
                  </p>
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
