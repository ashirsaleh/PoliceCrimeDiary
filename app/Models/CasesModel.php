<?php

namespace App\models;

use CodeIgniter\Model;

class CasesModel extends model
{
    protected $table = "cases";
    protected $primaryKey = 'Case_id';
    protected $returnType = 'array';
    protected $allowedFields = ['case_no', 'criminal_name', 'action_commited', 'conviction', 'd_convicton', 'case_status'];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
}