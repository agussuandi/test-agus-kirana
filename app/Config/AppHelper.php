<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

use App\Models\Users\UsersModel;
use App\Models\Jabatan\JabatanModel;

class AppHelper extends BaseConfig
{
    public static function codeUserInc(): string
    {
        $user = new UsersModel();
        $userData = $user->select('code_user')
            ->orderBy('id', 'desc')
        ->first();
        
        $lastCode = $userData ? sprintf("%05s", $userData['code_user'] + 1) : '00001';

        return $lastCode; 
    }

    public static function codeJabatanInc(): string
    {
        $jabatan = new JabatanModel();
        $jabatanData = $jabatan->select('code_role')
            ->orderBy('id', 'desc')
        ->first();
        
        $lastCode = $jabatanData ? sprintf("%03s", $jabatanData['code_role'] + 1) : '001';

        return $lastCode; 
    }
}