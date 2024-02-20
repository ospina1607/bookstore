<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=session()->get();
        echo view('header2',$data);
        echo view('tables');
        echo view('footer');
    }
}
