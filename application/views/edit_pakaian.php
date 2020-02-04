
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Disaster Care</title>
    <link href="<?= base_url ('css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url ('css/bootstrap.css');?>">
    <link href="<?= base_url ('css/dasbor.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/style.css');?>">
    <script type="text/javascript" src="<?= base_url('jquery-1.8.3.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('twd-menu.js');?>"></script>
    <link href="css/dasbor.css" rel="stylesheet">
  </head>

  <body>
    <form role="form" method="post" action="<?= base_url('C_logistik/tampilLog');?>">
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
                  Utama <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('C_admin/masukkan');?>">
                  <span data-feather="users"></span>
                  Data Korban
                </a>
              </li>
              <li>
                <a class="nav-link active accordion-toggle toggle-switch" data-toggle="collapse" href="#submenu-3">
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
            <h1 class="h2">PAKAIAN</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div><!-- 
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas> -->
          <h2>Data Pakaian</h2>
          <div class="table-responsive">
            <table class="table table-hover table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NAMA BARANG</th>
                  <th>JUMLAH BARANG</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($data as $v): ?>
                  <tr>
                    <td><?php echo $v["id_pakaian"]; ?></td>
                    <td><?php echo $v["nama_pakaian"]; ?></td>
                    <td><?php echo $v["jum_pakaian"]; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <a class="btn btn-primary btn-sm" href="<?= base_url('C_admin/editPakaian');?>">Edit</a>
        </main>
      </div>
    </div>
  </form>


    <script type="text/javascript" src="jQuery/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="jQuery/jquery-3.2.1.slim.min.js"><\/script>')</script>
    <script src="jQuery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script src="<?= base_url('assets/js/chart.min.js');?>"></script>
    <script>
      function chart() {
        var 
      }
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Pakaian Pria", "Pakaian Wanita", "Pakaian Anak", "Lain - lain"],
          datasets: [{
            data: [100, 29, 50, 60],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#7FFF00',
            borderWidth: 4,
            pointBackgroundColor: '#7FFF00'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
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
