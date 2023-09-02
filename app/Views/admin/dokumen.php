<?=$this->extend("/layout/layout")?>
<?=$this->section('main')?>
<div class='container'>
  <?php if (session('errors.noSurat')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.noSurat') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.namaOrmawa')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.namaOrmawa') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.kodeArsip')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.kodeArsip') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.bulan')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.bulan') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.hal')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.hal') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.kepada')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.kepada') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.salam')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.salam') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.deskripsi')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.deskripsi') ?>
            </div>
            <?php endif; ?>
            <?php if (session('errors.penutup')):?>
                <div class="alert alert-danger mt-3" role="alert">
                <?= session('errors.penutup') ?>
            </div>
            <?php endif; ?>
            <?php if (session('message')) {
                echo "<script>
                Swal.fire({
                    title: 'Dokumen',
                    text: 'Berhasil di buat',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                </script>";
            } ?>
<div class='row mt-4'>
<h5 class="card-header">Data dokumen</h5>
<div class="card">
    <!-- Button trigger modal -->
<div class='mt-2'>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Unggah dokumen
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Unggah dokumen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <form method="post" enctype="multipart/form-data">
        <?=csrf_field()?>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">noSurat</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name='noSurat' placeholder="01">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">namaOrmawa</label>
        <select class="form-select" aria-label="Default select example" name='namaOrmawa'>
        <option selected>Pilih salah satu</option>
        <option value="BEM">BEM</option>
        <option value="BLM">BLM</option>
        <option value="HIMASIIF">HIMASIIF</option>
        <option value="UKM">UKM</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">kodeArsip</label>
        <select class="form-select" aria-label="Default select example" name='kodeArsip'>
        <option selected>Pilih salah satu</option>
        <option value="II A1">II A1(BLM)</option>
        <option value="II A2">II A2(BEM)</option>
        <option value="II B">II B(HIMA)</option>
        <option value="II K">II K(UKM)</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Bulan</label>
        <select class="form-select" aria-label="Default select example" name='bulan'>
        <option selected>Pilih salah satu</option>
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
        <option value="IV">IV</option>
        <option value="V">V</option>
        <option value="VI">VI</option>
        <option value="VII">VII</option>
        <option value="VIII">VIII</option>
        <option value="IX">IX</option>
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">lampiran</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='lampiran' value="-">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">hal</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='hal' placeholder='Pemberitahuan'>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">kepada</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='kepada' placeholder='Rektor'>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Salam</label>
        <select class="form-select" aria-label="Default select example" name='salam'>
        <option selected>Pilih salah satu</option>
        <option value="Salam Mahasiswa">Salam Mahasiswa</option>
        <option value="Dengan Hormat">Dengan Hormat</option>
        <option value="Assalammuallaikum Wr Wb">Assalammuallaikum Wr Wb</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='deskripsi'></textarea>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Hari dan tanggal</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='hariDanTanggal' placeholder='Selasa, 09 Maret 2023'>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">pukul</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='pukul' placeholder='00:00 s/d selesai'>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">tempat</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name='tempat' placeholder='Kampus horizon'>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">penutup</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='penutup'></textarea>
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
      <th scope="col">Nomor Surat</th>
      <th scope="col">Nama Ormawa</th>
      <th scope="col">Kode Arsip</th>
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
      <td><?=$d['noSurat']?></td>
      <td><?=$d['namaOrmawa']?></td>
      <td><?=$d['kodeArsip']?></td>
      <td>
       <div class='d-flex'>
       <div style="margin-right:2px">
       <a class='btn btn-primary btn-sm' href="<?=base_url('/detailDokumen/'.$d['idDokumen'])?>">
        Detail
      </a>
       </div>
       <div style="margin-right:2px">
       <a class='btn btn-primary btn-sm' href="<?=base_url('/editDokumen/'.$d['idDokumen'])?>">
        Edit
      </a>
       </div>
       <div>
       <a class='btn btn-danger btn-sm hapus' href="<?=base_url('/hapusDokumen/'.$d['idDokumen'])?>">
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