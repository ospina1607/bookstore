<?php

namespace App\Models;

use CodeIgniter\Model;


class BookModel extends Model{

    protected $table      = 'book';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['title', 'Author', 'category_id', 'state', 'description', 'reserve_id'];

    protected bool $allowEmptyInserts = false;


    public function reserve()
    {
        return $this->belongsTo('App\Models\ReserveModel', 'reserve_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\UserModel', 'reserve_id', 'id');
    }
    // Dates


    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}
?>