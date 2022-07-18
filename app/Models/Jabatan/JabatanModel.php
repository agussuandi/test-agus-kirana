<?php

namespace App\Models\Jabatan;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table      = 'm_jabatan';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['name', 'email'];

    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}