<?=$this->extend("/layout/layout")?>
<?=$this->section('main')?>
<div class='container'>
<div class="row mt-4" style='justify-content:center;'>
<div class="col-lg-3 mb-4 order-0">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="card-info">
            <p class="card-text">Data user</p>
            <div class="d-flex align-items-end mb-2">
              <h4 class="card-title mb-0 me-2">10</h4>
            </div>
          </div>
          <div class="card-icon">
            <span class="badge bg-label-primary rounded p-2">
              <i class="bx bx-trending-up bx-sm"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 mb-4 order-0">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="card-info">
            <p class="card-text">Data dokumen</p>
            <div class="d-flex align-items-end mb-2">
              <h4 class="card-title mb-0 me-2"><?=$dataDokumen?></h4>
            </div>
          </div>
          <div class="card-icon">
            <span class="badge bg-label-primary rounded p-2">
              <i class="bx bx-trending-up bx-sm"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 mb-4 order-0">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="card-info">
            <p class="card-text">Data galeri</p>
            <div class="d-flex align-items-end mb-2">
              <h4 class="card-title mb-0 me-2"><?= $galeri?></h4>
            </div>
          </div>
          <div class="card-icon">
            <span class="badge bg-label-success rounded p-2">
              <i class="bx bx-book-content bx-sm"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 mb-4 order-0">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="card-info">
            <p class="card-text">Data pengaduan</p>
            <div class="d-flex align-items-end mb-2">
              <h4 class="card-title mb-0 me-2"><?= $count?></h4>
            </div>
          </div>
          <div class="card-icon">
            <span class="badge bg-label-success rounded p-2">
              <i class="bx bx-book-content bx-sm"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class='row mt-4'>
<div class="card">
  <h5 class="card-header">Data pengaduan terbaru</h5>
  <div class="card-body table-responsive">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Tujuan</th>
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
        <a class='btn btn-primary btn-sm' href="<?=base_url('/detailPengaduan/'.$d['idPengaduan'])?>">
        Detail
      </a>
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
</div>
<?=$this->endSection();?>