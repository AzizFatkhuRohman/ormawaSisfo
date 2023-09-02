<?=$this->extend("/layout/layout")?>
<?=$this->section('main')?>
<div class='container'>
<div class='row mt-4'>
<div class="card">
  <div class="card-header text-center">
  <h4><b><?=$data['judul']?></b></h4>
  <h6> Penulis: <?=$data['penulis']?></h6>
  </div>
  <div class="card-body d-flex">
  <div>
    <img src="<?=base_url('images/'.$data['gambar'])?>" alt="...." width="300px" height="300px">
  </div>
  <div style="margin-left:5px">
    <p><?=$data['deskripsi']?></p>
  </div>
  </div>
</div>
</div>
</div>
<?=$this->endSection();?>