<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use Config\Database;

use App\Models\Users\UsersModel;

class UserController extends BaseController
{
    protected $prefixView = 'pages/user';

    public function __construct()
    {
        $this->users = new UsersModel();
    }
    
    public function index()
    {
        try
        {
            print_r($this->users->select('id')->findAll()); die();
            return view("{$this->prefixView}/index", [
                'users' => $this->users->findColumn('id')
            ]);
        }
        catch (\Throwable $th)
        {
            print_r($th->getMessage()); die();    
        }
    }
}
