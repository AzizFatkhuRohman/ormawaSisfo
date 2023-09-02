<?=$this->extend("/layout/layout")?>
<?=$this->section('main')?>
<div class='container'>
<div class='row mt-4'>
<h5 class="card-header">Data pengaduan</h5>
<div class="card">
  <div class="card-body table-responsive">
  <table class="table table-striped" id='myTable'>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($data as $d){
    ?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td><?=$d['nama']?></td>
      <td><?=$d['email']?></td>
      <td> <?php
        if ($d['tujuan'] == 'BEM'){
          echo '<button class="btn btn-outline-danger">BEM</button>';
        }elseif ($d['tujuan'] == 'BLM') {
          echo '<button class="btn btn-outline-warning">BLM</button>';
        }elseif ($d['tujuan'] == 'HIMA') {
          echo '<button class="btn btn-outline-success">HIMA</button>';
        }
        ?></td>
      <td>
       <div class='d-flex'>
       <div style="margin-right:2px">
       <a class='btn btn-primary btn-sm' href="<?=base_url('/detailPengaduan/'.$d['idPengaduan'])?>">
        Detail
      </a>
       </div>
       </div>
      </td>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>
  </div>
</div>
</div>
<script>
    let table = new DataTable('#myTable');
</script>
</div>
<?=$this->endSection();?>