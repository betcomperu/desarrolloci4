<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterUsuario implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->rol == '') {
            return redirect()->to('login/index');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->rol == 3) {
            return redirect()->to('home/index');
        }
    }
}