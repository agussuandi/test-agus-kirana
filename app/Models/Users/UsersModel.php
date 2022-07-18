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
    
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'nik', 'role_id'];

    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public static function getRole($id): string
    {
        $jabatan = new JabatanModel();
        $jabatan = $jabatan->find($id);

        return $jabatan['name'] ?? '-';
    }
}