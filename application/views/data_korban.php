
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Disaster Care</title>
    <link href="<?= base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.css');?>">
    <link href="<?= base_url('css/dasbor.css');?>" rel="stylesheet">
  </head>

  <body>
    <form role="form" method="post" action="<?= base_url('C_admin/masukkan');?>">
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Disaster Care</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= base_url('C_login/login');?>">Keluar</a>
        </li>
      </ul>
    </nav>
    

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('C_admin/tampil_data');?>">
                  <span data-feather="home"></span>
                  Utama <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('C_admin/masukkan');?>">
                  <span data-feather="users"></span>
                  Data Korban
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link accordion-toggle toggle-switch" data-toggle="collapse" href="#submenu-3">
                  <span data-feather="bar-chart-2"></span>
                  <span class="sidebar-title">Pengambilan Keputusan</span>
                  
                </a>
                  <ul id="submenu-3" class="panel-collapse collapse panel-switch">
                    <li><a class="nav-link" href="<?= base_url('C_logistik/tampilLogMak'); ?>">Makanan</a></li>
                    <li><a class="nav-link" href="<?= base_url('C_logistik/tampilLog'); ?>">Pakaian</a></li>
                    <li><a class="nav-link" href="<?= base_url('C_logistik/tampilLogObat'); ?>">Obat - obatan</a></li>
                  </ul>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">PENGUNGSI</h1>
          </div>
          
          <form action="<?php echo base_url('C_admin/masukkan');?>" method="post">
            <fieldset>
            <legend>Data Korban</legend>
        <div class="form-group col">
          <label>Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="form-group col">
          <label>Jenis Kelamin</label>
          <select class="form-control" id="jenisK" name="jenisK">
            <option value="" selected disabled>-Pilih-</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label>Usia</label>
          <input type="number" class="form-control" name="usia" placeholder="usia korban">
        </div>
        <div class="form-group col">
          <label>Gejala Awal</label>
          <input type="text" id="gej1" name="gej1" class="form-control" value="Demam"><br>
          <label>Gejala Kedua</label>
          <select class="form-control" name="gej2">
              <option value="nyeri">1. Nyeri Perut</option>
              <option value="bintik">2. Bintik - Bentik Merah</option>
              <option value="MKkuning">3. Mata dan kulit kekuningan</option>
              <option value="lain">4. Tidak Ada gejala</option>
          </select>
        </div>
        <input type="submit" class="btn btn-md btn-block" value="submit">
           
          </fieldset>
      </form><br>
      
      
      </main>
      </div>
    </div>
    </form>

    <script type="text/javascript" src="<?= base_url('jQuery/jquery-3.2.1.slim.min.js');?>"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url(' jQuery/jquery-3.2.1.slim.min.js');?>"><\/script>')</script>
    <script src="<?= base_url('jQuery/popper.min.js');?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('js/feather.min.js');?>"></script>
    <script>
      feather.replace()
    </script>
    <script src="<?= base_url('assets/js/jquery-1.10.2.js');?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/js/jquery.metisMenu.js');?>"></script>
    <script src="<?= base_url('assets/js/dataTables/jquery.dataTables.js');?>"></script>
    <script src="<?= base_url('assets/js/dataTables/dataTables.bootstrap.js');?>"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <script src="<?= base_url('assets/js/custom.js');?>"></script>
  </body>
</html>
