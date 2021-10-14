<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Form Helpdesk">
    <meta name="author" content="BSID">
    <link rel="icon" href="https://setjen.mpr.go.id/img/setjen-min.png">
    <title>Formulir</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="background">
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <img src="assets/img/logo.png" style="width:72px;" class="pull-left">
        <h1 class="text-uppercase">LAYANAN HELPDESK SEKRETARIAT JENDERAL MPR RI</h1>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-body">
              <br>
              <h2>Formulir Layanan</h2>
              <br>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group form-group-lg">
                      <label>Nama Pemohon <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" placeholder="Text input">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-group-lg">
                      <label>No Telp/ Whatsapp <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" placeholder="Text input">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-group-lg">
                      <label>Unit/ Bagian <span class="text-danger">*</span></label>
                      <select class="form-control">
                        <option>Sekretaris Jenderal</option>
                        <option>Bagian Sekretariat Ketua MPR RI</option>
                        <option>Bagian Lain-Lain</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-group-lg">
                      <label>Lokasi/ Ruangan <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" placeholder="Text input">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-group-lg">
                      <label>Subyek dan Deskripsi <span class="text-danger">*</span></label>
                      <select class="form-control">
                        <option>Koneksi Internet / LAN</option>
                        <option>Instalasi Baru / Kabel LAN</option>
                        <option>Aplikasi Penunjang Kinerja</option>
                        <option>Email</option>
                        <option>Printer</option>
                        <option>Virus / Antivirus</option>
                        <option>Lain-Lain</option>
                      </select>
                      <br>
                      <textarea class="form-control" rows="3" placeholder="Text input"></textarea>
                    </div>
                  </div>
                </div>
              </form>
              <br>
              <p>
                <button type="button" class="btn btn-primary btn-lg text-uppercase" onclick="location.href='sent.html';" >Kirim Formulir</button>
              </p>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default address">
            <div class="panel-body">
              <br>
              <h4>Keterangan</h4>
              <br>
              <div class="well well-sm">
                <ul>
                  <li>Isi formulir dengan baik agar jelas informasinya</li>
                  <li>Permohonan diselesaikan oleh Bagian Sistem Informasi dan Data berdasarkan urutan antrian</li>
                  <li>Formulir wajib di isi, untuk memudahkan dalam pendataan</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default address">
            <div class="panel-body">
              <a href="https://api.whatsapp.com/send?phone=622157895285" target="_blank">
                <h3>
                  <span class="glyphicon glyphicon-phone purple" aria-hidden="true"></span> &nbsp; +62 21-5789-5285
                </h3>
              </a>
            </div>
          </div>
          <p>
            <button type="button" class="btn btn-default btn-block text-uppercase" onclick="location.href='queue.html';">Lihat Laporan</button>
          </p>
          <br>
          <h5 class="text-center">
            <a href="index.html">Kembali ke Beranda</a>
          </h5>
        </div>
      </div>
      <!-- Site footer -->
      <br>
      <footer class="footer">
        <p>&copy; 2021 Bharana Sistem, ID</p>
      </footer>
      <br>
    </div>
    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>