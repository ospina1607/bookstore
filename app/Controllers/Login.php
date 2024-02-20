<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        echo view('login');
    }


    public function verifyLogin(){

        $db = \Config\Database::connect();
        $query = "SELECT * FROM user WHERE username = ? and password = ?";
        $username=$this->request ->getPost('username');
        $password=$this->request ->getPost('password');
        $result = $db->query($query, [$username, $password]);
        
        if(sizeof($result->getResultArray())>0){
           $session=session();
           $data=$result->getResultArray();
           $session->set('username',$username) ;
           $session->set('type',"user") ;
            return redirect()->to('http://localhost/bookstore/public/books');
        }
       
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('http://localhost/bookstore/public/');
    }
}