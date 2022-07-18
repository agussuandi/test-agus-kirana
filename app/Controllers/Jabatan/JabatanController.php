<?php

namespace App\Controllers\Jabatan;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;

use Config\Database;
use Config\AppHelper;

use App\Models\Jabatan\JabatanModel;

class JabatanController extends BaseController
{
    protected $prefixView = 'pages/jabatan';

    public function __construct()
    {
        $this->jabatan = new JabatanModel();
    }

    public function index()
    {
        try
        {
            return view("{$this->prefixView}/index", [
                'jabatan' => $this->jabatan->findAll()
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
            return view("{$this->prefixView}/create");
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
                'code_role' => AppHelper::codeJabatanInc(),
                'name'      => $this->request->getPost('role')
            ];

            $this->jabatan->insert($data);
            return redirect()->to(base_url('jabatan'))->with('success', 'Berhasil menambah data');
        }
        catch (\Throwable $th)
        {
            echo $th->getMessage(); die();
            return redirect()->to(base_url('jabatan'))->with('warning', 'Gagal menambah data');
        }
    }

    public function show($id)
    {
        try
        {
            return view("{$this->prefixView}/detail", [
                'jabatan' => $this->jabatan->find($id)
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
                'jabatan' => $this->jabatan->find($id)
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
                'name' => $this->request->getPost('role')
            ];
            
            $this->jabatan->update($id, $data);
            return redirect()->to(base_url('jabatan'))->with('success', 'Berhasil mengubah data');
        }
        catch (\Throwable $th)
        {
            return redirect()->to(base_url('jabatan'))->with('warning', 'Gagal mengubah data');
        }
    }

    public function destroy($id)
    {
        try
        {
            $this->jabatan->delete($id);
            return redirect()->to(base_url('jabatan'))->with('success', 'Berhasil menghapus data');
        }
        catch (\Throwable $th)
        {
            return redirect()->to(base_url('jabatan'))->with('warning', 'Gagal menghapus data');
        }
    }
}