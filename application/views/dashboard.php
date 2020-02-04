
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Disaster Care</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.css');?>">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('css/dasbor.css');?>" rel="stylesheet">
  </head>

  <body>
    <form role="form" method="post" action="<?= base_url('C_admin/beranda');?>">
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
                <a class="nav-link active" href="<?= base_url('C_admin/tampil_data');?>">
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
                <a class="nav-link accordion-toggle toggle-switch" data-toggle="collapse" href="#submenu-3">
                  <span data-feather="bar-chart-2"></span>
                  <span class="sidebar-title">Pengambilan Keputusan</span>
                </a>
                  <ul id="submenu-3" class="panel-collapse collapse panel-switch">
                    <li><a class="nav-link" href="#">Makanan</a></li>
                    <li><a class="nav-link" href="#">Pakaian</a></li>
                    <li><a class="nav-link" href="#">Obat - obatan</a></li>
                  </ul>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">PENGUNGSI</h1>
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
          </div>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
        </main>
      </div>
    </div>
    </form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="jQuery/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="jQuery/jquery-3.2.1.slim.min.js"><\/script>')</script>
    <script src="jQuery/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="js/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="js/chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "jum'at", "Sabtu"],
          datasets: [{
            data: [100, 29, 50, 60, 86, 200, 60],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
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
  </body>
</html>
