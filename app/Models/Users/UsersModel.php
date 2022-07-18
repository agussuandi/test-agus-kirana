<?php

namespace App\Models\Users;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'm_users';
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