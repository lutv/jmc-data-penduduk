<div class="modal fade bs-example-modal-xs" id="modal_kabupaten" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Pilih Provinsi</h4>
      </div>
      <div class="modal-body form">
        <form action="<?=base_url()?>home/laporan_kab" id="lap_kab" class="form-horizontal">
    <select class="form-control" name="id">
      <option value="">Semua Provinsi</option>
      <?php
         foreach ($provinsi as $rows) {
      ?>
      <option value="<?= $rows['provinsi_id'] ?>"><?= $rows['provinsi_nama'] ?></option>
      <?php 
       }
      ?>
    </select>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Print Laporan</button>
    </div>
  </form>
  </div>
</div>
</div>
<script src="<?=base_url()?>dist/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
  function lap_kab(){
     $('#modal_kabupaten').modal('show');
  }
</script>