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
    
    protected $allowedFields = ['name', 'code_jabatan'];
}