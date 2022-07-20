<?php

namespace App\Models\Karyawan;

use CodeIgniter\Model;

use App\Models\Users\UsersModel;

class KaryawanModel extends Model
{
    protected $table      = 'm_karyawan';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
    protected $allowedFields = ['user_id', 'gender'];

    public static function getUser($id)
    {
        $user = new UsersModel();
        $user = $user->find($id);

        return $user ?? false;
    }
}