<?php

namespace App\Models\LogApi;

use CodeIgniter\Model;

use App\Models\Jabatan\JabatanModel;

class LogApiModel extends Model
{
    protected $table      = 'log_api';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
    protected $allowedFields = ['ip_user', 'created_at'];
}