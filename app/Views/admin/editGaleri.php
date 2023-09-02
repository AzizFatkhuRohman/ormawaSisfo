<?=$this->extend("/layout/layout")?>
<?=$this->section('main')?>
<div class='container'>
<div class='row mt-4'>
<div class="card">
  <div class="card-header">
    Edit Galeri
  </div>
  <div class="card-body">
  <div>
    <img src="<?=base_url('images/'.$data['gambar'])?>" alt="...." width="300px" height="300px">
  </div>
  <form action="<?=base_url('/editGaleri/'.$data['idGaleri'])?>" method="post">
  <?=csrf_field()?>
  <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Penulis</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='penulis' value="<?=$data['penulis']?>">
        </div>
     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='judul' value="<?=$data['judul']?>">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='deskripsi'><?=$data['deskripsi']?></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class='btn btn-primary'>Submit</button>
        </div>
  </form>
  </div>
</div>
</div>
</div>
<?=$this->endSection();?>