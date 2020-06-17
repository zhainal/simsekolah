<?php
if(!$this->session->userdata('id')) {
  redirect(base_url().'admin');
}
?>

<section class="content-header">
  <div class="content-header-left">
    <h1>Guru Mapel</h1>
  </div>
  <div class="content-header-right">
    <a href="<?php echo base_url(); ?>admin/guru_mapel/form/tambah" class="btn btn-primary btn-sm">Tambah</a>
  </div>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-12">
      <?php
      if($this->session->flashdata('error')) {
        ?>
        <div class="callout callout-danger">
          <p><?php echo $this->session->flashdata('error'); ?></p>
        </div>
        <?php
      }
      if($this->session->flashdata('success')) {
        ?>
        <div class="callout callout-success">
          <p><?php echo $this->session->flashdata('success'); ?></p>
        </div>
        <?php
      }
      ?>
      <div class="box box-info">
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Kode Mapel</th>
                <th>Mata Pelajaran</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tahun Mapel</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
              foreach ($semua as $row) {
                $i++;
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$row['kodemapel']; ?></td>
                  <td><?=$row['mapel']; ?></td>
                  <td><?=$row['NIK']; ?></td>
                  <td><?=$row['Nama']; ?></td>
                  <td><?=$row['tahunmapel']; ?></td>
                  <td>
                    <a href="<?=base_url('admin/guru_mapel/form/'.$row["idgurumapel"])?>" onclick="klikUbah(this.id)" id="btnUbah<?=$i?>" class="btn btn-primary btn-xs">Ubah</a>
                    <a onclick='konfirmasi("admin/guru_mapel/hapus/<?=$row['idgurumapel']?>", "Anda yakin ingin menghapus Guru Mata Pelajaran?")' href="#" class="btn btn-danger btn-xs">Hapus</a>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <script type="text/javascript">

    function klikUbah(id){
      var kelas = $('#'+id).data('kelas');
      var tingkat = $('#'+id).data('guru');
      var ket = $('#'+id).data('ket');
      var id = $('#'+id).data('id');
      var action = '<?=base_url("admin/wali_kelas/proses/")?>'+id;
      $('#kelas').val(kelas);
      $('#tingkat').val(tingkat);
      $('textarea[name="ket"]').html(ket);
      $('#formAuto').attr('action', action);
      $('#simpan').html('Ubah');
      $('#batal').show();
    }

    $('#batal').click(function(){
      var action = '<?=base_url("admin/wali_kelas/proses/")?>';
      $('textarea[name="ket"]').html("");
      $('#formAuto').attr('action', action);
      $('#simpan').html('Tambah');
      $('#batal').hide();
    });
    </script>
