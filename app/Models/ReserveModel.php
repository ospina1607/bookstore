<?php

namespace App\Models;

use CodeIgniter\Model;

class ReserveModel extends Model
{
    protected $table      = 'reserve'; // Table name
    protected $primaryKey = 'id'; // id number
    protected $returnType     = 'array'; 
    protected $allowedFields = ['days', 'user_id']; // Allowed fields
}
?>