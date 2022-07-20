<?php

namespace App\Controllers\API;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;

use Config\Database;
use Config\AppHelper;

use App\Models\LogApi\LogApiModel;
use App\Models\Server\ServerModel;

class CheckServerController extends BaseController
{
    public function __construct()
    {
        $this->logApi = new LogApiModel();
        $this->server = new ServerModel();
    }

    public function index()
    {
        try
        {
            if ((string)$_GET['username'] !== 'km' || (int)$_GET['password'] !== 1234)
            {
                return $this->response->setJSON([
                    'status'  => false,
                    'message' => 'Invalid username & password' 
                ]);
            }

            $data = [
                'ip_user'    => $_SERVER['REMOTE_ADDR'] ?? $_SERVER['REMOTE_HOST'],
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->logApi->insert($data);

            $serverDies = [];
            foreach ($this->server->findAll() as $key => $server)
            {
                if ((bool)random_int(0, 1))
                {
                    $serverDies[] = [
                        'serverIp'    => $server['server_ip'],
                        'serverName'  => $server['server_name'],
                        'message'     => "Server {$server['server_name']} sedang off",
                        'noHandphone' => "Mengirim SMS {$_GET['hp']}"
                    ];
                }
            }

            #Pak, ini saya tambahkan fungsi yang kurang mengecek melalui curl.
            $uri = 'http://sms.getway.com/send.php';
            if (!AppHelper::sendRequest($uri))
            {
                $serverDies[] = [
                    'serverIp'    => $uri,
                    'serverName'  => $uri,
                    'message'     => "Server {$uri} sedang off",
                    'noHandphone' => "Mengirim SMS {$_GET['hp']}"
                ];
            }
            
            return $this->response->setJSON([
                'status' => true,
                'data'   => $serverDies
            ]);
        }
        catch (\Throwable $th)
        {
            return $this->response->setJSON([
                'status' => false,
                'error'  => $th->getMessage()
            ]);
        }
    }
}