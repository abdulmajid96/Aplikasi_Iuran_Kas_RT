<?php

namespace App\Controllers;
use App\Models\WargaModel;
use App\Models\IuranModel;

class Iuran extends BaseController
{
    public function __construct()
    {
        $this->iuranModel = new IuranModel();
        $this->wargaModel = new WargaModel();
    }

	public function index()
	{
        helper('number');
		$iuran = $this->iuranModel->getLaporan();
        $warga = $this->wargaModel->findAll();
        $data = [
            'iuran' => $iuran,
            'warga' => $warga
        ];

		echo view('templates/header');
		echo view('iuran/index', $data);
		echo view('templates/footer');
	}

	public function create()
    {
        helper('form');
        if($this->request->getMethod() == 'post'){
            $data = [
                            'keterangan' => $this->request->getPost('keterangan'),
							'tanggal' => $this->request->getPost('tanggal'),
							'bulan' => $this->request->getPost('bulan'),
							'tahun' => $this->request->getPost('tahun'),
							'jumlah' => $this->request->getPost('jumlah'),
                            'warga_id' => $this->request->getPost('warga_id'),
            ];
            $iuranModel = new \App\Models\IuranModel();
            if($iuranModel->insert($data)){
                session()->setFlashdata('success', 'Data berhasil disimpan');
                return redirect()->to('/iuran/index');
            }
        }
        $iuran = $this->iuranModel->getLaporan();
        $warga = $this->wargaModel->findAll();
        $data = [
            'iuran' => $iuran,
            'warga' => $warga
        ];
        return view('iuran/create',$data);

    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->iuranModel->delete($id)) {
            redirect(site_url('iuran/index'));
        }
    }

}
