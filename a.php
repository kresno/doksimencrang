<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>
      Sistem Informasi Dokumen Perencanaan    </title>
    <meta name="description" content="Lates Updates adn statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS From Admin Template -->
    <link rel="stylesheet" href="http://localhost/isian/public/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="http://localhost/isian/public/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/isian/public/admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="http://localhost/isian/public/admin/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="http://localhost/isian/public/admin/css/style.css">
    <link rel="shortcut icon" href="http://localhost/isian/public/admin/images/favicon.ico">

    <!-- My Own CSS -->
    <link rel="stylesheet" href="http://localhost/isian/public/css/myown.css">

    <!-- DATA TABLE -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="http://localhost/isian/public/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="http://localhost/isian/public/datatable/dataTables/css/dataTables.bootstrap.css">
    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="http://localhost/isian/public/jquery/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="http://localhost/isian/public/datatable/dataTables/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap Javascript -->
    <script type="text/javascript" language="javascript" src="http://localhost/isian/public/datatable/dataTables/js/dataTables.bootstrap.js"></script>
    <!-- DATA TABLE -->

    <!-- Panggil Fungsi -->
    <script type="text/javascript" charset="utf-8">
    	$(document).ready(function() {
    		$('.table-paginate').dataTable({
    			"paging":   true,
            	"ordering": false,
            	"info":     false,
            	"bFilter":  false,
    		});
    	});
    </script>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <div class="form-group">
                  <div class="logo">
                    <img src="http://localhost/isian/public/images/login-logo.png">
                    <h4 class="label">Sinkronisasi Kegiatan - RKPD 2020</h4>
                  </div>
                </div>
                <form method="POST" action="#">
                  <div class="form-group">
                    <label class="label">Email</label>
                    <div class="input-group">
                      <input type="text" name="email" class="form-control" placeholder="email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" name="password" class="form-control" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="http://localhost/isian/public/admin/vendors/js/vendor.bundle.base.js" type="text/javascript"></script>
    <script src="http://localhost/isian/public/admin/vendors/js/vendor.bundle.addons.js" type="text/javascript"></script>
    <script src="http://localhost/isian/public/admin/js/off-canvas.js" type="text/javascript"></script>
    <script src="http://localhost/isian/public/admin/js/misc.js" type="text/javascript"></script>
  </body>
</html>
