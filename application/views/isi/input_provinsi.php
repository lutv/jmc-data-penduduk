<div class="container">
<form action="<?=base_url();?>home/simpan_provinsi" method="post">
  <div class="form-group">
    <label for="nama_provinsi">Nama Provinsi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Fakultas" name="nama_provinsi">
  </div>
  </div>
  <button type="submit" class="btn btn-default">SIMPAN</button>
</form>
<br>
<br>
<br>  
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <td><b>No</b></td>
      <td><b>Nama Provinsi</b></td>
      <td><b>Aksi</b></td>
    </tr>
  </thead>
  <tbody>
    <?php 
      $no=1;
        foreach ($provinsi as $rows) {
    ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $rows['provinsi_nama'] ?></td>
      <td><a href="<?=base_url() ?>home/lihat_detail/<?= $rows['provinsi_id'] ?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-pencil"> </i></button></a>
        <a href="<?=base_url() ?>home/hapus_provinsi/<?= $rows['provinsi_id'] ?>"><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove"> </i></button></a>
      </td>
    </tr>
    <?php
    } 
    ?>
  </tbody>
</table>
</div>