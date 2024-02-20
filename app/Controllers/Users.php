<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{

    protected $users;

    public function __construct(){
        $this->users=new UserModel();
    }

    public function index()
    {

        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM user where name="Juan"');
        #$data=['Title'=>'Total users: ', 'data'=>$users];
        $data=$query->getResult();
        $data2=['title'=>'Hello', 'data'=>$data];
        echo view('header');
        echo view('users',$data2);
        echo view('footer');
    }

    public function index2()
    {

        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM user where name="Juan"');
        #$data=['Title'=>'Total users: ', 'data'=>$users];
        $data=$query->getResult();
        $data2=['title'=>'Hello', 'data'=>$data];
        echo view('header');
        echo view('users',$data2);
        echo view('footer');
    }

    public function register(){
        

    $db = \Config\Database::connect();

    // Datos del nuevo usuario
    $data=['username' => $this->request ->getPost('username'),
            'password' =>$this->request ->getPost('password'),
            'name' =>$this->request ->getPost('name')
    ];

    // Ejecutar la consulta de inserción
    $db->table('user')->insert($data);

        return redirect()->to('http://localhost/bookstore/public/');
    }
}
