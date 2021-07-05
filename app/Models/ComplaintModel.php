<?php

namespace App\models;

use CodeIgniter\Model;

class ComplaintModel extends model {
    protected $table = "complainers";
    protected $primaryKey = 'complainerId';
    protected $returnType = 'array';
    protected $allowedFields = ['FName', 'LName', 'address', 'date', 'phoneNum', 'time', 'natureComplaints', 'th_name', 'def_info', 'other_info', 'type', 'p_number', 'color', 'w_statement', 'accusation'];
}
