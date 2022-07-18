<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Menu extends BaseConfig
{
    public static function getMenu(): array
    {
        return [
            [
                'name'  => 'Laporan',
                'url'   => '/laporan',
                'class' => 'bi bi-grid'
            ],
            [
                'name'  => 'User',
                'url'   => '/user',
                'class' => 'bi bi-person'
            ],
            [
                'name'  => 'Karyawan',
                'url'   => '/karyawan',
                'class' => 'bi bi-file-person'
            ],
            [
                'name'  => 'Jabatan',
                'url'   => '/jabatan',
                'class' => 'bi bi-grid'
            ]
        ];
    }
}