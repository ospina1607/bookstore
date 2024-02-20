<?php

namespace App\Controllers;

use App\Models\BookModel;

class Books extends BaseController
{

    protected $books;

    #This constructor queries the database, and looks for all de books
    #that are not associated with a reserve
    public function __construct(){
        $db = \Config\Database::connect();
        $query = "SELECT book.id, book.image_id, book.description, book.title ,book.author, category.name AS category
        FROM book
        JOIN category ON book.category_id = category.id
        WHERE book.reserve_id is null
        ";
        $result = $db->query($query);
        $this->books=$result->getResultArray();
        print_r(sizeof($this->books));
    }

    public function index()
    {
        $data=session()->get();
        $books=$this->books;
        echo view('header2',$data);
        echo view('books',['books' => $books]);
        echo view('footer');
    }
}
