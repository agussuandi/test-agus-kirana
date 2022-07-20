<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class FilterApi implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        echo 22; die();
    }
}