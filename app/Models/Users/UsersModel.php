<?php

namespace App\Models\Users;

use CodeIgniter\Model;

use App\Models\Jabatan\JabatanModel;

class UsersModel extends Model
{
    protected $table      = 'm_users';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
    protected $allowedFields = ['name', 'username', 'code_user', 'nik', 'role'];

    public static function getJabatan($id): string
    {
        $jabatan = new JabatanModel();
        $jabatan = $jabatan->find($id);

        return $jabatan['name'] ?? '-';
    }
}