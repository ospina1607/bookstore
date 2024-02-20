<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class SessionUser implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
            if(!session('type') == 'user') {
                return redirect()->to(base_url('/'));
            }
        return;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}