<?php

namespace App\Controllers\Karyawan;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;

use Config\Database;
use Config\AppHelper;

use App\Models\Users\UsersModel;
use App\Models\Jabatan\JabatanModel;
use App\Models\Karyawan\KaryawanModel;

class KaryawanController extends BaseController
{
    protected $prefixView = 'pages/karyawan';

    public function __construct()
    {
        $this->users = new UsersModel();
        $this->jabatan = new JabatanModel();
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

    public function create()
    {
        try
        {
            return view("{$this->prefixView}/create", [
                'users'   => $this->users->findAll(),
                'jabatan' => $this->jabatan->findAll()
            ]);
        }
        catch (\Throwable $th)
        {
            print_r($th->getMessage()); die();
        }
    }

    public function store()
    {
        try
        {
            $data = [
                'user_id'    => $this->request->getPost('user'),
                'gender'     => $this->request->getPost('gender'),
                'created_at' => date('Y-m-d H:i:s')
            ];

            $this->karyawan->insert($data);
            return redirect()->to(base_url('karyawan'))->with('success', 'Berhasil menambah data');
        }
        catch (\Throwable $th)
        {
            return redirect()->to(base_url('karyawan'))->with('warning', 'Gagal menambah data');
        }
    }

    public function show($id)
    {
        try
        {
            $karyawan = $this->karyawan->find($id);
            $user = $this->karyawan::getUser($karyawan['user_id']);
            $jabatan = \App\Models\Users\UsersModel::getRole($user['role_id']);

            return view("{$this->prefixView}/detail", [
                'user'     => $user,
                'jabatan'  => $jabatan,
                'karyawan' => $karyawan
            ]);
        }
        catch (\Throwable $th)
        {
            print_r($th->getMessage()); die();
        }
    }

    public function edit($id)
    {
        try
        {
            $karyawan = $this->karyawan->find($id);
            $user = $this->karyawan::getUser($karyawan['user_id']);
            $jabatan = \App\Models\Users\UsersModel::getRole($user['role_id']);

            return view("{$this->prefixView}/update", [
                'user'     => $user,
                'jabatan'  => $jabatan,
                'karyawan' => $karyawan
            ]);
        }
        catch (\Throwable $th)
        {
            print_r($th->getMessage()); die();
        }
    }
}