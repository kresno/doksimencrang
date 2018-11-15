<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>
      <?php echo $this->config->item('title'); ?>
    </title>
    <meta name="description" content="Lates Updates adn statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS From Admin Template -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/admin/images/favicon.ico">

    <!-- My Own CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/myown.css">

    <!-- DATA TABLE -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/datatable/dataTables/css/dataTables.bootstrap.css">
    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>public/jquery/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>public/datatable/dataTables/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap Javascript -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>public/datatable/dataTables/js/dataTables.bootstrap.js"></script>
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
