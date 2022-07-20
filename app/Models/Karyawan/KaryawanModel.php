<?php

namespace App\Models\Karyawan;

use CodeIgniter\Model;

use App\Models\Users\UsersModel;
use App\Models\Jabatan\JabatanModel;

class KaryawanModel extends Model
{
    protected $table      = 'm_karyawan';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
    protected $allowedFields = ['user_id', 'gender', 'jabatan_id', 'created_at'];

    public static function getUser($id)
    {
        $user = new UsersModel();
        $user = $user->find($id);

        return $user ?? false;
    }

    public static function getJabatan($id): string
    {
        $jabatan = new JabatanModel();
        $jabatan = $jabatan->find($id);

        return $jabatan['name'] ?? '-';
    }
}