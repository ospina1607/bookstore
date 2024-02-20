<?php

namespace App\Controllers;

use App\Models\ReserveModel;

class Reserve extends BaseController
{

    protected $reserves;
    public function __construct(){
        
    }


    public function index(){

        $username=session()->get('username');
        $data=session()->get();
        $db = \Config\Database::connect();
        $query = "SELECT book.id,  book.title ,book.author, reserve.id AS reserve_id
        FROM book
        JOIN reserve ON book.reserve_id = reserve.id
        WHERE reserve.user_id=?
        ";
        $result = $db->query($query, $username);
        $this->reserves=$result->getResultArray();
        echo view('header2',$data);
        echo view('myreserves',['reserves' => $this->reserves]);
        echo view('footer');
    }

    //Create reserve
    public function create($bookId, $days)
    {

        $reserveModel= new ReserveModel();
        $bookId=$this->request ->getPost('bookId');
        $days=$this->request ->getPost('days');

        $userId=session()->get('username');

        //Reserve data
        $data=['days' => $days,
                'user_id' =>$userId
        ];

        $reserveModel->insert($data);
        $reserveId = $reserveModel->insertID();
        $db = \Config\Database::connect();
        $query = "UPDATE book SET reserve_id = ? WHERE id = ?;";
        $result = $db->query($query, [$reserveId, $bookId]);

            return redirect()->to('http://localhost/bookstore/public/myreserves');
    }

    //Dletes a reserve and its relations
    public function delete($bookId, $rid)
    {
        $db = \Config\Database::connect();
        $query = "UPDATE book SET reserve_id = null WHERE id = ?;";
        $result = $db->query($query,$bookId);

        $query = "UPDATE reserve SET user_id = null WHERE id = ?;";
        $result2 = $db->query($query,$rid);

        $query = "DELETE FROM reserve WHERE id = ?;";
        $result3 = $db->query($query,$rid);

        return redirect()->to('http://localhost/bookstore/public/myreserves');
    }
}
