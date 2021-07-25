<?php

namespace App\Controllers;
use App\Models\WargaModel;

class Warga extends BaseController
{
	public function index()
	{
		$wargaModel = new \App\Models\WargaModel();
		$warga = $wargaModel->findAll();

		echo view('templates/header');
		echo view('warga/index', [
				'warga' => $warga
		]);
		echo view('templates/footer');

		//echo view('templates/header');
		//echo view('warga/index', $data);
		//echo view('templates/footer');
	}

	public function create()
    {
        helper('form');

        if($this->request->getMethod() == 'post'){
            $warga = [
							'nik' => $this->request->getPost('nik'),
							'nama' => $this->request->getPost('nama'),
							'kelamin' => $this->request->getPost('kelamin'),
							'alamat' => $this->request->getPost('alamat'),
							'no_rumah' => $this->request->getPost('no_rumah'),
							'status' => $this->request->getPost('status'),
            ];

            $wargaModel = new \App\Models\WargaModel();
            if($wargaModel->insert($warga)){
                session()->setFlashdata('success', 'Data berhasil disimpan');
                return redirect()->to('/warga/index');
            }

        }

        return view('warga/create');
    }

	public function update($id)
    {
        helper('form');

        $wargaModel = new \App\Models\WargaModel();
        $warga = $wargaModel->find($id);
        if(empty($warga)){
            session()->setFlashdata('error', 'Data tidak ditemukan');
            return redirect()->to('/warga/index');
        }

        if($this->request->getMethod() == 'post'){
            $warga = [
							'nik' => $this->request->getPost('nik'),
							'nama' => $this->request->getPost('nama'),
							'kelamin' => $this->request->getPost('kelamin'),
							'alamat' => $this->request->getPost('alamat'),
							'no_rumah' => $this->request->getPost('no_rumah'),
							'status' => $this->request->getPost('status'),
            ];

            if($wargaModel->update($id, $warga)){
                session()->setFlashdata('success', 'Data berhasil disimpan');
                return redirect()->to('/warga/index');
            }

        }

        return view('warga/update', [
            'warga' => $warga
        ]);
    }


		public function delete($id)
	    {
	        helper('form');

	        $wargaModel = new \App\Models\WargaModel();
	        if($wargaModel->delete($id)){
	            session()->setFlashdata('success', 'Data berhasil dihapus');
	            return redirect()->to('/warga/index');
	        }

	    }

}
