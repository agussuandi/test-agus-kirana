<?php

namespace App\Models\Server;

use CodeIgniter\Model;

use App\Models\Jabatan\JabatanModel;

class ServerModel extends Model
{
    protected $table      = 'm_server';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
    protected $allowedFields = ['server_name', 'server_ip'];
}