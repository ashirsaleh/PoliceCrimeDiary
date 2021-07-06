<?php

namespace App\models;

use CodeIgniter\Model;

class CasesModel extends model {
    protected $table = "cases";
    protected $primaryKey = 'caseId';
    protected $returnType = 'array';
    protected $allowedFields = ['caseNo', 'criminalName', 'charges', 'conviction', 'caseStatus', 'conDate'];
}
