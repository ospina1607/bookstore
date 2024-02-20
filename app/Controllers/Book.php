<?php

namespace App\Controllers;

class Book extends BaseController
{


    protected $books;

    public function __construct(){
        
    }

    public function index()
    {
        echo view('header');
        echo view('tables');
        echo view('footer');
    }
}
