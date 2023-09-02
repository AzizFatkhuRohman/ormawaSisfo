<?php

namespace App\Controllers;
use App\Models\PengaduanModels;
class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function form_pengaduan()
    {
        $model = new PengaduanModels();
        $model->insert([
            'nama'=> $this->request->getPost('nama'),
            'email'=> $this->request->getPost('email'),
            'noWhatsapp'=> $this->request->getPost('noWhatsapp'),
            'tujuan'=> $this->request->getPost('tujuan'),
            'pesan'=> $this->request->getPost('pesan')
        ]);
        return redirect()->to('/');
    }
    public function galeriBLM()
    {
        return view('galeriBLM');
    }
    public function galeriBEM()
    {
        return view('galeriBEM');
    }
    public function galeriHIMA()
    {
        return view('galeriHIMA');
    }
}
