<?php
namespace App\models;

use CodeIgniter\Model;
class CriminalModel extends model{
    protected $table = "defendants";
    protected $primaryKey = 'defendant_id';
    protected $returnType = 'array';
    protected $allowedFields = ['Fname', 'Lname', 't_arrested', 'L_arrested','relationship', 'age', 'bail','charges'];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
}