<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Data Penduduk Perprovinsi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url()?>dist/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Data Penduduk
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Provinsi</th>
              <th>Jumlah Penduduk</th>
            </tr>
            </thead>
            <tbody>
              <?php 
              $no=1;
              foreach($provinsi as $rows){
              ?>
            <tr>
              <td><?=$no++ ?></td>
              <td><?= $rows['provinsi_nama'] ?></td>
              <td><?= $rows['jumlah'] ?></td>
            </tr>
          <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
    <div class="row">
      <!-- /.col -->
      <div class="col-xs-6 pull-right">
        <p class="lead"><?= date('d M Y')?></p>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
