<?=$this->extend("/layout/layout")?>
<?=$this->section('main')?>
<div class='container'>
<?php if (session('prosesPengaduan')) {
                echo "<script>
                Swal.fire({
                    title: 'Pengaduan',
                    text: 'Sedang di proses',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                </script>";
            } ?>
            <?php if (session('selesaiPengaduan')) {
                echo "<script>
                Swal.fire({
                    title: 'Pengaduan',
                    text: 'Sudah diselesaikan',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                </script>";
            } ?>
<div class='row mt-4'>
<div class="card">
  <div class="card-header">
    Detail pengaduan
  </div>
  <div class="card-body">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" value="<?=$data['nama']?>" disabled>
    </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" value="<?=$data['email']?>" disabled>
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nomor Whatsapp</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" value="<?=$data['noWhatsapp']?>" disabled>
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tujuan</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$data['tujuan']?>" disabled>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?=$data['pesan']?></textarea>
    </div>
    <div class="mb-3">
    <a href="https://wa.me/<?=$data['noWhatsapp']?>" class='btn btn-primary'>Assestment</a>
    </div>
  </div>
</div>
</div>
</div>
<?=$this->endSection();?>