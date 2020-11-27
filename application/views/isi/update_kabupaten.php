<div class="container">
  <h2>UPDATE PRODI</h2>
<form action="<?=base_url();?>home/update_kabupaten" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Kabupaten</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Kabupaten" value="<?=$kabupaten['kabupaten_nama']?>" name="nama_kabupaten">
    <input type="hidden" class="form-control" placeholder="Masukkan Nama Kabupaten" value="<?=$kabupaten['kabupaten_id']?>" name="id_kabupaten">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Provinsi</label>
    <select class="form-control" name="id_provinsi">
      <?php
         foreach ($provinsi as $rows) {
      ?>
      <option value="<?= $rows['provinsi_id'] ?>" <?php if($kabupaten['provinsi_id']==$rows['provinsi_id'])echo "selected" ?>><?= $rows['provinsi_nama'] ?></option>
      <?php 
       }
      ?>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Jumlah Penduduk</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Jumlah Penduduk" value="<?=$kabupaten['penduduk']?>" name="jml">
  </div>
  <button type="submit" class="btn btn-default btn-success">UPDATE</button>
</form>
</div>