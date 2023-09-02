<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokumenModel;
use App\Models\GaleriModel;
use App\Models\PengaduanModels;
class Admin extends BaseController
{
    protected $session;
    public function __construct(){
        $this->session = service('session');
    }
    public function dashboard()
    {
        $title = 'Dashboard';
        $model = new PengaduanModels;
        $data = $model->orderBy('idPengaduan', 'desc')->limit(10)->findAll();
        $count = $model->countAllResults();
        $dokumen = new DokumenModel;
        $dataDokumen = $dokumen->countAllResults();
        $modelGaleri = new GaleriModel;
        $galeri = $modelGaleri->countAllResults();
        return view('admin/dashboard', compact('title','data','count','dataDokumen','galeri'));
    }
    public function detailPengaduan($idPengaduan)
    {
        $model = new PengaduanModels;
        $title = 'Detail Pengaduan';
        $data = $model->find($idPengaduan);
        return view('admin/detailPengaduan', compact('title','data'));
    }
    public function galeri()
    {
        $title = 'Galeri';
        $model = new GaleriModel;
        $data = $model->orderBy('idGaleri', 'desc')->findAll();
        return view('admin/galeri', compact('title','data'));
    }
    public function Postgaleri(){
        $rules = config('Validation')->registrationRules ?? [
            'penulis'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'penulis tidak boleh kosong'
                ],
            ],
            'judul'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Judul tidak boleh kosong'
                ],
            ],
            'deskripsi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Deskripsi tidak boleh kosong'
                ],
            ],
        ];
        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $model = new GaleriModel;
        $gambar = $this->request->getFile('gambar');
        $gambar->move(ROOTPATH . 'public/images');
        $model->insert([
            'penulis'=>$this->request->getPost('penulis'),
            'judul'=>$this->request->getPost('judul'),
            'gambar'=>$gambar->getName(),
            'deskripsi'=>$this->request->getPost('deskripsi')
        ]);
        return redirect()->back()->with('message', 'Berhasil unggah galeri');
    }
    public function detailGaleri($idGaleri){
        $title ='Detail Galeri';
        $model = new GaleriModel;
        $data = $model->find($idGaleri);
        return view('admin/detailGaleri', compact('title','data'));
    }
    public function editGaleri($idGaleri){
        $title = 'Edit galeri';
        $model = new GaleriModel;
        $data = $model->find($idGaleri);
        return view('admin/editGaleri', compact('title','data'));
    }
    public function PosteditGaleri($idGaleri){
        $rules = config('Validation')->registrationRules ?? [
            'penulis'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'penulis tidak boleh kosong'
                ],
            ],
            'judul'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Judul tidak boleh kosong'
                ],
            ],
            'deskripsi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Deskripsi tidak boleh kosong'
                ],
            ],
        ];
        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $model = new GaleriModel;
        $data = [
            'penulis'=>$this->request->getPost('penulis'),
            'judul'=>$this->request->getPost('judul'),
            'deskripsi'=>$this->request->getPost('deskripsi'),
        ];
        $model->update($idGaleri,$data);
        return redirect()->to('/galeri')->with('messageEdit', 'Berhasil edit galeri');
    }
    public function hapusGaleri($idGaleri){
        $model = new GaleriModel;
        $model->delete($idGaleri);
        return redirect()->to('/galeri');
    }
    public function laporanPengaduan(){
        $title ='Laporan pengaduan';
        $model = new PengaduanModels;
        $data = $model->orderBy('idPengaduan','desc')->findAll();
        return view('admin/laporanPengaduan', compact('title','data'));
    }
    public function dokumen(){
        $title ='Dokumen';
        $model = new DokumenModel;
        $data = $model->orderBy('idDokumen','desc')->findAll();
        return view('admin/dokumen', compact('title','data'));
    }
    public function Postdokumen(){
        $rules = config('Validation')->registrationRules ?? [
            'noSurat'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nomor surat tidak boleh kosong'
                ],
            ],
            'namaOrmawa'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama ormawa tidak boleh kosong'
                ],
            ],
            'kodeArsip'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Kode arsip tidak boleh kosong'
                ],
            ],
            'bulan'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Bulan tidak boleh kosong'
                ],
            ],
            'hal'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Hal tidak boleh kosong'
                ],
            ],
            'kepada'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Kepada tidak boleh kosong'
                ],
            ],
            'salam'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Salam tidak boleh kosong'
                ],
            ],
            'deskripsi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Deskripsi tidak boleh kosong'
                ],
            ],
            'penutup'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Penutup tidak boleh kosong'
                ],
            ],
        ];
        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $model = new DokumenModel;
        $model->insert([
            'noSurat'=>$this->request->getPost('noSurat'),
            'namaOrmawa'=>$this->request->getPost('namaOrmawa'),
            'kodeArsip'=>$this->request->getPost('kodeArsip'),
            'bulan'=>$this->request->getPost('bulan'),
            'lampiran'=>$this->request->getPost('lampiran'),
            'hal'=>$this->request->getPost('hal'),
            'kepada'=>$this->request->getPost('kepada'),
            'salam'=>$this->request->getPost('salam'),
            'deskripsi'=>$this->request->getPost('deskripsi'),
            'hariDanTanggal'=>$this->request->getPost('hariDanTanggal'),
            'pukul'=>$this->request->getPost('pukul'),
            'tempat'=>$this->request->getPost('tempat'),
            'penutup'=>$this->request->getPost('penutup'),
        ]);
        return redirect()->back()->with('message', 'Surat berhasil dibuat');
    }
    public function detailDokumen($idDokumen){
        $title = 'Detail Dokumen';
        $model = new DokumenModel;
        $data = $model->find($idDokumen);
        return view('admin/detailDokumen', compact('title','data'));
    }
}
