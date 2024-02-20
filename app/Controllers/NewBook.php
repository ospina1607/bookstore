<?php

namespace App\Controllers;

use App\Models\UserModel;

class NewBook extends BaseController
{



    public function index()
    {
        echo view('header');
        echo view('nbook');
        echo view('footer');
    }



    public function register(){
    $db = \Config\Database::connect();
    $query = "SELECT id FROM category WHERE name = ?";
    $categoryName=$this->request ->getPost('category');
    $result = $db->query($query, [$categoryName]);
    $img=$this->request ->getFile('bookimg');
    $img->move('./images');
    $imgName=$img->getName();
    $data=['title' => $this->request ->getPost('title'),
            'author' =>$this->request ->getPost('author'),
            'category_id' =>1,
            'description' => $this->request ->getPost('description'),
            'image_id'=> $imgName
    ];

    // Ejecutar la consulta de inserción
    $db->table('book')->insert($data);
        return redirect()->to('http://localhost/bookstore/public/books');
    }
}
