<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use Config\Database;

use App\Models\Users\UsersModel;
use App\Models\Jabatan\JabatanModel;

class UserController extends BaseController
{
    protected $prefixView = 'pages/user';

    public function __construct()
    {
        $this->users   = new UsersModel();
        $this->jabatan = new JabatanModel();
    }
    
    public function index()
    {
        try
        {
            return view("{$this->prefixView}/index", [
                'users' => $this->users->findAll()
            ]);
        }
        catch (\Throwable $th)
        {
            print_r($th->getMessage()); die();
        }
    }

    public function show($id)
    {
        try
        {
            return view("{$this->prefixView}/detail", [
                'user' => $this->users->find($id)
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
            return view("{$this->prefixView}/update", [
                'user'    => $this->users->find($id),
                'jabatan' => $this->jabatan->findAll()
            ]);
        }
        catch (\Throwable $th)
        {
            print_r($th->getMessage()); die();
        }
    }

    public function update($id)
    {
        try
        {
            $data = [
                'nik'       => $this->request->getPost('nik'),
                'username'  => $this->request->getPost('username'),
                'role_id'   => $this->request->getPost('role')
            ];

            $this->users->update($id, $data);

            return redirect()->to(base_url('user'))->with('success', 'Berhasil mengubah data');
        }
        catch (\Throwable $th)
        {
            return redirect()->to(base_url('user'))->with('warning', 'Gagal mengubah data');
        }
    }
}
