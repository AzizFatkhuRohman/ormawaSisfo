<?=$this->extend("/layout/layout")?>
<?=$this->section('main')?>
<div class='container'>
  <?php if (session('errors.judul')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.judul') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.penulis')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.penulis') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.gambar')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.gambar') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.deskripsi')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.deskripsi') ?>
            </div>
            <?php endif; ?>
            <?php if (session('message')) {
                echo "<script>
                Swal.fire({
                    title: 'Galeri',
                    text: 'Berhasil di unggah',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                </script>";
            } ?>
            <?php if (session('messageEdit')) {
                echo "<script>
                Swal.fire({
                    title: 'Galeri',
                    text: 'Berhasil di edit',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                </script>";
            } ?>
<div class='row mt-4'>
<h5 class="card-header">Data galeri</h5>
<div class="card">
    <!-- Button trigger modal -->
<div class='mt-2'>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Unggah galeri
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Unggah galeri</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <form method="post" enctype="multipart/form-data">
        <?=csrf_field()?>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Penulis</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='penulis'>
        </div>
     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='judul'>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="exampleFormControlInput1" name='gambar'>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='deskripsi'></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
  <div class="card-body table-responsive">
  <table class="table table-striped" id='myTable'>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Penulis</th>
      <th scope="col">Judul</th>
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
      <td><?=$d['penulis']?></td>
      <td><?=$d['judul']?></td>
      <td>
       <div class='d-flex'>
       <div style="margin-right:2px">
       <a class='btn btn-primary btn-sm' href="<?=base_url('/detailGaleri/'.$d['idGaleri'])?>">
        Detail
      </a>
       </div>
       <div style="margin-right:2px">
       <a class='btn btn-primary btn-sm' href="<?=base_url('/editGaleri/'.$d['idGaleri'])?>">
        Edit
      </a>
       </div>
       <div>
       <a class='btn btn-primary btn-sm hapus' href="<?=base_url('/hapusGaleri/'.$d['idGaleri'])?>">
        Hapus
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
    $(document).on('click', '.hapus', function (e){
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
        title: 'Apakah anda',
        text: "ingin hapus data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
        if (result.value) {
            document.location.href = href
        }
        })
            })
</script>
<script>
    let table = new DataTable('#myTable');
</script>
</div>
<?=$this->endSection();?>