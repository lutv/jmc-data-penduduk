<div class="container">
<form action="<?=base_url();?>home/simpan_Kabupaten" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Kabupaten</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Kabupaten" name="nama_kabupaten">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Provinsi</label>
    <select class="form-control" name="id_provinsi">
      <option value="">Nama Provinsi</option>
      <?php
         foreach ($provinsi as $rows) {
      ?>
      <option value="<?= $rows['provinsi_id'] ?>"><?= $rows['provinsi_nama'] ?></option>
      <?php 
       }
      ?>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Jumlah Penduduk</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Jumlah Penduduk" name="jml">
  </div>
  <button type="submit" class="btn btn-default btn-primary">TAMBAH KABUPATEN</button>
</form>
<br><br>
<br>
<div class="row">
  <form id="form2" action="<?=base_url();?>home/kabupaten" method="post">
  <div class="col-xs-3"><input type="text" class="form-control" name="search_nama" placeholder="Nama Tempat"></div>
  <div class="col-xs-3"><select class="form-control" name="search_prov">
    <option value="">Cari Provinsi</option>
     <?php
         foreach ($provinsi as $rows) {
      ?>
      <option value="<?= $rows['provinsi_id'] ?>"><?= $rows['provinsi_nama'] ?></option>
      <?php 
       }
      ?>
  </select></div>
  <div class="col-xs-3"><button type="submit" class="btn btn-default btn-flat">Filter</button></div>
</form>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <td><b>No</b></td>
      <td><b>Nama Kabupaten</b></td>
      <td><b>Nama Provinsi</b></td>
      <td><b>Jumlah Penduduk</b></td>
      <td><b>Aksi</b></td>
    </tr>
  </thead>
  <tbody>
    <?php 
      $no=1;
        foreach ($kabupaten as $row) {
    ?>
    <tr>
      <td><?=$no++; ?></td>
      <td><?= $row['kabupaten_nama'] ?></td>
      <td><?= $row['provinsi_nama'] ?></td>
      <td><?=$row['penduduk'] ?></td>
      <td><a href="<?=base_url() ?>home/lihat_kabupaten/<?= $row['kabupaten_id'] ?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-pencil"> </i></button></a>
        <a href="<?=base_url() ?>home/hapus_kabupaten/<?=$row['kabupaten_id'] ?>"><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove"> </i></button></a>
      </td>
    </tr>
    <?php
    } 
    ?>
  </tbody>
</table>
</div>