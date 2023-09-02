<?=$this->extend("/layout/layout")?>
<?=$this->section('main')?>
<div class='container'>
    <div class='mt-3'>
        <button class='btn btn-primary'>Cetak</button>
    </div>
<div class="card mt-2">
  <div class='d-flex'>
 <?php
 if ($data['namaOrmawa'] == "BLM") {
    echo '<div>
    <img src="" alt="......">
    </div>
    <div class="card-header text-center">
    <h5>BADAN LEGISLATIF MAHASISWA<br>FTIK HORIZON UNIVERSITY INDONESIA</h5>
    <span>Jl. Pangkal Perjuangan By Pass No.KM.1, Tanjungpura, Kec. Karawang Bar., Karawang, Jawa Barat 41316</span>
    </div>';
 } elseif($data['namaOrmawa'] == "BEM") {
    echo '<div>
    <img src="" alt="......">
    </div>
    <div class="card-header text-center">
    <h5>BADAN EKSEKUTIF MAHASISWA<br>FTIK HORIZON UNIVERSITY INDONESIA</h5>
    <span>Jl. Pangkal Perjuangan By Pass No.KM.1, Tanjungpura, Kec. Karawang Bar., Karawang, Jawa Barat 41316</span>
    </div>';
 }elseif($data['namaOrmawa'] == "HIMA"){
    echo '<div>
    <img src="" alt="......">
    </div>
    <div class="card-header text-center">
    <h5>HIMASIIF<br>FTIK HORIZON UNIVERSITY INDONESIA</h5>
    <span>Jl. Pangkal Perjuangan By Pass No.KM.1, Tanjungpura, Kec. Karawang Bar., Karawang, Jawa Barat 41316</span>
    </div>';
 }
 
 ?>
  </div>
  <div>
    <hr style="border: 2px; color:black;
        height: 5px;">
 </div>
  <div class="card-body">

  </div>
</div>
</div>
<?=$this->endSection();?>