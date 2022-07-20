<?php

namespace App\Controllers\Laporan;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;

use Config\Database;
use Config\AppHelper;

use App\Models\Karyawan\KaryawanModel;

class LaporanController extends BaseController
{
    protected $prefixView = 'pages/laporan';

    public function __construct()
    {
        $this->karyawan = new KaryawanModel();
    }

    public function index()
    {
        try
        {
            return view("{$this->prefixView}/index", [
                'karyawan' => $this->karyawan->findAll()
            ]);
        }
        catch (\Throwable $th)
        {
            print_r($th->getMessage()); die();
        }
    }
}