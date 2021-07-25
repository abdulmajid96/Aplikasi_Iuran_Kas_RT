<?php

namespace App\Controllers;
use App\Models\WargaModel;
use App\Models\IuranModel;

class Tagihan extends BaseController
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
            'iuran' => $this->iuranModel->tagihan(),
            'warga' => $this->wargaModel->findAll()
        ];

		echo view('templates/header');
		echo view('tagihan/index', $data);
		echo view('templates/footer');
	}

    

}
