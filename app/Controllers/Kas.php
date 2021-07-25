<?php

namespace App\Controllers;
use App\Models\WargaModel;
use App\Models\IuranModel;

class Kas extends BaseController
{
    public function __construct()
    {
        $this->iuranModel = new IuranModel();
        $this->wargaModel = new WargaModel();
    }

	public function index()
	{
        helper('number');

        $data = [
            'iuran' => $this->iuranModel->getLaporan(),
            'warga' => $this->wargaModel->findAll()
        ];
		echo view('templates/header');
		echo view('kas/index', $data);
		echo view('templates/footer');
	}

    

}
