<div class="container">
  <h2>UPDATE PROVINSI</h2>
<form action="<?=base_url();?>home/update_provinsi" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Provinsi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_provinsi" value="<?=$provinsi['provinsi_nama'] ?>">
    <input type="hidden" class="form-control" id="exampleInputEmail1" name="id_provinsi" value="<?=$provinsi['provinsi_id'] ?>">
  </div>
  <button type="submit" class="btn btn-default">UPDATE</button>
</form>
</div>